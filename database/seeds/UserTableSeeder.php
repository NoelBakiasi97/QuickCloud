<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'noel@mail.com',
            'password'=>Hash::make('lolzzz1997'),
            'role_id'=> 1,
        ]);
        DB::table('users')->insert([
            'name'=>'User',
            'email'=>'user@mail.com',
            'password'=>Hash::make('lolzzz1997'),
            'role_id'=> 2,
        ]);
    }
}
