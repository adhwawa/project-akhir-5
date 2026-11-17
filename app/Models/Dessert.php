<?php

namespace App\Models;

class Dessert
{
    public static function all()
    {
        return [
            'buah-potong' => [
                'nama' => 'Buah Potong',
                'kategori' => 'DESSERT',
                'harga' => 48000,
                'gambar' => 'gambar/dessert/buahpotong.png',
                'deskripsi' => 'Aneka buah segar yang dipotong kecil dan disajikan dalam satu piring, terdiri dari apel, strawberry, jeruk, anggur, mangga, dan buah musiman lainnya. Disajikan dalam keadaan dingin sebagai hidangan penutup'
            ],
            'ice-buah' => [
                'nama' => 'Ice Buah',
                'kategori' => 'DESSERT',
                'harga' => 38000,
                'gambar' => 'gambar/dessert/icebuah.png',
                'deskripsi' => 'Campuran aneka buah segar seperti melon, semangka, pepaya, nanas, dan alpukat yang dipotong kecil. Dilengkapi dengan kolang-kaling, nata de coco, sirup, susu kental manis, dan es batu.'
            ],
            'slice-cake' => [
                'nama' => 'Slice Cake',
                'kategori' => 'DESSERT',
                'harga' => 38000,
                'gambar' => 'gambar/dessert/slicecake.png',
                'deskripsi' => 'Potongan kue dengan berbagai pilihan rasa dan tekstur, seperti cokelat, vanilla, atau red velvet. Disajikan per potong dengan lapisan krim atau filling di bagian tengah serta topping sesuai jenis kue.'
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
