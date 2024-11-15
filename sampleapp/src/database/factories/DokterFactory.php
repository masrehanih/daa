<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dokter;

class DokterFactory extends Factory
{
    protected $model = Dokter::class;

    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'spesialisasi' => $this->faker->randomElement(['Kardiologi', 'Neurologi', 'Pediatri']),
            'telepon' => $this->faker->phoneNumber(),
            'tersedia' => $this->faker->boolean(),
        ];
    }
}
