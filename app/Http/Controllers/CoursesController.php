<?php

namespace App\Http\Controllers;

use App\Models\Courses;

class CoursesController extends Controller
{
    /**
     * Display a listing of active, ordered courses.
     */
    public function index()
    {
        // Fetch only active courses, ordered, and ensure no duplicates
        $courses = Courses::active()
            ->ordered()
            ->get()
            ->unique('id'); // prevent duplicates if any

        return view('courses', compact('courses'));
    }
}
