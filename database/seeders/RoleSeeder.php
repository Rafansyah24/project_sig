<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('123'),
        'level' => 'admin',
    ]);

    DB::table('users')->insert([
        'name' => 'user',
        'email' => 'user@gmail.com',
        'password' => bcrypt('12345'),
        'level' => 'user',
    ]);
}
}
