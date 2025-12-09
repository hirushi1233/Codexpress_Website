<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        // Get all active technologies ordered by the 'order' field
        $technologies = Technology::active()
            ->ordered()
            ->get();

        // Change 'technologies.index' to 'technology' to match your view file
        return view('technology', compact('technologies'));
    }
}
