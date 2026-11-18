<?php

namespace App\Models;

class CoffeeandTea
{
    public static function all()
    {
        return [
            'jasmine-tea' => [
                'nama' => 'Jasmine Tea',
                'kategori' => 'COFFEE AND TEA',
                'harga' => 18000,
                'gambar' => 'gambar/coffee tea/estea.png',
                'deskripsi' => 'Teh melati yang diseduh dari daun teh pilihan dengan aroma bunga melati. Disajikan dingin dengan es batu atau hangat tanpa es, cocok dinikmati sebagai minuman pendamping makanan.'
            ],
            'teh-jeruk-nipis' => [
                'nama' => 'Teh Jeruk Nipis',
                'kategori' => 'COFFEE AND TEA',
                'harga' => 20000,
                'gambar' => 'gambar/coffee tea/tehjeruknipis.png',
                'deskripsi' => 'Teh yang dipadukan dengan perasan jeruk nipis segar dan tambahan irisan jeruk nipis. Disajikan dingin dengan es batu atau hangat untuk memberikan sensasi segar.'
            ],
            'lychee-tea' => [
                'nama' => 'Lychee Tea',
                'kategori' => 'COFFEE AND TEA',
                'harga' => 20000,
                'gambar' => 'gambar/coffee tea/lecitea.png',
                'deskripsi' => 'Teh yang dicampur dengan sirup leci dan potongan buah leci, dilengkapi es batu serta irisan buah leci sebagai topping.'
            ],
            'americano' => [
                'nama' => 'Americano',
                'kategori' => 'COFFEE AND TEA',
                'harga' => 25000,
                'gambar' => 'gambar/coffee tea/americano.png',
                'deskripsi' => 'Minuman kopi yang diseduh dari satu atau dua shot espresso yang dicampur dengan air panas. Untuk versi dingin, disajikan dengan es batu dan air tanpa tambahan susu.'
            ],
            'coffee-latte' => [
                'nama' => 'Coffee Latte',
                'kategori' => 'COFFEE AND TEA',
                'harga' => 32000,
                'gambar' => 'gambar/coffee tea/latte.png',
                'deskripsi' => 'Perpaduan espresso dengan susu steamed yang menghasilkan tekstur lembut dan creamy. Pada versi dingin, menggunakan susu dingin dan es batu dengan lapisan foam susu sebagai pelengkap.'
            ],
            'cappuccino' => [
                'nama' => 'Cappuccino',
                'kategori' => 'COFFEE AND TEA',
                'harga' => 32000,
                'gambar' => 'gambar/coffee tea/cappuccino.png',
                'deskripsi' => 'Minuman kopi berbahan dasar espresso yang dipadukan dengan steamed milk dan lapisan foam susu tebal di bagian atas. Dapat dinikmati dengan taburan bubuk cokelat sebagai topping.'
            ],
            'mocaccino' => [
                'nama' => 'Mocaccino',
                'kategori' => 'COFFEE AND TEA',
                'harga' => 32000,
                'gambar' => 'gambar/coffee tea/mocacinno.png',
                'deskripsi' => 'Minuman kopi berbahan dasar espresso yang dipadukan dengan susu panas dan cokelat. Disajikan dingin atau panas sesuai pilihan.'
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
