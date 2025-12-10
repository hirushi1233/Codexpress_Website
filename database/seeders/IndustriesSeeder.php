<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Industries;

class IndustriesSeeder extends Seeder
{
    public function run(): void
    {
        Industries::truncate(); // Clear existing data

        $industries = [
            // PRIMARY INDUSTRIES
            [
                'name' => 'Healthcare & Medical',
                'description' => 'Delivering innovative solutions that enhance patient care, improve diagnostics, and streamline healthcare operations.',
                'category' => 'PRIMARY INDUSTRIES',
                'is_active' => true,
                'order' => 1,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg',
                'icon_class' => 'industry-icon-healthcare'
            ],
            [
                'name' => 'Finance & Banking',
                'description' => 'Empowering financial institutions with secure, efficient, and data-driven digital solutions for modern banking.',
                'category' => 'PRIMARY INDUSTRIES',
                'is_active' => true,
                'order' => 2,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitcoin/bitcoin-original.svg',
                'icon_class' => 'industry-icon-finance'
            ],
            [
                'name' => 'E-commerce & Retail',
                'description' => 'Enabling seamless online shopping experiences and smart retail management through technology and automation.',
                'category' => 'PRIMARY INDUSTRIES',
                'is_active' => true,
                'order' => 3,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/shopify/shopify-original.svg',
                'icon_class' => 'industry-icon-ecommerce'
            ],
            [
                'name' => 'Education & E-Learning',
                'description' => 'Transforming learning with digital tools, interactive platforms, and accessible education for all.',
                'category' => 'PRIMARY INDUSTRIES',
                'is_active' => true,
                'order' => 4,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg',
                'icon_class' => 'industry-icon-education'
            ],
            [
                'name' => 'Manufacturing',
                'description' => 'Driving efficiency and innovation through automation, smart systems, and Industry 4.0 solutions.',
                'category' => 'PRIMARY INDUSTRIES',
                'is_active' => true,
                'order' => 5,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg',
                'icon_class' => 'industry-icon-manufacturing'
            ],

            // TECH & SERVICES
            [
                'name' => 'SaaS & Software',
                'description' => 'Building scalable cloud-based applications that optimize business performance and customer engagement.',
                'category' => 'TECH & SERVICES',
                'is_active' => true,
                'order' => 1,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aws/aws-original.svg',
                'icon_class' => 'industry-icon-saas'
            ],
            [
                'name' => 'FinTech',
                'description' => 'Revolutionizing financial services with innovative technologies that ensure transparency, speed, and convenience.',
                'category' => 'TECH & SERVICES',
                'is_active' => true,
                'order' => 2,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
                'icon_class' => 'industry-icon-fintech'
            ],
            [
                'name' => 'Real Estate & PropTech',
                'description' => 'Modernizing property management and real estate operations through data-driven digital platforms.',
                'category' => 'TECH & SERVICES',
                'is_active' => true,
                'order' => 3,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg',
                'icon_class' => 'industry-icon-realestate'
            ],
            [
                'name' => 'Media & Entertainment',
                'description' => 'Powering creative industries with digital content platforms, streaming solutions, and immersive experiences.',
                'category' => 'TECH & SERVICES',
                'is_active' => true,
                'order' => 4,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/unity/unity-original.svg',
                'icon_class' => 'industry-icon-media'
            ],

            // EMERGING SECTORS
            [
                'name' => 'Energy & Utilities',
                'description' => 'Promoting sustainability with smart energy management, renewable solutions, and digital infrastructure.',
                'category' => 'EMERGING SECTORS',
                'is_active' => true,
                'order' => 1,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/electron/electron-original.svg',
                'icon_class' => 'industry-icon-energy'
            ],
            [
                'name' => 'Automotive & Mobility',
                'description' => 'Shaping the future of transportation with connected, electric, and autonomous vehicle technologies.',
                'category' => 'EMERGING SECTORS',
                'is_active' => true,
                'order' => 2,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg',
                'icon_class' => 'industry-icon-automotive'
            ],
            [
                'name' => 'Insurance & InsurTech',
                'description' => 'Enhancing risk management and customer trust with data analytics, automation, and digital claims solutions.',
                'category' => 'EMERGING SECTORS',
                'is_active' => true,
                'order' => 3,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg',
                'icon_class' => 'industry-icon-insurance'
            ],
            [
                'name' => 'Agriculture & AgriTech',
                'description' => 'Empowering farmers and agribusinesses with IoT, AI, and precision farming technologies for higher productivity.',
                'category' => 'EMERGING SECTORS',
                'is_active' => true,
                'order' => 4,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/arduino/arduino-original.svg',
                'icon_class' => 'industry-icon-agriculture'
            ],
        ];

        foreach ($industries as $industry) {
            Industries::create($industry);
        }
    }
}
