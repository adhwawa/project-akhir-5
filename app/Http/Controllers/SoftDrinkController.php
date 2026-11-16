<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftDrinkController extends Controller
{
    public function index()
    {
        return view('auth.softdrink');
    }
}
