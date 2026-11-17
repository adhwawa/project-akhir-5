<?php

namespace App\Models;

class Nusantara
{
    public static function all()
    {
        return [
            'nasi-iga-bakar' => [
                'nama' => 'Nasi Iga Bakar',
                'kategori' => 'NUSANTARA',
                'harga' => 72000,
                'gambar' => 'gambar/nusantara/n.igabakar.png',
                'deskripsi' => 'Iga sapi pilihan dibakar dengan bumbu kecap manis, berpadu dengan kentang dan sayuran. Disajikan bersama nasi putih hangat, tumis buncis dan wortel.'
            ],
            'nasi-campur-taliwang' => [
                'nama' => 'Nasi Campur Taliwang',
                'kategori' => 'NUSANTARA',
                'harga' => 66000,
                'gambar' => 'gambar/nusantara/taliwang.png',
                'deskripsi' => 'Nasi putih hangat disajikan bersama ayam bakar taliwang berbumbu cabai, bawang putih, tomat, dan rempah khas Lombok. Dilengkapi lauk pilihan.'
            ],
            'nasi-goreng-jawa' => [
                'nama' => 'Nasi Goreng Jawa',
                'kategori' => 'NUSANTARA',
                'harga' => 64000,
                'gambar' => 'gambar/nusantara/nasgorjawa.png',
                'deskripsi' => 'Nasi putih dimasak dengan bumbu tradisional berupa bawang merah, bawang putih, cabai, kecap, dan rempah pilihan.'
            ],
            'mie-goreng-jawa' => [
                'nama' => 'Mie Goreng Jawa',
                'kategori' => 'NUSANTARA',
                'harga' => 60000,
                'gambar' => 'gambar/nusantara/miegoreng.png',
                'deskripsi' => 'Mie telur dimasak dengan racikan bumbu khas Jawa, kecap manis, bawang merah, bawang putih, dan sayuran segar.'
            ],
            'mie-nyemek-kampung-jawa' => [
                'nama' => 'Mie Nyemek Kampung Jawa',
                'kategori' => 'NUSANTARA',
                'harga' => 60000,
                'gambar' => 'gambar/nusantara/mienyemek.png',
                'deskripsi' => 'Mie telur dimasak dengan sedikit kuah kental berbumbu bawang putih, kemiri, cabai, dan kecap manis khas Jawa.'
            ],
        ];
    }

    public static function find($slug)
    {
        $menus = self::all();

        return $menus[$slug] ?? null;
    }
}
