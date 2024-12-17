<?php

namespace Database\Seeders;

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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Mahasiswa::factory(30)->create();

        \App\Models\Pasien::factory(100)->create();
        \App\Models\Poli::factory(4)->create();
        \App\Models\Daftar::factory(30)->create();
    }
}
