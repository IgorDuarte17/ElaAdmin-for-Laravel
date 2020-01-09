<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('extra-pages.page-login')->with('title', 'Login');
    }

    public function register()
    {
        return view('extra-pages.page-register')->with('title', 'Register');
    }

    public function forget()
    {
        return view('extra-pages.page-forget')->with('title', 'Forget Pass');
    }
}
