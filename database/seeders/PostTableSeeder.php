<?php

namespace Database\Seeders;

use App\Models\Admin\Post;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory('posts')->create([
            'title' => Str::random(10),
            'body' => Str::random(50),
            
        ]);
    }
}
