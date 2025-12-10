<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Careers;

class CareersSeeder extends Seeder
{
    public function run(): void
    {
        Careers::truncate(); // Clear existing data

        $careers = [
            [
                'name' => 'Software Engineer',
                'description' => 'Build, test, and maintain software applications using modern programming languages and frameworks.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 1,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/code/code-original.svg',
                'icon_class' => 'career-icon-software'
            ],
            [
                'name' => 'DevOps Engineer',
                'description' => 'Streamline development and operations through automation, CI/CD pipelines, and cloud infrastructure management.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 2,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg',
                'icon_class' => 'career-icon-devops'
            ],
            [
                'name' => 'Data Analyst',
                'description' => 'Interpret and visualize data to provide insights that guide strategic business decisions.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 3,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
                'icon_class' => 'career-icon-data'
            ],
            [
                'name' => 'Cybersecurity Specialist',
                'description' => 'Protect systems and networks by identifying vulnerabilities and defending against cyber threats.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 4,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg',
                'icon_class' => 'career-icon-security'
            ],
            [
                'name' => 'UI/UX Designer',
                'description' => 'Design intuitive and visually engaging user experiences that improve usability and brand appeal.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 5,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg',
                'icon_class' => 'career-icon-designer'
            ],
            [
                'name' => 'Cloud Engineer',
                'description' => 'Deploy, monitor, and optimize scalable cloud environments using AWS, Azure, or Google Cloud.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 6,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aws/aws-original.svg',
                'icon_class' => 'career-icon-cloud'
            ],
            [
                'name' => 'Network Engineer',
                'description' => 'Design, configure, and manage network systems to ensure reliable and secure connectivity.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 7,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ubuntu/ubuntu-original.svg',
                'icon_class' => 'career-icon-network'
            ],
            [
                'name' => 'Quality Assurance (QA) Engineer',
                'description' => 'Test software for bugs, performance, and usability to ensure high-quality product delivery.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 8,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/selenium/selenium-original.svg',
                'icon_class' => 'career-icon-qa'
            ],
            [
                'name' => 'Machine Learning Engineer',
                'description' => 'Build predictive models and intelligent systems using data-driven algorithms and AI tools.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 9,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg',
                'icon_class' => 'career-icon-ml'
            ],
            [
                'name' => 'Frontend Developer',
                'description' => 'Develop responsive, dynamic, and user-friendly web interfaces using HTML, CSS, and JavaScript.',
                'category' => 'OPEN POSITIONS',
                'is_active' => true,
                'order' => 10,
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
                'icon_class' => 'career-icon-frontend'
            ],
        ];

        foreach ($careers as $career) {
            Careers::create($career);
        }
    }
}
