<?php

namespace Database\Seeders;

use App\Models\ModelPemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i >= 5; $i++) {
            ModelPemain::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 20),
                'posisi' => fake()->sentence(2)
            ]);
        }
    }
}
