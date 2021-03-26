<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
    public function insert_items()
    {
        return view ('insert_items');
    }
    public function prueba()
    {
        return view('prueba');
    }
    
}
