<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
        ['name' => 'Kayak',
         'description' => 'A boat for one person',
         'category' => 'Watersports',
         'price' => 275],
        ['name' => 'Soccer Ball',
         'description' => 'FIFA-approved size and weight',
         'category' => 'Soccer',
         'price' => 19.50],
        ['name' => 'Corner Flags',
         'description' => 'Give your playing field a professional touch',
         'category' => 'Soccer',
         'price' => 34.95],
        ['name' => 'Stadium',
         'description' => 'Flat-packed 35,000-seat stadium',
         'category' => 'Soccer',
         'price' => 79500],
        ['name' => 'Stadium',
         'description' => 'Flat-packed 35,000-seat stadium',
         'category' => 'Soccer',
         'price' => 79500],
        ['name' => 'Thinking Cap',
         'description' => 'Improve brain efficiency by 75%',
         'category' => 'Chess',
         'price' => 16],
        ['name' => 'Unsteady Chair',
         'description' => 'Secretly give your opponent a disadvantage',
         'category' => 'Chess',
         'price' => 29.95],
        ['name' => 'Human Chess Board',
         'description' => 'A fun game for the family',
         'category' => 'Chess',
         'price' => 75],
        ['name' => 'Bling-Bling King',
         'description' => 'Gold-plated, diamond-studded King',
         'category' => 'Chess',
         'price' => 1200]
       ]);
    }
}
