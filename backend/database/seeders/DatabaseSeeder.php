<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        // User::factory(10)->create();
        Post::factory(10)->create();
    }
}
