<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        User::insert([
            "name" => "Meskat",
            "user_name" => "meskat321",
            "email" => "meskat@gmail.com",
            "address" => "Dhaka",
            "password" => Hash::make(123),
        ]);

    }
}
