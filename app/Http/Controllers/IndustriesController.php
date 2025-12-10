<?php

namespace App\Http\Controllers;

use App\Models\Industries;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index()
    {
        // Get active industries by category and order
        $primaryIndustries = Industries::where('is_active', 1)
            ->where('category', 'PRIMARY INDUSTRIES')
            ->orderBy('order', 'asc')
            ->get();

        $techIndustries = Industries::where('is_active', 1)
            ->where('category', 'TECH & SERVICES')
            ->orderBy('order', 'asc')
            ->get();

        $emergingIndustries = Industries::where('is_active', 1)
            ->where('category', 'EMERGING SECTORS')
            ->orderBy('order', 'asc')
            ->get();

        return view('industries', compact('primaryIndustries', 'techIndustries', 'emergingIndustries'));
    }
}
