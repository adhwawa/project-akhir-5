<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreshJuiceController extends Controller
{
    public function index()
    {
        return view('auth.freshjuice');
    }
}
