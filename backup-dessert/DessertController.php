<?php

namespace App\Http\Controllers;

use App\Models\Dessert;

class DessertController extends Controller
{
    public function index()
    {
        $desserts = Dessert::all();

        return view('dessert.index', compact('desserts'));
    }
}