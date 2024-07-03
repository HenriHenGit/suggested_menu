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
            'drinks' => 2,
            'appetizer' => 3,
            'desserts' => 4,
        ];
        $userId = session('userId');

        $meals = session('meals');
        if (!empty($meals)) {
            foreach ($meals as $index => $meal) {
                $isMeal = 'Bữa ăn ' . ($index + 1);
                $location = 0;
                $i = 0;
                foreach ($meal['meal'] as $category => $food) {
                    if (isset($categories[$category])) {
                        $location = $categories[$category];
                    } else {
                        $location = 0;
                    }
                    $menu = new Menu();
                    $data = Menu::where('user_id', $userId)
                        ->where('food_id', $food->id)
                        ->first();
                    if (isset($data[0])) {
                        $menu->user_id = $userId;
                        $menu->food_id = $food->id;
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
