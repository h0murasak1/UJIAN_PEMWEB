<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Matematika', 'Fisika', 'Kimia',
            'Biologi', 'Bahasa Indonesia', 'Bahasa Inggris',
            'Sejarah', 'Geografi', 'Ekonomi', 'Seni Budaya',
        ];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('classes')->insert([
                'name'       => "Kelas {$i}",
                'subject'    => $subjects[$i - 1] ?? 'Umum',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
