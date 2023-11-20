<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Z3d0X\FilamentFabricator\Models\Page;

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

        Page::create([
            'title' => 'Accueil',
            'slug' => 'accueil',
            'layout' => 'default',
            'blocks' => json_decode('[{"data": [], "type": "test"}]'),
        ]);
    }
}
