<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        'name' => 'JH2 Shirt',
        'slug' => 'black shirt',
        'details' => 'Black, Green JH2 Emblem, Cotton',
        'price' => 1499,
        'description' => 'Lorem Ipsum',
     ]);

        Product::create([
        'name' => 'JH2 Shirt White',
        'slug' => 'white shirt',
        'details' => 'White, Green JH2 Emblem, Cotton',
        'price' => 1499,
        'description' => 'Lorem Ipsum',
    ]);

        Product::create([
       'name' => 'JH2 Shirt Green',
       'slug' => 'greeen shirt',
       'details' => 'Green, Green JH2 Emblem, Cotton',
       'price' => 1499,
       'description' => 'Lorem Ipsum',
      ]);
    }
}
