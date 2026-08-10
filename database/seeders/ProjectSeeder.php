<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Talentbank Career Fair Calendar',
            'description' => "A full-year scheduling system for career fairs, built for Talentbank's events team. Candidates and employers browse and register through a public calendar, while a no-code admin panel handles everything behind it.\n\nThe scheduling logic is the interesting part: the admin form flags conflicts in real time as you type, grading severity from \"same venue, overlapping times\" up to \"same day,\" and serious clashes need explicit confirmation before they can be saved. Capacity is enforced with database transactions and write locks so concurrent registrations can't overbook a venue, with support for waitlists and manual overrides. Every change is timestamped and attributed, date changes leave the original slot visible with a \"Date changed\" badge instead of silently disappearing, and cancelled events stay visible with a reason rather than being deleted outright.",
            'image_url' => null,
            'github_url' => 'https://github.com/Danishf1007/talentbank-career-calendar',
            'live_url' => null,
            'technologies' => ['PHP', 'MySQL', 'JavaScript', 'HTML/CSS'],
            'order' => 1,
            'featured' => true,
        ]);

        Project::create([
            'title' => 'ElectriHub',
            'description' => "A Laravel platform connecting freelance electricians with clients who need work done. Built on a standard Laravel MVC structure with Blade templating, Vite-bundled assets, and AdminLTE for the admin-facing screens.\n\nThe focus is a clean, secure, and scalable base: environment-driven configuration, database migrations for a repeatable schema, and PHPUnit wired in from the start for testing as the feature set grows.",
            'image_url' => null,
            'github_url' => 'https://github.com/Danishf1007/ElectriHub',
            'live_url' => null,
            'technologies' => ['Laravel', 'PHP', 'Blade', 'MySQL'],
            'order' => 2,
            'featured' => true,
        ]);

        Project::create([
            'title' => 'PushUp',
            'description' => "A Flutter app that connects fitness coaches with their athletes. Coaches design training plans, track athlete progress, and send motivational feedback; athletes follow their routines, log workouts, and watch their own progress charts fill in.\n\nBuilt with Clean Architecture (domain / data / presentation layers) and Riverpod for state management, with Firebase handling auth, Firestore, storage, and push notifications. Role-based dashboards separate the coach and athlete experience, FL Chart drives the progress visualizations, and an achievement system gamifies consistency.",
            'image_url' => null,
            'github_url' => 'https://github.com/Danishf1007/Pushup-app',
            'live_url' => null,
            'technologies' => ['Flutter', 'Dart', 'Firebase', 'Riverpod'],
            'order' => 3,
            'featured' => true,
        ]);
    }
}
