<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::create([
            'institution' => 'Universiti Teknologi MARA (UiTM)',
            'degree' => 'Bachelor of Computer Science (Hons.), Netcentric Computing',
            'start_year' => '2023',
            'end_year' => '2026',
            'order' => 1,
        ]);

        Education::create([
            'institution' => 'Politeknik Sultan Idris Shah',
            'degree' => 'Diploma in Electronic Engineering (Computer)',
            'start_year' => '2019',
            'end_year' => '2022',
            'order' => 2,
        ]);
    }
}
