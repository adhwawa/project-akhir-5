<?php

namespace App\Models;

class SoftDrink
{
    public static function all()
    {
        return [
            'mineral-water' => [
                'nama' => 'Mineral Water',
                'kategori' => 'SOFT DRINK',
                'harga' => 8000,
                'gambar' => 'gambar/soft drink/mineralwater.png',
            ],
            'coke' => [
                'nama' => 'Coke',
                'kategori' => 'SOFT DRINK',
                'harga' => 25000,
                'gambar' => 'gambar/soft drink/coke.png',
            ],
            'sprite' => [
                'nama' => 'Sprite',
                'kategori' => 'SOFT DRINK',
                'harga' => 25000,
                'gambar' => 'gambar/soft drink/sprite.png',
            ],
            'fanta' => [
                'nama' => 'Fanta',
                'kategori' => 'SOFT DRINK',
                'harga' => 25000,
                'gambar' => 'gambar/soft drink/fanta.png',
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
