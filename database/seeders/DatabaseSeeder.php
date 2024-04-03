<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Event::factory(10)->create();
        // \App\Models\CSR::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> Hash::make('test')
        ]);

        $this->call([
            BODSeeder::class,
            CSRSeeder::class,
            NewsSeeder::class,
            HistorySeeder::class,
            ProductsSeed::class,
            SlidersSeeder::class,
            ServicesSeeder::class,
        ]);

    }
}
