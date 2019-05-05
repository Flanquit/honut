<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProductsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         
    }


    //ive disabled user seeds because its returning errors 
         
}