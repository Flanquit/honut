<?php

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
        // product
        $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/mazoe-orange-crush.png',
            'title' => 'Mazoe Orange Crush',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 30,
            'Quantity' => 20

        ]);
        $product->save();
        
        // product
        $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/mazoe-syrups.png',
            'title' => 'Mazoe Syrups',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 42,
            'Quantity' => 20

        ]);
        $product->save();
        
        // product
        $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/minute-maid-juice-drinks.png',
            'title' => 'Minute Maid juice',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 4,
            'Quantity' => 20

        ]);
        $product->save();
        
        // product
        $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/minute-maid-pulpy.png',
            'title' => 'Minute Maid Pulpy',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 68,
            'Quantity' => 20

        ]);
        $product->save();

          // product
          $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/minute-maid-cans.png',
            'title' => 'Minute Maid Cans',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 20,
            'Quantity' => 20

        ]);
        $product->save();

          // product
          $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/just-juice.png',
            'title' => 'Just Juice',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 15,
            'Quantity' => 20

        ]);
        $product->save();

         // product
         $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/schweppes-still-water.png',
            'title' => 'Schweppes Still water',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 5,
            'Quantity' => 20

        ]);
        $product->save();

        
         // product
         $product = new \App\Products([
            'imagePath' => 'http://localhost:8081/schweppes_online_store/public/images/bonaqua.png',
            'title' => 'Bonaqua Still water',
            'description' => 'Super Cool Mazoe Orange Crush',
            'price' => 3,
            'Quantity' => 20

        ]);
        $product->save();


    }
}
