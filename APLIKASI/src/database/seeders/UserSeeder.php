<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // 1. Buat Admin
        $admin = User::create([
            'name'     => 'Admin Utama',
            'email'    => 'admin@absensikita.test',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        // 2. Buat 3 Guru
        for ($i = 1; $i <= 3; $i++) {
            $guru = User::create([
                'name'     => 'Guru ' . $faker->firstName,
                'email'    => 'guru' . $i . '@absensikita.test',
                'password' => Hash::make('password'),
            ]);
            $guru->assignRole('guru');
        }

        // 3. Buat 6 Siswa
        for ($i = 1; $i <= 6; $i++) {
            $siswa = User::create([
                'name'     => 'Siswa ' . $faker->firstName,
                'email'    => 'siswa' . $i . '@absensikita.test',
                'password' => Hash::make('password'),
            ]);
            $siswa->assignRole('siswa');
        }
    }
}
