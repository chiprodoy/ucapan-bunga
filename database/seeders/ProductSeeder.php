<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'uuid'=>'-',
            'product_name'=>'Papan Bunga Pernikahan Ukuran Besar',
            'product_slug'=>'',
            'image_cover'=>'product1.jpg',
            'product_price'=>500000
        ]);


        Product::create([
            'uuid'=>'-',
            'product_name'=>'Papan Bunga Ucapan Selamat Ukuran Besar',
            'product_slug'=>'',
            'image_cover'=>'product2.jpg',
            'product_price'=>500000
        ]);

        Product::create([
            'uuid'=>'-',
            'product_name'=>'Papan Bunga Dukacita Ukuran Besar',
            'product_slug'=>'',
            'image_cover'=>'product3.jpg',
            'product_price'=>500000
        ]);

        Product::create([
            'uuid'=>'-',
            'product_name'=>'Papan Bunga Pernikahan Ukuran Kecil',
            'product_slug'=>'',
            'image_cover'=>'product1.jpg',
            'product_price'=>500000
        ]);

        Product::create([
            'uuid'=>'-',
            'product_name'=>'Papan Bunga Ucapan Selamat Ukuran Kecil',
            'product_slug'=>'',
            'image_cover'=>'product2.jpg',
            'product_price'=>500000
        ]);

        Product::create([
            'uuid'=>'-',
            'product_name'=>'Papan Bunga Dukacita Ukuran Kecil',
            'product_slug'=>'',
            'image_cover'=>'product3.jpg',
            'product_price'=>500000
        ]);


        //
    }
}
