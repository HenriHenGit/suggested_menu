<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_nutri;
use App\Models\Food;
use App\Models\Food_nutri;
use Illuminate\Support\Facades\DB;

class SuggestedMenuController extends Controller
{
    public function index()
    {
        return view('infor_user');
    }

    public function hand(Request $request)
    {
        // Lấy dữ liệu từ request
        $age = $request->input('age');
        $gender = $request->input('gender');
        $level = $request->input('level');
        // $weight = $request->input('weight');
        // $height = $request->input('height');
        $meals_per_day = $request->input('meals_per_day', 4); // Số bữa ăn mặc định là 4 nếu không có trong request
        // $eats = $request->input('eats', 4);

        // Lấy nhu cầu dinh dưỡng của người dùng
        $needs = Order_nutri::where('age', $age)
            ->where('gender', $gender)
            ->where('level', $level)
            ->get();

        $tolerance = 0.01;

        // Chia nhu cầu dinh dưỡng thành các bữa ăn
        $needsPerMeal = $this->divideDailyNeeds($needs, $meals_per_day);

        // Lấy thông tin dinh dưỡng của các món ăn
        $foodNutri = Food_nutri::all();

        // Tìm các món ăn thỏa mãn nhu cầu dinh dưỡng
        $matchingFoodIds = $this->findMatchingFoods($needsPerMeal, $foodNutri, $tolerance);

        // Lấy thông tin món ăn từ bảng food và phân loại
        $categorizedFoods = $this->getFoods($matchingFoodIds);

        // Tạo bữa ăn từ các món ăn phân loại
        $meals = $this->createMeals($categorizedFoods, $needsPerMeal, $tolerance);

        // dd($meals);

        //Thêm vào bảng oder_nutri
        // $this->insertOrderNutri($needsPerMeal, 2); /// user id vd

        return view('suggest_meals', compact('meals', 'needsPerMeal'));
        // dd($categorizedFoods);
    }

    // Chia nhu cầu dinh dưỡng thành các bữa ăn
    private function divideDailyNeeds($needs, $meals_per_day)
    {
        $portion = 1 / $meals_per_day;
        foreach ($needs as $need) {
            $need->amount *= $portion;
        }
        return $needs;
    }

    private function insertOrderNutri($orderNutris, $userId)
    {
        foreach ($orderNutris as $orderNutri) {
            $order_nutri = new Order_nutri;
            $order_nutri->age = $orderNutri->age;
            $order_nutri->gender = $orderNutri->gender;
            $order_nutri->level = $orderNutri->level;
            $order_nutri->level_detail = $orderNutri->level_detail;
            $order_nutri->amount = $orderNutri->amount;
            $order_nutri->nutri_id = $orderNutri->nutri_id;
            $order_nutri->user_id = $userId;
            $order_nutri->save();
        }
    }

    // private function showNutritionalNeeds($userId = 2)
    // {
    //     // Lấy thông tin dinh dưỡng của người dùng
    //     $nutritionalNeeds = Order_nutri::where('user_id', $userId)->get();
    //     // Trả về view với dữ liệu dinh dưỡng của người dùng
    //     return $nutritionalNeeds;
    // }
    public function update(Request $request)
    {
        $userId = 2; // Giả sử user_id hiện tại là 1

        // Xử lý cập nhật thông tin dinh dưỡng
        // foreach ($request->input('nutritional_needs') as $need) {
        //     $orderNutri = Order_nutri::find($need['id']);
        //     $orderNutri->amount = $need['amount'];
        //     $orderNutri->save();
        // }

        // Chuyển hướng về trang đề xuất bữa ăn
        // return redirect()->route('suggestMeal.hand');
    }


    // Tìm các món ăn thỏa mãn nhu cầu dinh dưỡng
    private function findMatchingFoods($needs, $foodNutri, $tolerance = 0.01)
    {
        $matchingFoods = [];
        foreach ($needs as $need) {
            foreach ($foodNutri as $food) {
                if ($food->nutri_id == $need->nutri_id) {
                    $difference = abs($food->amount - $need->amount);
                    if ($difference <= $need->amount * $tolerance) {
                        // if (!isset($matchingFoods[$food->food_id])) {
                        //     $matchingFoods[$food->food_id] = [];
                        // }
                        $matchingFoods[$food->food_id][] = $food->nutri_id;
                    }
                }
            }
        }
        return $matchingFoods;
    }

    // Lấy thông tin món ăn từ bảng food và phân loại
    private function getFoods($foodIds)
    {
        $foods = Food::whereIn('id', array_keys($foodIds))->get();

        $categorizedFoods = [
            'main_dishes' => [],
            'drinks' => [],
            'appetizer' => [],
            'desserts' => []
        ];
        foreach ($foods as $food) {
            switch ($food->category_food_id) {
                case 'main_dishes':
                    $categorizedFoods['main_dishes'][] = $food;
                    break;
                case 'drinks':
                    $categorizedFoods['drinks'][] = $food;
                    break;
                case 'appetizer':
                    $categorizedFoods['appetizer'][] = $food;
                    break;
                case 'desserts':
                    $categorizedFoods['desserts'][] = $food;
                    break;
            }
        }
        return $categorizedFoods;
    }

    // Tạo bữa ăn từ các món ăn phân loại
    private function createMeals($categorizedFoods, $needsPerMeal, $tolerance = 0.01)
    {
        $meals = [];
        $categories = ['main_dishes', 'drinks', 'appetizer', 'desserts'];
        foreach ($needsPerMeal as $needs) {
            $meal = [];
            $mealNutri = [];

            foreach ($categories as $category) {
                if (!empty($categorizedFoods[$category])) {
                    $food = array_shift($categorizedFoods[$category]);
                    $meal[$category] = $food;
                    $foodNutri = Food_nutri::where('food_id', $food->id)->get();
                    foreach ($foodNutri as $nutri) {
                        if (!isset($mealNutri[$nutri->nutri_id])) {
                            $mealNutri[$nutri->nutri_id] = 0;
                        }
                        $mealNutri[$nutri->nutri_id] += $nutri->amount / $food->number_eat;
                    }
                }
            }
            foreach ($needsPerMeal as $need) {
                // dd($mealNutri[$need->nutri_id]);
                if (isset($mealNutri[$need->nutri_id]) && $mealNutri[$need->nutri_id] > $need->amount * (1 + $tolerance)) {
                    unset($meal[$category]); // $category đã được định nghĩa ở đâu đó trong vòng lặp
                }
            }
            $meals[] = [
                'meal' => $meal,
                'nutri' => $mealNutri
            ];
        }
        return $meals;
    }
}
