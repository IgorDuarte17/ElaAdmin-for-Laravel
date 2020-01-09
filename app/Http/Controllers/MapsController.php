<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function gmap()
    {
        return view('maps.maps-gmap')->with('title', 'Google Maps');
    }

    public function vector()
    {
        return view('maps.maps-vector')->with('title', 'Vector Maps');
    }
}
