<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'HTML',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
                'icon_class' => 'tech-icon-html',
                'description' => 'The foundation of web pages. It structures content using tags like headings, paragraphs, images, and links. Think of it as the skeleton of a website.',
                'order' => 1,
                'is_active' => true
            ],
            [
                'name' => 'CSS',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg',
                'icon_class' => 'tech-icon-css',
                'description' => 'Makes websites look beautiful. It controls colors, fonts, layouts, spacing, and animations. It\'s the styling layer that turns plain HTML into visually appealing pages.',
                'order' => 2,
                'is_active' => true
            ],
            [
                'name' => 'JavaScript',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
                'icon_class' => 'tech-icon-javascript',
                'description' => 'Adds interactivity and behavior to websites. It makes things happen when you click buttons, submit forms, or see animations. It\'s the programming language that brings websites to life.',
                'order' => 3,
                'is_active' => true
            ],
            [
                'name' => 'Bootstrap',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg',
                'icon_class' => 'tech-icon-bootstrap',
                'description' => 'A CSS framework with pre-built components like buttons, navigation bars, and grids. Helps developers build responsive, mobile-friendly websites fast.',
                'order' => 4,
                'is_active' => true
            ],
            [
                'name' => 'Laravel',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg',
                'icon_class' => 'tech-icon-laravel',
                'description' => 'A PHP framework for building server-side web apps. Handles databases, user authentication, routing, and backend logic. Secure and scalable.',
                'order' => 5,
                'is_active' => true
            ],
            [
                'name' => 'React',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg',
                'icon_class' => 'tech-icon-react',
                'description' => 'A JavaScript library for building user interfaces with reusable components. Popular for single-page applications. Created by Facebook.',
                'order' => 6,
                'is_active' => true
            ],
            [
                'name' => 'Next.js',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg',
                'icon_class' => 'tech-icon-nextjs',
                'description' => 'A React framework with SSR, static site generation, and built-in routing. Makes React apps fast, SEO-friendly, and production-ready.',
                'order' => 7,
                'is_active' => true
            ]
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
