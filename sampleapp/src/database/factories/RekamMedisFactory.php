<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RekamMedis;

class RekamMedisFactory extends Factory
{
    protected $model = RekamMedis::class;

    public function definition(): array
    {
        return [
            'deskripsi' => $this->faker->sentence(),
            'tanggal_rekam' => $this->faker->date(),
        ];
    }
}
