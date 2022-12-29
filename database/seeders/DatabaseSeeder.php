<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Home::create([
            'image' => 'img/kaos1.jpg',
            'name' => 'Black T-Shirt',
            'price' => 'Rp 60.000'
        ]);

        Home::create([
            'image' => 'img/hoodie1.jpg',
            'name' => 'Brown Hoodie',
            'price' => 'Rp 200.000'
        ]);

        Home::create([
            'image' => 'img/crewneck1.jpg',
            'name' => 'Black Crewneck',
            'price' => 'Rp 150.000'
        ]);

        Home::create([
            'image' => 'img/celana1.jpg',
            'name' => 'Beige Short',
            'price' => 'Rp 130.000'
        ]);

        Home::create([
            'image' => 'img/hoodie2.jpg',
            'name' => 'Green Hoodie',
            'price' => 'Rp 220.000'
        ]);

        Home::create([
            'image' => 'img/kaos2.jpg',
            'name' => 'Grey T-Shirt',
            'price' => 'Rp 70.000'
        ]);

        Home::create([
            'image' => 'img/celana2.jpg',
            'name' => 'Grey Short',
            'price' => 'Rp 130.000'
        ]);

        Home::create([
            'image' => 'img/crewneck2.jpg',
            'name' => 'Cream Crewneck',
            'price' => 'Rp 170.000'
        ]);

        Cart::create([
            'image' => 'img/kaos1.jpg',
            'name' => 'Black T-Shirt',
            'price' => 'Rp 60.000'
        ]);

        Cart::create([
            'image' => 'img/hoodie1.jpg',
            'name' => 'Brown Hoodie',
            'price' => 'Rp 200.000'
        ]);

        Cart::create([
            'image' => 'img/crewneck1.jpg',
            'name' => 'Black Crewneck',
            'price' => 'Rp 150.000'
        ]);

        Cart::create([
            'image' => 'img/celana1.jpg',
            'name' => 'Beige Short',
            'price' => 'Rp 130.000'
        ]);

        Cart::create([
            'image' => 'img/hoodie2.jpg',
            'name' => 'Green Hoodie',
            'price' => 'Rp 220.000'
        ]);

        Cart::create([
            'image' => 'img/kaos2.jpg',
            'name' => 'Grey T-Shirt',
            'price' => 'Rp 70.000'
        ]);

        Cart::create([
            'image' => 'img/celana2.jpg',
            'name' => 'Grey Short',
            'price' => 'Rp 130.000'
        ]);

        Cart::create([
            'image' => 'img/crewneck2.jpg',
            'name' => 'Cream Crewneck',
            'price' => 'Rp 170.000'
        ]);
    }
}
