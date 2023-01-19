<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Claudia',
            'email' => 'claudia@gmail.com',
            'password' => '1234'
        ]);

        DB::table('users')->insert([
            'name' => 'Alberto',
            'email' => 'galipienso@gmail.com',
            'password' => '4321'
        ]);

        DB::table('users')->insert([
            'name' => 'Gio',
            'email' => 'mariagio@gmail.com',
            'password' => '1324'
        ]);
    }
}
