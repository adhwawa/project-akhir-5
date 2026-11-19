<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use App\Models\MainCourse;

class MainCourseController extends Controller
{
    // Menampilkan halaman daftar Main Course
    public function index()
    {
        $menus = MainCourse::all();

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
