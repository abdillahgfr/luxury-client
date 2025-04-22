<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        \App\User::create([
        'name'	=> 'Admin Bimtek',
        'email'	=> 'adminbimtek@gmail.com',
        'password' => Hash::make('rootroot'),
]);
    }
}
