<?php

namespace Database\Seeders;

use App\Models\CategoryPost;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        CategoryPost::create([
            'name' => 'Penanaman',
            'slug' => 'penanaman',
            'color' => 'yellow'     
        ]);

        CategoryPost::create([
            'name' => 'Pengolahan',
            'slug' => 'pengolahan',
            'color' => 'blue'       
        ]);

        CategoryPost::create([
            'name' => 'Perawatan',
            'slug' => 'perawatan',
            'color' => 'green'       
        ]);

        CategoryPost::create([
            'name' => 'Pemasaran',
            'slug' => 'pemasaran',
            'color' => 'red'       
        ]);
    }
}
