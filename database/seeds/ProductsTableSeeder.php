<?php

use App\Products;
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
        Products::create([
        'name' => 'JH2 Shirt',
        'slug' => 'black shirt',
        'details' => 'Black, Green JH2 Emblem, Cotton',
        'price' => 1499,
        'description' => 'Lorem Ipsum',
     ]);

        Products::create([
        'name' => 'JH2 Shirt White',
        'slug' => 'white shirt',
        'details' => 'White, Green JH2 Emblem, Cotton',
        'price' => 1499,
        'description' => 'Lorem Ipsum',
    ]);

        Products::create([
       'name' => 'JH2 Shirt Green',
       'slug' => 'greeen shirt',
       'details' => 'Green, Green JH2 Emblem, Cotton',
       'price' => 1499,
       'description' => 'Lorem Ipsum',
      ]);
    }
}
