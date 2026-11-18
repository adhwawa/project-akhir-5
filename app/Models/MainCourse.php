<?php

namespace App\Models;

class MainCourse
{
    public static function all()
    {
        return [
            'grill-chicken-steak' => [
                'nama' => 'Grill Chicken Steak',
                'kategori' => 'MAIN COURSE',
                'harga' => 85000,
                'gambar' => 'gambar/maincourse/grillchikensteak.png',
                'deskripsi' => 'Chicken steak menggunakan dada ayam filet pilihan yang dimarinasi dengan bawang putih, lada hitam, garam, dan rempah pilihan, kemudian dipanggang hingga matang sempurna. Disajikan dengan saus mushroom atau black pepper serta sayuran dan kentang pilihan.'
            ],

            'spaghetti-bolognese-katsu' => [
                'nama' => 'Spaghetti Bolognese Katsu',
                'kategori' => 'MAIN COURSE',
                'harga' => 58000,
                'gambar' => 'gambar/maincourse/speagetibolokatsu.png',
                'deskripsi' => 'Spaghetti pilihan disajikan dengan saus bolognese berbahan tomat segar, daging sapi cincang, bawang bombay, bawang putih, dan rempah pilihan. Dilengkapi chicken katsu crispy, taburan keju parmesan, potongan tomat cherry, parsley, serta sedikit oregano untuk menambah aroma.'
            ],

            'sop-iga' => [
                'nama' => 'Sop Iga',
                'kategori' => 'MAIN COURSE',
                'harga' => 74000,
                'gambar' => 'gambar/maincourse/supiga.png',
                'deskripsi' => 'Potongan iga sapi pilihan dimasak perlahan hingga empuk dalam kuah kaldu rempah yang kaya rasa. Dilengkapi wortel, kentang, tomat, daun bawang, seledri, dan taburan bawang goreng. Disajikan dengan nasi putih hangat.'
            ],

            'nasi-goreng-katsu' => [
                'nama' => 'Nasi Goreng Katsu',
                'kategori' => 'MAIN COURSE',
                'harga' => 64000,
                'gambar' => 'gambar/maincourse/nasgorkatsu.png',
                'deskripsi' => 'Nasi putih dimasak dengan bumbu rempah, kecap manis, bawang merah, bawang putih, telur, dan sayuran pilihan hingga harum. Disajikan bersama chicken katsu renyah, telur, irisan mentimun, tomat segar, acar, serta taburan daun bawang.'
            ],

            'nasi-timbel-ayam-goreng' => [
                'nama' => 'Nasi Timbel Ayam Goreng',
                'kategori' => 'MAIN COURSE',
                'harga' => 58000,
                'gambar' => 'gambar/maincourse/nTimbel.png',
                'deskripsi' => 'Nasi putih hangat dibungkus daun pisang untuk menghasilkan aroma khas dan disajikan bersama ayam goreng berbumbu kuning. Dilengkapi tahu goreng, tempe goreng, lalapan segar, mentimun, kol, daun kemangi, serta sambal terasi.'
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
