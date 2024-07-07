<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
        DB::table('users')->insert([
            [
                'name' => 'Trần Xuân Hiếu',
                'email' => 'henri16102938@gmail.com',
                'password' => Hash::make('adminpassword'), 
                'age' => 18,
                'gender' => true,
                'body_weight' => 70,
                'body_height' => 170,
                'role' => 'admin',
            ],

        ]);
        // Create a regular user
        // User::factory()->create();

        // // Create an admin user
        // User::factory()->admin()->create();
    }
}