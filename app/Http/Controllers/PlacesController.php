<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlacesController extends Controller
{
    public function list() {
        $places = Place::all();
        return view('welcome', compact('places'));
    }

    public function create(Request $req) {
        try {
            $place = new Place;

            $place->name = $req->name;
            $place->longitude = $req->longitude;
            $place->latitude = $req->latitude;
            $place->population = $req->population;

            $place->save();
            return $place;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
