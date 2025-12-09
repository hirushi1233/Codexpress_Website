<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Solutions;

class SolutionsSeeder extends Seeder
{
    public function run(): void
    {
        Solutions::truncate(); // Clear existing data

        $solutions = [
            // TOP SOLUTIONS
            [
                'name' => 'Back-end Development',
                'description' => 'Build robust and scalable server-side applications using modern technologies to power seamless web and mobile experiences.',
                'category' => 'TOP SOLUTIONS',
                'is_active' => true,
                'order' => 1,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                'icon_class' => 'solution-icon-php'
            ],
            [
                'name' => 'Front-end Development',
                'description' => 'Create responsive, interactive, and visually appealing user interfaces that enhance user engagement across devices.',
                'category' => 'TOP SOLUTIONS',
                'is_active' => true,
                'order' => 2,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
                'icon_class' => 'solution-icon-js'
            ],
            [
                'name' => 'UX/UI Design',
                'description' => 'Design intuitive and user-friendly interfaces that improve usability, satisfaction, and overall digital experience.',
                'category' => 'TOP SOLUTIONS',
                'is_active' => true,
                'order' => 3,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg',
                'icon_class' => 'solution-icon-figma'
            ],
            [
                'name' => 'Android App Development',
                'description' => 'Develop high-performance Android applications tailored to business needs, ensuring smooth functionality and user experience.',
                'category' => 'TOP SOLUTIONS',
                'is_active' => true,
                'order' => 4,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/android/android-original.svg',
                'icon_class' => 'solution-icon-android'
            ],
            [
                'name' => 'Business Intelligence',
                'description' => 'Transform data into actionable insights through analytics, reporting, and dashboards for informed decision-making.',
                'category' => 'TOP SOLUTIONS',
                'is_active' => true,
                'order' => 5,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tableau/tableau-original.svg',
                'icon_class' => 'solution-icon-bi'
            ],

            // ENTERPRISE FOCUSED
            [
                'name' => 'eCommerce Development',
                'description' => 'Build secure and scalable eCommerce platforms with seamless shopping experiences and integrated payment solutions.',
                'category' => 'ENTERPRISE FOCUSED',
                'is_active' => true,
                'order' => 1,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/shopify/shopify-original.svg',
                'icon_class' => 'solution-icon-ecommerce'
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Design and develop custom mobile applications for iOS and Android that meet business objectives and user expectations.',
                'category' => 'ENTERPRISE FOCUSED',
                'is_active' => true,
                'order' => 2,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg',
                'icon_class' => 'solution-icon-flutter'
            ],
            [
                'name' => 'SaaS Development',
                'description' => 'Create cloud-based software solutions that are accessible, scalable, and maintainable for businesses of all sizes.',
                'category' => 'ENTERPRISE FOCUSED',
                'is_active' => true,
                'order' => 3,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aws/aws-original.svg',
                'icon_class' => 'solution-icon-saas'
            ],
            [
                'name' => 'Web Development',
                'description' => 'Develop modern and responsive websites using cutting-edge technologies that drive engagement and conversions.',
                'category' => 'ENTERPRISE FOCUSED',
                'is_active' => true,
                'order' => 4,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
                'icon_class' => 'solution-icon-web'
            ],
            [
                'name' => 'Backup Solutions',
                'description' => 'Ensure business continuity with secure, reliable, and automated backup systems for critical data.',
                'category' => 'ENTERPRISE FOCUSED',
                'is_active' => true,
                'order' => 5,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg',
                'icon_class' => 'solution-icon-backup'
            ],
            [
                'name' => 'Digital Transformation',
                'description' => 'Leverage technology to streamline processes, enhance customer experience, and drive organizational growth.',
                'category' => 'ENTERPRISE FOCUSED',
                'is_active' => true,
                'order' => 6,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg',
                'icon_class' => 'solution-icon-digital'
            ],
            [
                'name' => 'ERP Development',
                'description' => 'Design and implement enterprise resource planning systems to integrate and manage core business processes efficiently.',
                'category' => 'ENTERPRISE FOCUSED',
                'is_active' => true,
                'order' => 7,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
                'icon_class' => 'solution-icon-erp'
            ],
        ];

        foreach ($solutions as $solution) {
            Solutions::create($solution);
        }
    }
}
