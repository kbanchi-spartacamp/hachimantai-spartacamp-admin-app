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
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;

        $restaurant->save();

        return redirect()->route('restaurants.index');
    }

    public function create()
    {
        $latitude = 39.91402764039571;
        $longitude = 141.1007601246386;
        $zoom = 10;

        $data = [
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
        ];

        return view('restaurants.create', $data);
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        $latitude = $restaurant->latitude;
        $longitude = $restaurant->longitude;
        $zoom = 10;
        $data = [
            'restaurant' => $restaurant,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
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
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;

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
        $latitude = $restaurant->latitude;
        $longitude = $restaurant->longitude;
        $zoom = 10;

        $data = [
            'restaurant' => $restaurant,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
        ];
        return view('restaurants.edit', $data);
    }
}
