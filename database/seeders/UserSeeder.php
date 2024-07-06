<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Trần Xuân Hiếu',
                'email' => 'henri16102938@gmail.com',
                'phone' => '0946232795',
                'age' => 18,
                'gender' => 1,
                'password' => 'hieu123',
                'body_weight' => 70,
                'body_weight' => 170,
                'role' => 'admin',
                'level' => 1,
            ],

        ]);
    }
}
