<?php

namespace App\Models;

class FreshJuice
{
    public static function all()
    {
        return [
            'fresh-orange' => [
                'nama' => 'Fresh Orange',
                'kategori' => 'FRESH JUICE',
                'harga' => 28000,
                'gambar' => 'gambar/fresh juice/orange.png',
                'deskripsi' => 'Jus jeruk segar yang dibuat dari perasan buah jeruk pilihan tanpa tambahan perasa buatan. Disajikan dingin dengan es batu dan irisan jeruk sebagai garnish.'
            ],
            'watermelon' => [
                'nama' => 'Watermelon',
                'kategori' => 'FRESH JUICE',
                'harga' => 28000,
                'gambar' => 'gambar/fresh juice/watermelon.png',
                'deskripsi' => 'Jus buah semangka segar yang diblender dengan tambahan sedikit air dan gula sesuai kebutuhan. Disajikan dingin dengan es batu serta potongan kecil buah semangka sebagai topping.'
            ],
            'strawberry' => [
                'nama' => 'Strawberry',
                'kategori' => 'FRESH JUICE',
                'harga' => 28000,
                'gambar' => 'gambar/fresh juice/strawberry.png',
                'deskripsi' => 'Jus buah strawberry segar yang diblender hingga halus dengan tambahan sedikit air dan gula. Disajikan dingin dengan es batu serta potongan buah stroberi sebagai topping.'
            ],
            'apple' => [
                'nama' => 'Apple',
                'kategori' => 'FRESH JUICE',
                'harga' => 28000,
                'gambar' => 'gambar/fresh juice/apple.png',
                'deskripsi' => 'Jus buah apel segar yang diblender hingga halus dengan tambahan sedikit air dan gula. Disajikan dingin dengan es batu dan irisan buah apel sebagai garnish.'
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
