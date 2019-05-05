<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User([
            'name' => 'alpha',
            'email' => 'alflanquit@gmail.com',
            'password' => bcrypt('thewayiare'),
            'admin' => '0'

        ]);
        $user->save();


          //
          $user = new \App\User([
            'name' => 'flanquit',
            'email' => 'support@alpham.co.zw',
            'password' => bcrypt('thewayiare'),
            'admin' => '1'

        ]);
        $user->save();
    }
}


