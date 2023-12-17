<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Risma',
            'nisn' => '11234567',
            'tahun_lulus' => '202215',
            'image' => '',
            'email' => 'risma@example.com',
            'password' => bcrypt('12345')
        ]);
    }
}
