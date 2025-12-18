<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        // Match Blade variables
        $featuredProjects = Projects::where('is_active', 1)
            ->where('category', 'FEATURED')
            ->orderBy('order', 'asc')
            ->get();

        $clientProjects = Projects::where('is_active', 1)
            ->where('category', 'CLIENT PROJECTS')
            ->orderBy('order', 'asc')
            ->get();

        $internalProjects = Projects::where('is_active', 1)
            ->where('category', 'INTERNAL PROJECTS')
            ->orderBy('order', 'asc')
            ->get();

        return view('projects', compact('featuredProjects', 'clientProjects', 'internalProjects'));
    }
}
