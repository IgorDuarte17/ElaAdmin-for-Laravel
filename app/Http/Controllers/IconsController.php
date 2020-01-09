<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconsController extends Controller
{
    public function fontawesome()
    {
        return view('icons.font-fontawesome')->with('title', 'Font Awesome');
    }

    public function themify()
    {
        return view('icons.font-themify')->with('title', 'Font Themify');
    }
}
