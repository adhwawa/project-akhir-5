<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class SoftDrinkController extends Controller
{
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'like', '%Soft%');
            })      
            ->oldest('id')
            ->get();

        return view('auth.softdrink', compact('menus'));
    }
}