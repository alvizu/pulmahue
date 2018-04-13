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
            'email' => 'artisanfor@gmail.com',
            'password' => bcrypt('123123'),
            'phone' => '+5491126438097',
            'address' => 'Buenos Aires, Argentina',
            'admin' => true

        ]);
        User::create([

        	  'name' => 'Robert',
            'email' => 'alvizuguerrero@hotmail.com',
            'password' => bcrypt('123123'),
            'phone' => '+5491126438097',
            'address' => 'Caracas, Venezuela',
            'admin' => false

        ]);

    }
}
