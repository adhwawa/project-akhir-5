<?php

namespace Database\Seeders\AdminSeeder;

use App\Models\Menu;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $subCategories = [
            ['kategori_utama' => 'Makanan', 'nama_sub_kategori' => 'Main Course', 'slug' => 'main-course'],
            ['kategori_utama' => 'Makanan', 'nama_sub_kategori' => 'Nusantara', 'slug' => 'nusantara'],
            ['kategori_utama' => 'Makanan', 'nama_sub_kategori' => 'Comfort', 'slug' => 'comfort'],
            ['kategori_utama' => 'Makanan', 'nama_sub_kategori' => 'Extra', 'slug' => 'extra'],
            ['kategori_utama' => 'Minuman', 'nama_sub_kategori' => 'Coffe & Tea', 'slug' => 'coffe-tea'],
            ['kategori_utama' => 'Minuman', 'nama_sub_kategori' => 'Fresh Juice', 'slug' => 'fresh-juice'],
            ['kategori_utama' => 'Minuman', 'nama_sub_kategori' => 'Soft Drink', 'slug' => 'soft-drink'],
            ['kategori_utama' => 'Desert',  'nama_sub_kategori' => 'Desert', 'slug' => 'desert'],
        ];

        foreach ($subCategories as $sub) {
            SubCategory::create($sub);
        }

        $subs = SubCategory::pluck('id', 'slug');

        $menus = [
            // Makanan
            ['sub_category_id' => $subs['main-course'], 'kategori_utama' => 'Makanan', 'nama_menu' => 'Grill Chicken Steak', 'harga' => 85000],
            ['sub_category_id' => $subs['main-course'], 'kategori_utama' => 'Makanan', 'nama_menu' => 'Spaghetti Bolognise Katsu', 'harga' => 58000],
            ['sub_category_id' => $subs['main-course'], 'kategori_utama' => 'Makanan', 'nama_menu' => 'Sop Iga', 'harga' => 74000],
            ['sub_category_id' => $subs['main-course'], 'kategori_utama' => 'Makanan', 'nama_menu' => 'Nasi Goreng Katsu', 'harga' => 64000],
            ['sub_category_id' => $subs['main-course'], 'kategori_utama' => 'Makanan', 'nama_menu' => 'Nasi Timbel Ayam Goreng', 'harga' => 58000],
            ['sub_category_id' => $subs['nusantara'],   'kategori_utama' => 'Makanan', 'nama_menu' => 'Nasi Iga Bakar', 'harga' => 72000],
            ['sub_category_id' => $subs['nusantara'],   'kategori_utama' => 'Makanan', 'nama_menu' => 'Nasi Campur Taliwang', 'harga' => 66000],
            ['sub_category_id' => $subs['nusantara'],   'kategori_utama' => 'Makanan', 'nama_menu' => 'Nasi Goreng Jawa', 'harga' => 64000],
            ['sub_category_id' => $subs['nusantara'],   'kategori_utama' => 'Makanan', 'nama_menu' => 'Mie Goreng Jawa', 'harga' => 60000],
            ['sub_category_id' => $subs['nusantara'],   'kategori_utama' => 'Makanan', 'nama_menu' => 'Mie Nyemek Kampung Jawa', 'harga' => 64000],
            ['sub_category_id' => $subs['comfort'],     'kategori_utama' => 'Makanan', 'nama_menu' => 'Mendoan', 'harga' => 30000],

            // Minuman
            ['sub_category_id' => $subs['coffe-tea'],   'kategori_utama' => 'Minuman', 'nama_menu' => 'Jasmine Tea Ice/Hot', 'harga' => 16000],
            ['sub_category_id' => $subs['coffe-tea'],   'kategori_utama' => 'Minuman', 'nama_menu' => 'Teh Jeruk Nipis Ice/Hot', 'harga' => 20000],
            ['sub_category_id' => $subs['coffe-tea'],   'kategori_utama' => 'Minuman', 'nama_menu' => 'Es Teh Leci', 'harga' => 20000],
            ['sub_category_id' => $subs['coffe-tea'],   'kategori_utama' => 'Minuman', 'nama_menu' => 'Americano Ice/Hot', 'harga' => 25000],
            ['sub_category_id' => $subs['coffe-tea'],   'kategori_utama' => 'Minuman', 'nama_menu' => 'Coffe Latte Ice/Hot', 'harga' => 32000],
            ['sub_category_id' => $subs['coffe-tea'],   'kategori_utama' => 'Minuman', 'nama_menu' => 'Cappucino Ice/Hot', 'harga' => 32000],
            ['sub_category_id' => $subs['coffe-tea'],   'kategori_utama' => 'Minuman', 'nama_menu' => 'Moccacino Ice/Hot', 'harga' => 32000],
            ['sub_category_id' => $subs['fresh-juice'], 'kategori_utama' => 'Minuman', 'nama_menu' => 'Watermelon', 'harga' => 28000],
            ['sub_category_id' => $subs['fresh-juice'], 'kategori_utama' => 'Minuman', 'nama_menu' => 'Apple', 'harga' => 28000],
            ['sub_category_id' => $subs['fresh-juice'], 'kategori_utama' => 'Minuman', 'nama_menu' => 'Fresh Orange', 'harga' => 28000],
            ['sub_category_id' => $subs['fresh-juice'], 'kategori_utama' => 'Minuman', 'nama_menu' => 'Strawberry', 'harga' => 28000],

            // Desert
            ['sub_category_id' => $subs['desert'],      'kategori_utama' => 'Desert',  'nama_menu' => 'Buah Potong', 'harga' => 48000],
            ['sub_category_id' => $subs['desert'],      'kategori_utama' => 'Desert',  'nama_menu' => 'Es Buah', 'harga' => 38000],
            ['sub_category_id' => $subs['desert'],      'kategori_utama' => 'Desert',  'nama_menu' => 'Slice Cake', 'harga' => 28000],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}