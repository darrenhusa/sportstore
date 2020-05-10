<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(
        ['name' => 'Kayak',
         'description' => 'A boat for one person',
         'category' => 'Watersports',
         'price' => 275]
       );
       DB::table('products')->insert(
         ['name' => 'Lifejacket',
          'description' => 'Protective and fashionable',
          'category' => 'Watersports',
          'price' => 48.95]
        );
        DB::table('products')->insert(
          ['name' => 'Soccer Ball',
           'description' => 'FIFA-approved size and weight',
           'category' => 'Soccer',
           'price' => 19.50]
         );
         DB::table('products')->insert(
           ['name' => 'Corner Flags',
            'description' => 'Give your playing field a professional touch',
            'category' => 'Soccer',
            'price' => 34.95]
          );
          DB::table('products')->insert(
            ['name' => 'Stadium',
             'description' => 'Flat-packed 35,000-seat stadium',
             'category' => 'Soccer',
             'price' => 79500]
           );
           DB::table('products')->insert(
             ['name' => 'Thinking Cap',
              'description' => 'Improve brain efficiency by 75%',
              'category' => 'Chess',
              'price' => 16]
            );
            DB::table('products')->insert(
              ['name' => 'Unsteady Chair',
               'description' => 'Secretly give your opponent a disadvantage',
               'category' => 'Chess',
               'price' => 29.95]
             );
             DB::table('products')->insert(
               ['name' => 'Human Chess Board',
                'description' => 'A fun game for the family',
                'category' => 'Chess',
                'price' => 75]
              );
              DB::table('products')->insert(
                ['name' => 'Bling-Bling King',
                 'description' => 'Gold-plated, diamond-studded King',
                 'category' => 'Chess',
                 'price' => 1200]
               );
    }
}
