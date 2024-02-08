<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "admin",
                'email' => "admin@spacetourisme.test",
                'password'=>bcrypt("00000000"),
                'is_admin' => 1,
            ],
        ]);
    }
}
