<?php

namespace App\Http\Controllers;

use App\Models\Hotspring;
use Illuminate\Http\Request;

class HotspringController extends Controller
{
    public function index()
    {
        $hotsprings = Hotspring::all();
        $data = [
            'hotsprings' => $hotsprings,
        ];
        return view('hot-springs.index', $data);
    }

    public function store(Request $request)
    {
        $hotspring = new Hotspring();

        $hotspring->name = $request->name;
        $hotspring->description = $request->description;
        $hotspring->image_url = $request->image_url;
        $hotspring->hp_url = $request->hp_url;
        $hotspring->latitude = $request->latitude;
        $hotspring->longitude = $request->longitude;

        $hotspring->save();

        return redirect()->route('hot-springs.index');
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

        return view('hot-springs.create', $data);
    }

    public function show($id)
    {
        $hotspring = Hotspring::find($id);
        $latitude = $hotspring->latitude;
        $longitude = $hotspring->longitude;
        $zoom = 10;

        $data = [
            'hotspring' => $hotspring,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
        ];
        return view('hot-springs.show', $data);
    }

    public function update(Request $request, $id)
    {
        $hotspring = Hotspring::find($id);

        $hotspring->name = $request->name;
        $hotspring->description = $request->description;
        $hotspring->image_url = $request->image_url;
        $hotspring->hp_url = $request->hp_url;
        $hotspring->latitude = $request->latitude;
        $hotspring->longitude = $request->longitude;

        $hotspring->save();

        return redirect()->route('hot-springs.index');
    }

    public function destroy($id)
    {
        $hotspring = Hotspring::find($id);
        $hotspring->delete();
        return redirect()->route('hot-springs.index');
    }

    public function edit($id)
    {
        $hotspring = Hotspring::find($id);
        $latitude = $hotspring->latitude;
        $longitude = $hotspring->longitude;
        $zoom = 10;

        $data = [
            'hotspring' => $hotspring,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
        ];
        return view('hot-springs.edit', $data);
    }
}
