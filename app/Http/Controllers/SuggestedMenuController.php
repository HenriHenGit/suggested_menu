<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_nutri;
use App\Models\Food;
use App\Models\Food_nutri;
use App\Models\User;
use App\Models\Nutri;
use App\Models\User_detail;
use Illuminate\Support\Facades\DB;

class SuggestedMenuController extends Controller
{
    public function handle(Request $request)
    {
        // Nhận request id của người dùng (demo vd: 2)
        $userId = 2;
        // Phần trăm sai lệch bữa ăn (Mặc định 5%)
        $tolerance = 0.05;
        // Số lần lập tạo ra bữa ăn (Tối thiểu là 20,...)
        $timesFind = 100;
        // Tìm chính xác theo nhu cầu dinh dưỡng (Tối thiểu là 600->1000...)
        $toleranceMeal = 600;

        // Số lần bữa ăn trong 1 ngày (Có thể sửa)
        if (!empty($request['meals_per_day']))
            $meals_per_day = $request['meals_per_day'];
        else
            $meals_per_day = 1; // (Có thể sửa)

        // Lấy thông tin người dùng (Mặc định)
        $user = User::find($userId);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $age = $user->age;
        $gender = $user->gender;
        $level = $user->level;

        // Lấy nhu cầu dinh dưỡng của người dùng đã có sẵn (Mặc định)
        $needsReference = Order_nutri::where('age', $age)
            ->where('gender', $gender)
            ->where('level', $level)
            ->get();
        // Thêm nhu cầu người dùng vào order_nutri (Mặc định)
        $this->insertUserDetail($needsReference, $userId);

        $needs = User_detail::where('user_id', $userId)->get();

        // Chia nhu cầu dinh dưỡng thành các bữa ăn (Mặc định)
        $needsPerMeal = $this->divideDailyNeeds($needs, $meals_per_day);

        // Lấy thông tin dinh dưỡng của các món ăn (Mặc định)
        $foodNutri = Food_nutri::all();

        // Lấy thông tin món ăn từ bảng food và phân loại (Mặc định)
        $categorizedFoods = $this->getFoods();

        // Tạo bữa ăn từ các món ăn phân loại (Mặc định)
        $meals = $this->createMeals($categorizedFoods, $needsPerMeal, $timesFind, $toleranceMeal);

        // Thêm vào bảng oder_nutri (Mặc định)
        $needsUser = $this->initialDailyNeeds($needs, $meals_per_day);

        // Lấy thông tin dinh dưỡng
        $nutriDetail = Nutri::all();

        // Người dùng đã có bữa ăn không tạo nữa (trả về là 1)
        $createdMeal = $request['createdMeal'];

        //Chuyển dữ dữ liệu sang MenuController
        $this->transferMeal($userId, $meals);
        return view('suggest_meals', compact('meals', 'needsUser', 'nutriDetail', 'createdMeal'));
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


    // Nhu cầu dinh dưỡng người dùng
    private function initialDailyNeeds($needs, $meals_per_day)
    {
        $portion = 1 * $meals_per_day;
        foreach ($needs as $need) {
            $need->amount *= $portion;
        }
        return $needs;
    }

    // Thêm user mới vào order_nutri
    private function insertUserDetail($orderNutris, $userId)
    {
        $data = User_detail::where('user_id', $userId)->first();
        if (!isset($data)) {
            foreach ($orderNutris as $orderNutri) {
                $order_nutri = new User_detail;
                $order_nutri->user_id = $userId;
                $order_nutri->nutri_id = $orderNutri->nutri_id;
                $order_nutri->amount = $orderNutri->amount;
                $order_nutri->save();
            }
        }
    }

    // Cập nhật nhu cầu dinh dưỡng người dùng
    public function update(Request $request)
    {
        foreach ($request->input('nutri_needs') as $key => $need) {
            $userDetail = User_detail::where('user_id', $need['user_id'])
                ->where('nutri_id', $key)->first();
            if ($userDetail) {
                $userDetail->amount = $need['amount'];
                $userDetail->save();
            }
        }
        $meals_per_day = $request->input('meals_per_day');

        return redirect()->route('suggestMeal.handle', compact('meals_per_day'));
    }

    private function calculatorDifference($mealNutri, $needsPerMeal)
    {
        $totalFood = 0;
        foreach ($needsPerMeal as $need) {
            if (isset($mealNutri[$need->nutri_id])) {
                $totalFood += abs(round($mealNutri[$need->nutri_id]) - round($need->amount));
            }
        }
        return $totalFood;
    }

    private function mealNutrition($listFood, $needsPerMeal)
    {
        $mealNutri = [];
        foreach ($listFood as $food) {
            $foodNutri = Food_nutri::where('food_id', $food->id)->get();
            foreach ($needsPerMeal as $need) {
                foreach ($foodNutri as $nutri) {
                    if (!isset($mealNutri[$need->nutri_id])) {
                        $mealNutri[$need->nutri_id] = 0;
                    }
                    if ($need->nutri_id == $nutri->nutri_id)
                        $mealNutri[$need->nutri_id] += round($nutri->amount) / $food->number_eat;
                }
            }
        }
        return $mealNutri;
    }


    //Lấy thông tin món ăn từ bảng food và phân loại
    private function getFoods()
    {
        $foods = Food::select('id', 'food_name', 'desc', 'img', 'number_eat', 'category_food_id')->get();

        $categorizedFoods = [
            'main_dishes' => [],
            'drinks' => [],
            'appetizer' => [],
            'desserts' => []
        ];

        foreach ($foods as $food) {
            switch ($food->category_food_id) {
                case 'main_dishes':
                case 'drinks':
                case 'appetizer':
                case 'desserts':
                    $categorizedFoods[$food->category_food_id][] = $food;
                    break;
            }
        }

        return $categorizedFoods;
    }

    private function createMeals($categorizedFoods, $meals_per_day, $timesFind = 100, $toleranceMeal = 600)
    {
        $meals = [];
        $categories = ['main_dishes', 'appetizer', 'desserts'];


        for ($i = 0; $i < $timesFind; $i++) {
            $meal = [];
            $mealNutri = [];


            foreach ($categories as $category) {

                $foodsInCategory = $categorizedFoods[$category];


                if (!empty($foodsInCategory)) {

                    $food = array_shift($foodsInCategory);
                    $listFood = [$food];

                    foreach (array_diff($categories, [$category]) as $otherCategory) {

                        if (!empty($categorizedFoods[$otherCategory])) {

                            $otherFood = array_shift($categorizedFoods[$otherCategory]);
                            $listFood[] = $otherFood;
                        }
                    }

                    $totalNutriFood = $this->mealNutrition($listFood, $meals_per_day);
                    $difference = $this->calculatorDifference($totalNutriFood, $meals_per_day);

                    if ($difference <= $toleranceMeal) {
                        $meal[$listFood[0]->category_food_id] = $listFood[0];
                        $meal[$listFood[1]->category_food_id] = $listFood[1];
                        $meal[$listFood[2]->category_food_id] = $listFood[2];
                        $mealNutri = $totalNutriFood;
                    }

                    if (!isset($meal[$category])) {
                        array_unshift($categorizedFoods[$category], $food);
                    }
                }
            }

            if (!empty($meal)) {
                $meals[] = [
                    'meal' => $meal,
                    'nutri' => $mealNutri
                ];
            }
        }
        return $meals;
    }


    private function transferMeal($userId, $meals)
    {
        session()->flash('userId', $userId);
        session()->flash('meals', $meals);

        return redirect()->route('menu.store');
    }
}
