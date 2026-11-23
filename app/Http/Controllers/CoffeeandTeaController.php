<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;

class CoffeeandTeaController extends Controller
{
    // MENAMPILKAN DAFTAR MENU COFFEE & TEA
    public function index()
    {
        $menus = Menu::with('subCategory')
            ->where('kategori_utama', 'Minuman')
            ->whereHas('subCategory', function ($query) {
                $query->where('slug', 'coffe-tea');
            })
            ->orderBy('id')
            ->get();

        return view('auth.coffeeandtea', compact('menus'));
    }

public function detail($slug)
{
    $normalisasi = function ($nama) {
        $nama = \Illuminate\Support\Str::slug($nama);

        // Hapus variasi akhiran Ice/Hot
        $nama = preg_replace('/-?ice-?hot$/', '', $nama);

        // Samakan variasi penulisan menu

$nama = str_replace('moccacino', 'mocaccino', $nama);
$nama = str_replace('cappucino', 'cappuccino', $nama);
$nama = str_replace('coffe-', 'coffee-', $nama);


        return $nama;
    };

    $slugDicari = $normalisasi($slug);

    $menu = \App\Models\Menu::where('kategori_utama', 'Minuman')
        ->get()
        ->first(function ($item) use ($slugDicari, $normalisasi) {
            return $normalisasi($item->nama_menu) === $slugDicari;
        });

    abort_unless($menu, 404);

    return view('detailcoffeeandtea', [
        'menu' => [
            'id' => $menu->id,
            'nama' => $menu->nama_menu,
            'kategori' => 'COFFEE & TEA',
            'harga' => $menu->harga,
            'gambar' => $menu->foto,
            'deskripsi' => $menu->deskripsi,
        ],
        'slug' => $slug
    ]);
}
}
