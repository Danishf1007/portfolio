<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'company' => 'IA SoftTech',
            'role' => 'IT Assistant Intern',
            'start_date' => 'March 2026',
            'end_date' => 'July 2026',
            'bullets' => [
                'Engineered an end-to-end Help Desk ticketing system, designing the backend logic and database schema used to log, track, and resolve internal user requests.',
                "Redesigned the company's corporate website using modern, minimalist UI/UX principles, strengthening brand presentation and improving usability.",
                'Built a Human Resource Management mobile application in Flutter with role-based access control across five permission tiers (Super Admin to Executive), supporting staff leave, claims, and attendance workflows.',
                'Diagnosed and resolved hardware, software, and network issues for internal employees, maintaining uninterrupted daily business operations.',
                'Partnered with internal stakeholders to gather requirements and translate user feedback into actionable website features and system updates.',
            ],
            'order' => 1,
        ]);

        Experience::create([
            'company' => 'Institut Tadbiran Awam Negara (INTAN)',
            'role' => 'Technical Support Intern',
            'start_date' => 'March 2022',
            'end_date' => 'July 2022',
            'bullets' => [
                'Diagnosed and resolved hardware, software, and network issues across computer systems and printers for IT officers, minimizing service downtime.',
                'Executed software installations and updates across 30+ departmental PCs.',
                'Documented hardware inventory and service records to support internal audit processes.',
                'Configured projectors and network setups on-site for departmental events.',
                'Collaborated with technical staff to identify system performance issues and propose improvements.',
            ],
            'order' => 2,
        ]);
    }
}
