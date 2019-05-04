<?php

use App\User;
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

        User::create([
            'name'     => 'Soj',
            'password' => Hash::make(111111),
            'email'    => 'soj@gmail.com',
        ]);

        User::create([
            'name'     => 'adam',
            'password' => Hash::make(123456),
            'email'    => 'adam@gmail.com',
        ]);

        User::create([
            'name'     => 'david',
            'password' => Hash::make(123321),
            'email'    => 'david@gmail.com',
        ]);
    }
}
