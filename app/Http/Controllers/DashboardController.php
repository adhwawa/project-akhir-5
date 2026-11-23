<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Menu;

use Illuminate\Http\Request;
class DashboardController extends Controller
{ 
public function index()
{
    $menus = Menu::with('subCategory')
        ->orderBy('id')
        ->get();

    return view('dashboard', compact('menus'));
}
}
