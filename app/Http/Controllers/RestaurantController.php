<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        $data = [
            'restaurants' => $restaurants,
        ];
        return view('restaurants.index', $data);
    }

    public function store(Request $request)
    {
        $restaurant = new Restaurant();

        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->image_url = $request->image_url;
        $restaurant->hp_url = $request->hp_url;

        $restaurant->save();

        return redirect()->route('restaurants.index');
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        $data = [
            'restaurant' => $restaurant,
        ];
        return view('restaurants.show', $data);
    }

    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::find($id);

        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->image_url = $request->image_url;
        $restaurant->hp_url = $request->hp_url;

        $restaurant->save();

        return redirect()->route('restaurants.index');
    }

    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        return redirect()->route('restaurants.index');
    }

    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        $data = [
            'restaurant' => $restaurant,
        ];
        return view('restaurants.edit', $data);
    }
}
