<?php

use Illuminate\Database\Seeder;
use App\Category;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        // $categories = Category::all();
        // for ($i=0; $i < 100; $i++) {
        //     DB::table('products')->insert([
        //         'id_kategori' => $categories[$i]->id_kategori,
        //         'nama_barang'=>$faker->sentence,
        //         'harga' => $faker->numberBetween($min = 1000000,$max = 150000000),
        //         'spesifikasi' => $faker->paragraph,
        //         'qty' => $faker->numberBetween(6,12),
        //     ]);
        // }

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 (64GB)',
            'harga' => 13999000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 4GB, ROM 64GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.110 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 (128GB)',
            'harga' => 15499000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 4GB, ROM 128GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.110 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 (256GB)',
            'harga' => 17499000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 4GB, ROM, 256GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.110 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 Pro (64GB)',
            'harga' => 20499000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 6GB, ROM, 256GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.046 mAh',
            'qty' => 3,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 Pro (256GB)',
            'harga' => 23999000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 6GB, ROM, 256GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.046 mAh',
            'qty' => 3,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 Pro (512GB)',
            'harga' => 27999000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 6GB, ROM, 256GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.046 mAh',
            'qty' => 3,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 Pro Max (64GB)',
            'harga' => 21999000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 6GB, ROM, 256GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.969 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 Pro Max (256GB)',
            'harga' => 25999000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 6GB, ROM, 256GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.969 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 1,
            'nama_barang'=>'iPhone 11 Pro Max (512GB)',
            'harga' => 29999000,
            'spesifikasi' => 'Apple A13 Bionic, RAM 6GB, ROM, 256GB, Kamera Utama 12MP + 12MP + 12MP, Kamera Selfie 12MP + TOF, Baterai 3.969 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 2,
            'nama_barang'=>'Samsung Galaxy A10 (2/32GB)',
            'harga' => 1680000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, IPS LCD, 6.2 inches, RAM 2GB, ROM, 32GBB, Kamera Utama 13MP, Kamera Selfie 5MP, Non-removable Li-Ion 3400 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 2,
            'nama_barang'=>'Samsung Galaxy A20 (3/32GB)',
            'harga' => 2100000,
            'spesifikasi' => 'Android 9.0 (Pie); One UI, Octa-core, Super AMOLED, 6.4 inches, RAM 3GB, ROM, 32GBB, Kamera Utama 13MP + 5MP, Kamera Selfie 8MP, Non-removable Li-Po 4000 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 2,
            'nama_barang'=>'Samsung Galaxy A30 (4/64GB)',
            'harga' => 2650000,
            'spesifikasi' => 'Android 9.0 (Pie), upgradable to Android 10.0, Octa-core, Super AMOLED, 6.4 inches, RAM 4GB, ROM, 64GBB, Kamera Utama 16MP + 5MP, Kamera Selfie 5MP, Non-removable Li-Po 4000 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 2,
            'nama_barang'=>'Samsung Galaxy A40 (4/64GB)',
            'harga' => 2990000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, Super AMOLED, 5.9 inches, RAM 4GB, ROM, 64GBB, Kamera Utama 16MP + 5MP, Kamera Selfie 25MP, Non-removable Li-Po 3100 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 2,
            'nama_barang'=>'Samsung Galaxy A50 (6/128GB)',
            'harga' => 3790000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, Super AMOLED, 6.4 inches, RAM 6GB, ROM, 128GBB, Kamera Utama 25MP + 8MP + 5MP, Kamera Selfie 25MP, Non-removable Li-Po 4000 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 2,
            'nama_barang'=>'Samsung Galaxy A60 (6/128GB)',
            'harga' => 4200000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, PLS TFT, 6.3 inches, RAM 6GB, ROM, 128GBB, Kamera Utama 32MP + 8MP + 5MP, Kamera Selfie 16MP, Non-removable Li-Po 3500 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 2,
            'nama_barang'=>'Samsung Galaxy A70 (6/128GB)',
            'harga' => 4900000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, Super AMOLED, 6.7 inches, RAM 6GB, ROM, 128GBB, Kamera Utama 32MP + 8MP + 5MP, Kamera Selfie 32MP, Non-removable Li-Po 4500 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme 5 (3/64GB)',
            'harga' => 1899000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, RAM 3GB, ROM, 64GBB, Kamera Utama 12MP + 8MP + 2MP + 2MP, Kamera Selfie 13MP, Baterai 5.000 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme 5 (4/128GB)',
            'harga' => 2399000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, RAM 4GB, ROM, 128GBB, Kamera Utama 12MP + 8MP + 2MP + 2MP, Kamera Selfie 13MP, Baterai 5.000 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme 5 Pro (4/128GB)',
            'harga' => 2790000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, RAM 4GB, ROM, 128GBB, Kamera Utama 48MP + 8MP + 2MP + 2MP, Kamera Selfie 16MP, Baterai Li-Po 4.035 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme 5 Pro (8/128GB)',
            'harga' => 3199000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, RAM 8GB, ROM, 128GBB, Kamera Utama 48MP + 8MP + 2MP + 2MP, Kamera Selfie 16MP, Baterai 4.035 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme 6 (4/128GB)',
            'harga' => 3199000,
            'spesifikasi' => 'Android 10.0, Octa-core, RAM 4GB, ROM, 128GBB, Kamera Utama 64MP + 8MP + 2MP + 2MP, Kamera Selfie 16MP, Baterai 4.300 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme 6 (8/128GB)',
            'harga' => 3599000,
            'spesifikasi' => 'Android 10.0, Octa-core, RAM 8GB, ROM, 128GBB, Kamera Utama 64MP + 8MP + 2MP + 2MP, Kamera Selfie 16MP, Baterai 4.300 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme 6 Pro (8/128GB)',
            'harga' => 4100000,
            'spesifikasi' => 'Android 10.0, Octa-core, RAM 8GB, ROM, 128GBB, Kamera Utama 64MP + 12MP + 8MP + 2MP, Kamera Selfie 16MP + 8MP, Baterai 4.300 mAh',
            'qty' => 2,
        ]);

        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme XT (8/128GB)',
            'harga' => 3599000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, RAM 8GB, ROM, 128GBB, Kamera Utama 64MP + 8MP + 2MP + 2MP, Kamera Selfie 16MP, Baterai 4.000 mAh',
            'qty' => 2,
        ]);
        DB::table('products')->insert([
            'id_kategori' => 3,
            'nama_barang'=>'realme X2 Pro (12/256GB)',
            'harga' => 7199000,
            'spesifikasi' => 'Android 9.0 (Pie), Octa-core, RAM 12GB, ROM, 256GBB, Kamera Utama 64MP + 13MP + 8MP + 2MP, Kamera Selfie 16MP, Baterai 4.000 mAh',
            'qty' => 2,
        ]);
    }
}
