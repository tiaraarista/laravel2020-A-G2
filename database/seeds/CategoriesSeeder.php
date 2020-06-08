<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['nama_kategori' => 'Apple'],
            ['nama_kategori' => 'Samsung'],
            ['nama_kategori' => 'Xiaomi'],
            ['nama_kategori' => 'Vivo'],
            ['nama_kategori' => 'Motorola'],
            ['nama_kategori' => 'Google Pixel'],
            ['nama_kategori' => 'HTC'],
            ['nama_kategori' => 'Huawei'],
            ['nama_kategori' => 'Oppo'],
            ['nama_kategori' => 'LG'],
            ['nama_kategori' => 'Lenovo'],
            ['nama_kategori' => 'Oppo'],
            ['nama_kategori' => 'Polytron'],
            ['nama_kategori' => 'ASUS'],
            ['nama_kategori' => 'Lenovo'],
            ['nama_kategori' => 'Nokia'],
            ['nama_kategori' => 'Smartfren'],
            ['nama_kategori' => 'Sony'],
            ['nama_kategori' => 'Nexian'],
            ['nama_kategori' => 'Panasonic'],
            ['nama_kategori' => 'Evercross'],
            ['nama_kategori' => 'Mito'],
            ['nama_kategori' => 'Advan'],
            ['nama_kategori' => 'Cherry Mobile'],
            ['nama_kategori' => 'Maxtron'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
