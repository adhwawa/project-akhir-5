<?php

namespace App\Http\Controllers;
use App\Models\Menu;

class MainCourseController extends Controller
{
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Main Course');
            })
            ->oldest('id')
            ->get();

        return view('auth.maincourse', compact('menus'));
    }
}