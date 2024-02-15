<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Games;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Games::create([
            'name' => 'Blue Archive',
            'slug' => 'blue-archive',
            'image' => 'game-images/blue_archive.jpg'
        ]);

        Games::create([
            'name' => 'Star Rail',
            'slug' => 'star-rail',
            'image' => 'game-images/star_rail.jpg'
        ]);

        Games::create([
            'name' => 'Project Sekai',
            'slug' => 'project-sekai',
            'image' => 'game-images/project_sekai.jpg'
        ]);
    }
}
