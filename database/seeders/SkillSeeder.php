<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        // Backend
        Skill::create(['name' => 'Laravel', 'category' => 'backend', 'proficiency' => 90, 'order' => 1]);
        Skill::create(['name' => 'PHP', 'category' => 'backend', 'proficiency' => 88, 'order' => 2]);
        Skill::create(['name' => 'MySQL', 'category' => 'backend', 'proficiency' => 82, 'order' => 3]);

        // Mobile
        Skill::create(['name' => 'Flutter', 'category' => 'mobile', 'proficiency' => 78, 'order' => 1]);
        Skill::create(['name' => 'Dart', 'category' => 'mobile', 'proficiency' => 78, 'order' => 2]);
        Skill::create(['name' => 'Firebase', 'category' => 'mobile', 'proficiency' => 72, 'order' => 3]);

        // Frontend
        Skill::create(['name' => 'JavaScript', 'category' => 'frontend', 'proficiency' => 75, 'order' => 1]);
        Skill::create(['name' => 'HTML / CSS', 'category' => 'frontend', 'proficiency' => 85, 'order' => 2]);
        Skill::create(['name' => 'Tailwind CSS', 'category' => 'frontend', 'proficiency' => 80, 'order' => 3]);

        // Systems & tools
        Skill::create(['name' => 'Networking', 'category' => 'systems', 'proficiency' => 80, 'order' => 1]);
        Skill::create(['name' => 'Linux', 'category' => 'systems', 'proficiency' => 75, 'order' => 2]);
        Skill::create(['name' => 'Git', 'category' => 'systems', 'proficiency' => 85, 'order' => 3]);
    }
}
