<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MainCourseController extends Controller
{
    public function index()
    {
        $menus = Menu::where('kategori_utama', 'MAIN COURSE')
            ->where('status', 'aktif')
            ->where('tampilkan_katalog', true)
            ->latest()
            ->get();

        return view('maincourse', compact('menus'));
    }

    public function detail($slug)
    {
        $menu = Menu::where('slug', $slug)
            ->where('status', 'aktif')
            ->firstOrFail();

        return view('detailmaincourse', compact('menu'));
    }
}