<?php

namespace App\Http\Controllers;

use App\Models\Menu;
<<<<<<< HEAD
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
=======
use Illuminate\Http\Request;

class MainCourseController extends Controller
{
    public function index()
    {
        $menus = Menu::where('kategori_utama', 'MAIN COURSE')
            ->where('status', 'aktif')
            ->where('tampilkan_katalog', true)
            ->latest()
>>>>>>> 7864247441c7b60bba6309419d51de77380fe7a7
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