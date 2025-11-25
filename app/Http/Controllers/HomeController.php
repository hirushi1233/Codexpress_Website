<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'icon' => 'service-icon-01.png',
                'title' => 'Web Development',
                'description' => 'Custom web applications built with modern frameworks'
            ],
            [
                'icon' => 'service-icon-02.png',
                'title' => 'Mobile Apps',
                'description' => 'Native and cross-platform mobile solutions'
            ],
            [
                'icon' => 'service-icon-03.png',
                'title' => 'AI Integration',
                'description' => 'Smart AI solutions for your business'
            ],
            [
                'icon' => 'service-icon-04.png',
                'title' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure and deployment'
            ]
        ];

        $portfolio = [
            [
                'image' => 'portfolio-01.jpg',
                'title' => 'Project Alpha',
                'category' => 'Web Development'
            ],
            [
                'image' => 'portfolio-02.jpg',
                'title' => 'Project Beta',
                'category' => 'Mobile App'
            ],
            [
                'image' => 'portfolio-03.jpg',
                'title' => 'Project Gamma',
                'category' => 'AI Solution'
            ],
            [
                'image' => 'portfolio-04.jpg',
                'title' => 'Project Delta',
                'category' => 'Cloud Platform'
            ]
        ];

        return view('home', compact('services', 'portfolio'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'website' => 'nullable|string',
            'message' => 'required|string'
        ]);

        // For now just return success
        return redirect()->back()->with('success', 'Thank you! We will get back to you soon.');
    }
}
