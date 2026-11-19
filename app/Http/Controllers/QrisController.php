<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrisController extends Controller
{ 
    public function index()
    {
        return view('Qris');
    }
}