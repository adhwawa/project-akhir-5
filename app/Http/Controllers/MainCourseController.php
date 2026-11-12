<?php

namespace App\Http\Controllers;

class MainCourseController extends Controller
{
    public function index()
    {
        return view('auth.maincourse');
    }
}