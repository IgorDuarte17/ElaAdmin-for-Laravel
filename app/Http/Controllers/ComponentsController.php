<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function buttons()
    {
        return view('components.ui-buttons')->with('title', 'Buttons');
    }

    public function badges()
    {
        return view('components.ui-badges')->with('title', 'Badges');
    }

    public function tabs()
    {
        return view('components.ui-tabs')->with('title', 'Tabs');
    }

    public function cards()
    {
        return view('components.ui-cards')->with('title', 'Cards');
    }

    public function alerts()
    {
        return view('components.ui-alerts')->with('title', 'Alerts');
    }

    public function progressbar()
    {
        return view('components.ui-progressbar')->with('title', 'Progress Bars');
    }

    public function modals()
    {
        return view('components.ui-modals')->with('title', 'Modals');
    }

    public function switches()
    {
        return view('components.ui-switches')->with('title', 'Switches');
    }

    public function grids()
    {
        return view('components.ui-grids')->with('title', 'Grids');
    }

    public function typgraphy()
    {
        return view('components.ui-typgraphy')->with('title', 'Typgraphy');
    }
}
