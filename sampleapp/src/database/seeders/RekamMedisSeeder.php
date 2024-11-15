<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RekamMedis;
use App\Models\Pasien;

class RekamMedisSeeder extends Seeder
{
    public function run(): void
    {
        $pasiens = Pasien::all();

        foreach ($
