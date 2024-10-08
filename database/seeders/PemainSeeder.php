<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            Post::create([
                'nama_pemain' => fake()->name(3),
                'no_punggung' => fake()->numberBetween(0,99),
                'posisi' => fake()->name(1),
            ]);
    }
}
}
