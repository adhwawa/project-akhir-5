<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MainCourse;

class MainCourseController extends Controller
{
    // Menampilkan daftar Main Course
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Main Course');
            })
            ->orderBy('id')
            ->get();

        return view('auth.maincourse', compact('menus'));
    }

    // Menampilkan detail menu
    public function detail($slug)
    {
        $menu = MainCourse::find($slug);

        abort_unless($menu, 404);

        return view('detailmaincourse', [
            'menu' => $menu,
            'slug' => $slug
        ]);
    }
}
