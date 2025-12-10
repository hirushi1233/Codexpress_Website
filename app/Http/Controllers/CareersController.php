<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index()
    {
        // Get active careers by category and order
        $careers = Careers::where('is_active', 1)
            ->where('category', 'OPEN POSITIONS')
            ->orderBy('order', 'asc')
            ->get();

        return view('careers', compact('careers'));
    }
}
