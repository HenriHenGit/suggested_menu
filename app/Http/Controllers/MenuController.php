<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $categories = [
            'main_dishes' => 1,
            'appetizer' => 2,
            'desserts' => 3,
        ];

        $userId = session('userId');

        $meals = session('meals');
        if (!empty($meals)) {
            foreach ($meals as $index => $meal) {
                $isMeal = 'Bữa ăn ' . ($index + 1);
                $location = 0;
                foreach ($meal['meal'] as $category => $food) {
                    $location = $categories[$category] ?? 0;

                    $menu = Menu::where('user_id', $userId)
                        ->where('food_id', $food['id'])
                        ->first();

                    if (!$menu) {
                        $menu = new Menu();
                        $menu->user_id = $userId;
                        $menu->food_id = $food['id'];
                        $menu->is_meal = $isMeal;
                        $menu->location = $location;
                        $menu->save();
                    }
                }
            }
        }
        $createdMeal = true;
        return redirect()->route('suggestMeal.handle', compact('createdMeal'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
