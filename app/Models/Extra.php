<?php

namespace App\Models;

class Extra
{
    public static function all()
    {
        return [
            'nasi-putih' => [
                'nama' => 'Nasi Putih',
                'kategori' => 'EXTRA',
                'harga' => 12000,
                'gambar' => 'gambar/extra/nasiputih.png',
                'deskripsi' => 'Nasi putih pilihan dimasak hingga pulen dengan tekstur lembut dan aroma yang harum. Disajikan hangat dalam mangkuk khusus sebagai pelengkap berbagai hidangan utama.'
            ],
            'telur' => [
                'nama' => 'Telur',
                'kategori' => 'EXTRA',
                'harga' => 11000,
                'gambar' => 'gambar/extra/telur.png',
                'deskripsi' => 'Pilihan olahan telur meliputi omelet, telur ceplok, dan telur dadar yang dimasak menggunakan mentega atau minyak dengan tambahan bumbu pilihan. Tersedia tingkat kematangan sesuai permintaan, mulai dari setengah matang, ¾ matang, hingga matang sempurna.'
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
