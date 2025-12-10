<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of courses.
     */
    public function index()
    {
        $courses = Courses::active()->ordered()->get();
        return view('courses', compact('courses'));
    }

    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created course in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon_url' => 'nullable|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'content' => 'nullable|array',
            'projects' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'integer'
        ]);

        Courses::create($validated);

        return redirect()->route('courses.index')
            ->with('success', 'Courses created successfully.');
    }

    /**
     * Display the specified course.
     */
    public function show(Courses $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit(Courses $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified course in storage.
     */
    public function update(Request $request, Courses $course)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon_url' => 'nullable|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'content' => 'nullable|array',
            'projects' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'integer'
        ]);

        $course->update($validated);

        return redirect()->route('courses.index')
            ->with('success', 'Courses updated successfully.');
    }

    /**
     * Remove the specified course from storage.
     */
    public function destroy(Courses $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'Courses deleted successfully.');
    }
}
