<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['hadir', 'izin', 'alpha'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('attendances')->insert([
                'class_id'    => $i,                             // ada kelas 1–10
                'student_id'  => rand(5, 10),                    // siswa ID 5–10
                'teacher_id'  => rand(2, 4),                     // guru ID 2–4
                'date'        => Carbon::now()->subDays(rand(0, 30))->toDateString(),
                'status'      => $statuses[array_rand($statuses)],
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
        }
    }
}
