<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        	  'name' => 'Admin',
            'email' => 'alvizuguerrero@hotmail.com',
            'password' => bcrypt('123123'),
            'admin' => true

        ]);
        User::create([

        	  'name' => 'Robert',
            'email' => 'robert@gmail.com',
            'password' => bcrypt('123123'),
            'admin' => false

        ]);

    }
}
