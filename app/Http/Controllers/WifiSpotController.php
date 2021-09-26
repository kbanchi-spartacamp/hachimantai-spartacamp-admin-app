<?php

namespace App\Http\Controllers;

use App\Models\WifiSpot;
use Illuminate\Http\Request;

class WifiSpotController extends Controller
{
    public function index()
    {
        $wifispots = WifiSpot::all();
        $data = [
            'wifispots' => $wifispots,
        ];
        return view('wifi-spots.index', $data);
    }

    public function store(Request $request)
    {
        $wifispot = new WifiSpot();

        $wifispot->name = $request->name;
        $wifispot->description = $request->description;
        $wifispot->image_url = $request->image_url;
        $wifispot->hp_url = $request->hp_url;
        $wifispot->latitude = $request->latitude;
        $wifispot->longitude = $request->longitude;

        $wifispot->save();

        return redirect()->route('wifi-spots.index');
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

        return view('wifi-spots.create', $data);
    }

    public function show($id)
    {
        $wifispot = WifiSpot::find($id);
        $latitude = $wifispot->latitude;
        $longitude = $wifispot->longitude;
        $zoom = 10;

        $data = [
            'wifispot' => $wifispot,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
        ];
        return view('wifi-spots.show', $data);
    }

    public function update(Request $request, $id)
    {
        $wifispot = WifiSpot::find($id);

        $wifispot->name = $request->name;
        $wifispot->description = $request->description;
        $wifispot->image_url = $request->image_url;
        $wifispot->hp_url = $request->hp_url;
        $wifispot->latitude = $request->latitude;
        $wifispot->longitude = $request->longitude;

        $wifispot->save();

        return redirect()->route('wifi-spots.index');
    }

    public function destroy($id)
    {
        $wifispot = WifiSpot::find($id);
        $wifispot->delete();
        return redirect()->route('wifi-spots.index');
    }

    public function edit($id)
    {
        $wifispot = WifiSpot::find($id);
        $latitude = $wifispot->latitude;
        $longitude = $wifispot->longitude;
        $zoom = 10;

        $data = [
            'wifispot' => $wifispot,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'zoom' => $zoom,
        ];
        return view('wifi-spots.edit', $data);
    }
}
