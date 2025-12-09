<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index()
    {
        $primaryIndustries = [
            [
                'icon' => 'HC',
                'title' => 'Healthcare & Medical',
                'description' => 'Digital health solutions, patient management systems, telemedicine platforms, and healthcare analytics.',
                'color' => 'healthcare'
            ],
            [
                'icon' => 'FB',
                'title' => 'Finance & Banking',
                'description' => 'Secure banking applications, payment gateways, financial management tools, and fraud detection systems.',
                'color' => 'finance'
            ],
            [
                'icon' => 'EC',
                'title' => 'E-Commerce & Retail',
                'description' => 'Online stores, inventory management, customer analytics, and omnichannel retail solutions.',
                'color' => 'ecommerce'
            ],
            [
                'icon' => 'ED',
                'title' => 'Education & E-Learning',
                'description' => 'Learning management systems, virtual classrooms, student portals, and educational content platforms.',
                'color' => 'education'
            ],
            [
                'icon' => 'MF',
                'title' => 'Manufacturing',
                'description' => 'Production automation, quality control systems, supply chain optimization, and IoT manufacturing solutions.',
                'color' => 'manufacturing'
            ],
            [
                'icon' => 'LS',
                'title' => 'Logistics & Supply Chain',
                'description' => 'Fleet management, warehouse automation, shipment tracking, and supply chain visibility platforms.',
                'color' => 'logistics'
            ]
        ];

        $techServices = [
            [
                'icon' => 'SS',
                'title' => 'SaaS & Software',
                'description' => 'Cloud-based applications, subscription platforms, API integrations, and enterprise software solutions.',
                'color' => 'saas'
            ],
            [
                'icon' => 'FT',
                'title' => 'FinTech',
                'description' => 'Digital payments, cryptocurrency platforms, robo-advisors, and peer-to-peer lending solutions.',
                'color' => 'fintech'
            ],
            [
                'icon' => 'RE',
                'title' => 'Real Estate & PropTech',
                'description' => 'Property management systems, virtual tours, smart building solutions, and real estate marketplaces.',
                'color' => 'proptech'
            ],
            [
                'icon' => 'ME',
                'title' => 'Media & Entertainment',
                'description' => 'Streaming platforms, content management, digital publishing, and interactive media applications.',
                'color' => 'media'
            ],
            [
                'icon' => 'TC',
                'title' => 'Telecommunications',
                'description' => 'Network management, billing systems, customer portals, and unified communication platforms.',
                'color' => 'telecom'
            ],
            [
                'icon' => 'TH',
                'title' => 'Travel & Hospitality',
                'description' => 'Booking systems, hotel management, travel planning apps, and guest experience platforms.',
                'color' => 'travel'
            ]
        ];

        $emergingSectors = [
            [
                'icon' => 'EU',
                'title' => 'Energy & Utilities',
                'description' => 'Smart grid solutions, renewable energy management, utility billing systems, and energy monitoring platforms.',
                'color' => 'energy'
            ],
            [
                'icon' => 'AM',
                'title' => 'Automotive & Mobility',
                'description' => 'Connected vehicles, ride-sharing platforms, EV charging networks, and fleet management solutions.',
                'color' => 'automotive'
            ],
            [
                'icon' => 'IT',
                'title' => 'Insurance & InsurTech',
                'description' => 'Policy management, claims automation, risk assessment tools, and digital insurance platforms.',
                'color' => 'insurance'
            ],
            [
                'icon' => 'AG',
                'title' => 'Agriculture & AgriTech',
                'description' => 'Precision farming, crop monitoring, agricultural marketplaces, and farm management systems.',
                'color' => 'agriculture'
            ],
            [
                'icon' => 'GP',
                'title' => 'Government & Public Sector',
                'description' => 'Citizen portals, digital identity systems, e-governance platforms, and public service automation.',
                'color' => 'government'
            ],
            [
                'icon' => 'NP',
                'title' => 'Non-Profit Organizations',
                'description' => 'Donor management, volunteer coordination, fundraising platforms, and impact tracking systems.',
                'color' => 'nonprofit'
            ]
        ];

        return view('industries', compact('primaryIndustries', 'techServices', 'emergingSectors'));
    }
}
