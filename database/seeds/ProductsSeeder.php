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
        $categories = Category::all();
        for ($i=0; $i < 100; $i++) {
            DB::table('products')->insert([
                'id_kategori' => $categories[$i]->id_kategori,
                'nama_barang'=>$faker->sentence,
                'harga' => $faker->numberBetween($min = 1000000,$max = 150000000),
                'spesifikasi' => $faker->paragraph,
                'qty' => $faker->numberBetween(6,12),
            ]);
        }
    }
}
