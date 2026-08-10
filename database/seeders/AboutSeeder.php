<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'bio' => 'I\'m a passionate Full Stack Developer with 5+ years of experience in building scalable web applications. I specialize in Laravel, React, and modern PHP development. I love creating elegant solutions to complex problems and am always eager to learn new technologies.',
            'email' => 'your-email@example.com',
            'phone' => '+1 (555) 123-4567',
            'location' => 'San Francisco, CA',
            'avatar_url' => '/images/avatar.jpg',
            'social_links' => [
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
                'twitter' => 'https://twitter.com',
            ],
        ]);
    }
}
