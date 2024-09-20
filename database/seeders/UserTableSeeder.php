<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory('users')->create([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'password' =>bcrypt('123456789')
        ]);
    }
}
