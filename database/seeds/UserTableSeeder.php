<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([

            'name' => 'Engr Adnan Ali',
            'password' => bcrypt('admin'),
            'email' => 'adnan.qta2013@gmail.com',
            'admin' => 1,
            'avatar' => asset('avatars/admin.png'),

        ]);
        App\User::create([

            'name' => 'Arslan Ali',
            'password' => bcrypt('arslan'),
            'email' => 'arslan@gmail.com',
            'admin' => 0,
            'avatar' => asset('avatars/admin.png'),

        ]);
    }
}