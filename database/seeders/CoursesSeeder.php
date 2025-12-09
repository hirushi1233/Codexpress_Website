<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Courses;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void


    {
        Courses::truncate();
        $courses = [
            [
                'name' => 'Python Programming',
                'description' => 'Learn Python from scratch and build real-world applications with hands-on projects.',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
                'icon_class' => 'course-icon-python',
                'content' => [
                    'Introduction to Python & Setup',
                    'Data Types, Variables & Operators',
                    'Control Flow: Loops & Conditionals',
                    'Functions & Modules',
                    'File Handling & Exceptions',
                    'Object-Oriented Programming (OOP)',
                    'Libraries: NumPy, Pandas, Matplotlib'
                ],
                'projects' => 'Calculator, Web Scraper, Data Analysis',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'Web Development (HTML, CSS, JS)',
                'description' => 'Build responsive websites and interactive web applications using modern web technologies.',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
                'icon_class' => 'course-icon-web',
                'content' => [
                    'HTML5 Basics & Semantic Tags',
                    'CSS3: Styling & Layouts (Flexbox, Grid)',
                    'JavaScript Basics & DOM Manipulation',
                    'Responsive Design & Media Queries',
                    'Introduction to Frontend Frameworks (React.js/Angular)',
                    'Web Hosting & Deployment'
                ],
                'projects' => 'Portfolio Website, To-Do App',
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => 'Data Science & Machine Learning',
                'description' => 'Analyze data and build predictive models using Python and popular ML libraries.',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg',
                'icon_class' => 'course-icon-datascience',
                'content' => [
                    'Data Analysis with Pandas & NumPy',
                    'Data Visualization (Matplotlib, Seaborn)',
                    'Statistics & Probability Fundamentals',
                    'Supervised & Unsupervised Learning',
                    'Regression, Classification & Clustering',
                    'Model Evaluation & Hyperparameter Tuning'
                ],
                'projects' => 'Stock Price Prediction, Customer Segmentation',
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => 'Cloud Computing (AWS)',
                'description' => 'Master cloud services, deployment, and server management using AWS.',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original-wordmark.svg',
                'icon_class' => 'course-icon-cloud',
                'content' => [
                    'Introduction to Cloud & AWS Basics',
                    'EC2, S3, RDS, and Lambda Services',
                    'IAM & Security Best Practices',
                    'Deployment of Web Applications on AWS',
                    'Monitoring & Cost Optimization'
                ],
                'projects' => 'Deploy Flask App on AWS, Serverless API',
                'is_active' => true,
                'order' => 4
            ],
            [
                'name' => 'Cybersecurity & Ethical Hacking',
                'description' => 'Learn how to secure systems, detect vulnerabilities, and perform ethical hacking.',
                'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg',
                'icon_class' => 'course-icon-cybersecurity',
                'content' => [
                    'Networking & Protocols Basics',
                    'Cybersecurity Fundamentals',
                    'Ethical Hacking Methodologies',
                    'Penetration Testing & Tools (Kali Linux, Wireshark)',
                    'Vulnerability Assessment & Exploitation',
                    'Web & Network Security'
                ],
                'projects' => 'Vulnerable Web App Exploitation, Wi-Fi Security Testing',
                'is_active' => true,
                'order' => 5
            ]
        ];

        foreach ($courses as $course) {
            Courses::create($course);
        }
    }
}
