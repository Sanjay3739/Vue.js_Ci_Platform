<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        //fetch the api through city and country, with using script

        $data['cities'] = City::where("country_id", $request->country_id)
            ->orderBy('name')
            ->get(['name', 'city_id']);

        return response()->json($data);
    }
    public function fetch()
    {
        $countries = Country::all();
        return response()->json(['countries' => $countries], 201);
    }
}
