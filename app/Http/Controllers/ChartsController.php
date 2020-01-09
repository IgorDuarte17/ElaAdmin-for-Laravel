<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function chartjs()
    {
        return view('charts.charts-chartjs')->with('title', 'Chart JS');
    }

    public function flot()
    {
        return view('charts.charts-flot')->with('title', 'Flot Chart');
    }

    public function peity()
    {
        return view('charts.charts-peity')->with('title', 'Peity Chart');
    }
}
