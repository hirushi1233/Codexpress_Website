<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        $topSolutions = [
            [
                'icon' => 'BE',
                'title' => 'Back-End Development',
                'description' => 'Robust server-side solutions with Laravel, Node.js, Python, and .NET for scalable applications.',
                'color' => 'backend'
            ],
            [
                'icon' => 'FE',
                'title' => 'Front-End Development',
                'description' => 'Modern, responsive interfaces using React, Vue.js, and Angular for seamless user experiences.',
                'color' => 'frontend'
            ],
            [
                'icon' => 'UI',
                'title' => 'UX/UI Design',
                'description' => 'User-centered designs that combine aesthetics with functionality for maximum engagement.',
                'color' => 'design'
            ],
            [
                'icon' => 'AD',
                'title' => 'Android App Development',
                'description' => 'Native Android apps with Kotlin and Java for performance and reliability.',
                'color' => 'android'
            ],
            [
                'icon' => 'BI',
                'title' => 'Business Intelligence',
                'description' => 'Data-driven insights with Power BI, Tableau, and custom analytics dashboards.',
                'color' => 'bi'
            ],
            [
                'icon' => 'EC',
                'title' => 'ECommerce Development',
                'description' => 'Complete online stores with Shopify, WooCommerce, and custom platforms.',
                'color' => 'ecommerce'
            ],
            [
                'icon' => 'MA',
                'title' => 'Mobile App Development',
                'description' => 'Cross-platform apps with Flutter and React Native for iOS and Android.',
                'color' => 'mobile'
            ],
            [
                'icon' => 'SS',
                'title' => 'SaaS Development',
                'description' => 'Cloud-based software solutions with multi-tenancy, subscription management, and scalability.',
                'color' => 'saas'
            ],
            [
                'icon' => 'WD',
                'title' => 'Web Development',
                'description' => 'Full-stack web applications tailored to your business needs and goals.',
                'color' => 'web'
            ]
        ];

        $enterpriseSolutions = [
            [
                'icon' => 'BK',
                'title' => 'Backup Solutions',
                'description' => 'Automated backup systems and disaster recovery plans to protect your critical business data.',
                'color' => 'backup'
            ],
            [
                'icon' => 'DT',
                'title' => 'Digital Transformation',
                'description' => 'Modernize operations with cloud migration, process automation, and digital strategy.',
                'color' => 'digital'
            ],
            [
                'icon' => 'ER',
                'title' => 'ERP Development',
                'description' => 'Custom Enterprise Resource Planning systems to streamline your business processes.',
                'color' => 'erp'
            ]
        ];

        return view('solutions', compact('topSolutions', 'enterpriseSolutions'));
    }
}
