<?php

namespace App\Models;

class Comfort
{
    public static function all()
    {
        return [
            'mendoan' => [
                'nama' => 'Mendoan',
                'kategori' => 'COMFORT',
                'harga' => 30000,
                'gambar' => 'gambar/comfort/mendoan.png',
                'deskripsi' => 'Tempe pilihan dilapisi adonan tepung berbumbu dengan irisan daun bawang, kemudian digoreng hingga bagian luar renyah. Disajikan bersama sambal kecap manis dan cabai rawit.'
            ],
            'tahu-crispy' => [
                'nama' => 'Tahu Crispy',
                'kategori' => 'COMFORT',
                'harga' => 30000,
                'gambar' => 'gambar/comfort/tahu.png',
                'deskripsi' => 'Potongan tahu pilihan dibalut tepung berbumbu dan digoreng hingga menghasilkan lapisan luar yang renyah dengan bagian dalam lembut. Disajikan dengan taburan bumbu serta saus.'
            ],
            'bakwan-jagung' => [
                'nama' => 'Bakwan Jagung',
                'kategori' => 'COMFORT',
                'harga' => 30000,
                'gambar' => 'gambar/comfort/bakwajagung.png',
                'deskripsi' => 'Jagung manis dipadukan dengan tepung, irisan daun bawang, wortel, bawang putih, dan bumbu pilihan. Digoreng hingga keemasan dan disajikan bersama cabai rawit.'
            ],
            'singkong-crispy' => [
                'nama' => 'Singkong Crispy',
                'kategori' => 'COMFORT',
                'harga' => 30000,
                'gambar' => 'gambar/comfort/singkong.png',
                'deskripsi' => 'Singkong pilihan dipotong memanjang, direbus hingga empuk, kemudian digoreng dengan balutan tepung berbumbu hingga bagian luarnya renyah. Disajikan dengan saus sambal sebagai pelengkap.'
            ],
            'cireng-crispy' => [
                'nama' => 'Cireng Crispy',
                'kategori' => 'COMFORT',
                'harga' => 32000,
                'gambar' => 'gambar/comfort/cireng.png',
                'deskripsi' => 'Cireng dibuat dari tepung tapioka dengan campuran bawang putih, daun bawang, dan bumbu pilihan yang menghasilkan tekstur kenyal di dalam serta renyah di luar. Disajikan dengan saus cocolan.'
            ],
            'french-fries' => [
                'nama' => 'French Fries',
                'kategori' => 'COMFORT',
                'harga' => 25000,
                'gambar' => 'gambar/comfort/frenchfries.png',
                'deskripsi' => 'Kentang dipotong menjadi bentuk batang dan digoreng hingga keemasan. Disajikan dengan saus ketchup atau mayonnaise.'
            ],
            'roti-bakar-coklat-keju' => [
                'nama' => 'Roti Bakar Coklat Keju',
                'kategori' => 'COMFORT',
                'harga' => 35000,
                'gambar' => 'gambar/comfort/rotibakar.png',
                'deskripsi' => 'Roti tawar tebal dipanggang dengan olesan margarin hingga berwarna kecokelatan dan renyah di bagian luar. Diberi topping meses cokelat, parutan keju cheddar, serta susu kental manis.'
            ],
            'pisang-goreng-crispy' => [
                'nama' => 'Pisang Goreng Crispy',
                'kategori' => 'COMFORT',
                'harga' => 32000,
                'gambar' => 'gambar/comfort/pisanggoreng.png',
                'deskripsi' => 'Pisang pilihan dibalut adonan tepung renyah dan digoreng hingga keemasan dengan bagian dalam yang lembut. Disajikan dengan topping keju, meses cokelat, atau susu kental manis.'
            ],
            'mix-platter' => [
                'nama' => 'Mix Platter',
                'kategori' => 'COMFORT',
                'harga' => 45000,
                'gambar' => 'gambar/comfort/mixplatter.png',
                'deskripsi' => 'Sajian aneka camilan dalam satu piring yang terdiri dari french fries, chicken nuggets, sosis goreng, onion rings, dan chicken wings. Dilengkapi saus sambal, saus tomat, dan mayonnaise sebagai pelengkap.'
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
