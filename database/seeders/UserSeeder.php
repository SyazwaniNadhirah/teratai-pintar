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
        DB::table("users")->insert([
            "name" => "Admin",
            "email" => "admin@example.com",
            "password" => bcrypt("password"),
            "role" => "1",
        ]);

        DB::table("users")->insert([
            "name" => "User",
            "email" => "user@example.com",
            "password" => bcrypt("password"),
            "role" => "0",
        ]);

        DB::table("users")->insert([
            "name" => "Syazwani Nadhirah",
            "email" => "syazwani@example.com",
            "password" => bcrypt("password"),
            "role" => "0",
        ]);

        DB::table("users")->insert([
            "name" => "Ahmad Hafiz",
            "email" => "hafiz@example.com",
            "password" => bcrypt("password"),
            "role" => "0",
        ]);

        DB::table("users")->insert([
            "name" => "Fatin Faiqah",
            "email" => "fatin@example.com",
            "password" => bcrypt("password"),
            "role" => "0",
        ]);
    }
}
