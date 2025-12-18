<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projects;

class ProjectsSeeder extends Seeder
{
    public function run(): void
    {
        Projects::truncate(); // clear previous data

        $projects = [
            // FEATURED PROJECTS
            [
                'name' => 'E-Commerce Platform',
                'description' => 'A fully functional online shopping system with product management, cart, secure payments, and order tracking.',
                'category' => 'FEATURED',
                'is_active' => true,
                'order' => 1,
                'tech_stack' => 'Laravel, MySQL, Stripe, Bootstrap',
                'image_url' => 'https://images.unsplash.com/photo-1585386959984-a4155224a1a8',
                'project_url' => 'https://yourproject.com/demo'
            ],
            [
                'name' => 'Hotel Reservation System',
                'description' => 'A web-based hotel booking system with room availability, online payments, dashboard management, and customer portal.',
                'category' => 'FEATURED',
                'is_active' => true,
                'order' => 2,
                'tech_stack' => 'PHP, Laravel, Vue.js, MySQL',
                'image_url' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945',
                'project_url' => 'https://yourproject.com/hotel'
            ],
            [
                'name' => 'Mobile Banking App',
                'description' => 'A secure mobile app for managing accounts, transfers, payments, and transaction insights.',
                'category' => 'FEATURED',
                'is_active' => true,
                'order' => 3,
                'tech_stack' => 'Kotlin, Firebase, REST API',
                'image_url' => 'https://images.unsplash.com/photo-1556742044-3c52d6e88c62',
                'project_url' => 'https://yourproject.com/banking'
            ],

            // CLIENT PROJECTS
            [
                'name' => 'Restaurant Ordering System',
                'description' => 'A POS-integrated food ordering platform with kitchen display, online orders, inventory, and reports.',
                'category' => 'CLIENT PROJECTS',
                'is_active' => true,
                'order' => 1,
                'tech_stack' => 'Node.js, React, MongoDB',
                'image_url' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5',
                'project_url' => 'https://yourproject.com/restaurant'
            ],
            [
                'name' => 'Education LMS',
                'description' => 'A learning management system for course management, quizzes, assignments, and video lessons.',
                'category' => 'CLIENT PROJECTS',
                'is_active' => true,
                'order' => 2,
                'tech_stack' => 'Laravel, Livewire, MySQL',
                'image_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978',
                'project_url' => 'https://yourproject.com/lms'
            ],

            // INTERNAL PROJECTS
            [
                'name' => 'AI Chat Assistant',
                'description' => 'An AI-powered chatbot using NLP to automate customer queries and support tasks.',
                'category' => 'INTERNAL PROJECTS',
                'is_active' => true,
                'order' => 1,
                'tech_stack' => 'Python, Flask, OpenAI API',
                'image_url' => 'https://images.unsplash.com/photo-1508385082359-f38ae991e8f2',
                'project_url' => 'https://yourproject.com/ai-chat'
            ],
            [
                'name' => 'Analytics Dashboard',
                'description' => 'A real-time dashboard for monitoring KPIs, user activity, and system health using interactive graphs.',
                'category' => 'INTERNAL PROJECTS',
                'is_active' => true,
                'order' => 2,
                'tech_stack' => 'Django, PostgreSQL, Chart.js',
                'image_url' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984',
                'project_url' => 'https://yourproject.com/dashboard'
            ],
        ];

        foreach ($projects as $project) {
            Projects::create($project);
        }
    }
}
