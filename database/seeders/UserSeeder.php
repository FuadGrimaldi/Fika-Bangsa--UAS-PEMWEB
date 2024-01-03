<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'Admin',
            'email' => 'fuadgrimaldi14@gmail.com',
            'password' => Hash::make('fuadgrimaldi'),
            'phone_number' => '087823119321',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now() 
        ],[
            'name' => 'Admin2',
            'email' => 'rere@gmail.com',
            'password' => Hash::make('123rere'),
            'phone_number' => '087823119321',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now() 
        ]]);
    }
}
