<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function index()
    {
        $data = [];
            $countries = Country::all(); // 全件取得
            
         $data = [
                'countries' => $countries,
            ];
        

        return view('country.countries', $data);
    }
}
