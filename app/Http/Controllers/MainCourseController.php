<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use App\Models\MainCourse;

class MainCourseController extends Controller
{
    // Menampilkan halaman daftar Main Course
    public function index()
    {
<<<<<<< HEAD
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Makanan')
            ->where('tampilkan_katalog', true)
            ->whereHas('subCategory', function ($q) {
                $q->where('nama_sub_kategori', 'Main Course');
            })
            ->oldest('id')
            ->get();
=======
        $menus = MainCourse::all();
>>>>>>> c5063edab9f546212c5069946789d635b86cbbb9

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
