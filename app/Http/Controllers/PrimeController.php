<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    public function home()
    {
       return view('template.index');
    }

    public function login()
    {
        return view('auth.login_register');
    }
}
