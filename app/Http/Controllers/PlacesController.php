<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlacesController extends Controller
{
    public function list(Request $req) {
        $places = Place::all();
        return view('welcome', compact('places'));
    }

    public function create(Request $req) {
        try {
            $place = Place::create();

            $place->name = $req->name;
            $place->longitude = $req->longitude;
            $place->latitude = $req->latitude;
            $place->population = $req->population;

            $place->save();
            return $place;
        } catch (\Exception $e) {
            return 'Internal error';
        }
    }
}
