<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'Basket Ball',
            'price' => 34,
            'img' => 'basketball.png'
        ]);

        Product::create([
            'product_name' => 'T-Shirt',
            'price' => 47,
            'img' => 't-shirt.png'
        ]);

        Product::create([
            'product_name' => 'Game',
            'price' => 55,
            'img' => 'game.png'
        ]);
    }
}
