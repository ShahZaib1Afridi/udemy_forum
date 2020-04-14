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
        App\User::create([
        'name' => 'Shahzaib',
        'password' => bcrypt('admin'),
        'email' => 'szafridi121@gmail.com',
        'admin' => 1,
        'avatar' => asset('avatars/avatar.png')


        ]);
    }
}
