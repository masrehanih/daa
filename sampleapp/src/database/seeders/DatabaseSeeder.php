<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PasienSeeder::class,
            DokterSeeder::class,
            RekamMedisSeeder::class,
        ]);

        Role::firstOrCreate(['name' => 'super_admin']);

        $user = Pengguna::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'nama' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );

        $user->assignRole('super_admin');
    }
}
