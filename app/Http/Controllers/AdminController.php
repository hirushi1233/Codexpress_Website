<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show login page
    public function login()
    {
        return view('admin.login');
    }

    // Handle login
    public function loginPost(Request $request)
    {
        $admin = DB::table('admins')
            ->where('username', $request->username)
            ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_logged_in' => true]);
            return redirect('/secret-admin-panel');
        }

        return back()->with('error', 'Invalid credentials');
    }

    // Show dashboard
    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect('/secret-admin-login');
        }

        $solutions = DB::table('solutions')->get();
        $technologies = DB::table('technologies')->get();
        $industries = DB::table('industries')->get();
        $careers = DB::table('careers')->get();
        $courses = DB::table('courses')->get();
        $projects = DB::table('projects')->get(); // <-- add this line
        $reviews = DB::table('reviews')->get();

        return view('admin.dashboard', compact('solutions', 'technologies', 'industries', 'careers', 'courses', 'projects', 'reviews'   ));
    }

    // Logout
    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/');
    }

    // ========== SOLUTIONS ==========

    /**
     * Add a new solution
     */
    public function addSolution(Request $request)
    {
        DB::table('solutions')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,          // optional
            'icon_class' => $request->icon_class ?? '', // optional
            'category' => $request->category,          // TOP SOLUTIONS / ENTERPRISE FOCUSED
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Solution added!');
    }

    /**
     * Update an existing solution
     */
    public function updateSolution(Request $request, $id)
    {
        DB::table('solutions')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,          // optional
            'icon_class' => $request->icon_class ?? '', // optional
            'category' => $request->category,
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? true,
            'updated_at' => now()
        ]);

        return back()->with('success', 'Solution updated!');
    }

    /**
     * Delete a solution
     */
    public function deleteSolution($id)
    {
        DB::table('solutions')->where('id', $id)->delete();

        return back()->with('success', 'Solution deleted!');
    }

    // ========== TECHNOLOGIES ==========
    public function addTechnology(Request $request)
    {
        DB::table('technologies')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,  // ADD THIS
            'icon_class' => $request->icon_class ?? '',  // ADD THIS (optional)
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return back()->with('success', 'Technology added!');
    }

    public function updateTechnology(Request $request, $id)
    {
        DB::table('technologies')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,  // ADD THIS
            'icon_class' => $request->icon_class ?? '',  // ADD THIS (optional)
            'updated_at' => now()
        ]);
        return back()->with('success', 'Technology updated!');

    }

    public function deleteTechnology($id)
    {
        DB::table('technologies')->where('id', $id)->delete();
        return back()->with('success', 'Technology deleted!');
    }

    // ========== INDUSTRIES ==========
    public function addIndustry(Request $request)
    {
        DB::table('industries')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,          // optional
            'icon_class' => $request->icon_class ?? '', // optional
            'category' => $request->category,          // PRIMARY INDUSTRIES / TECH & SERVICES / EMERGING SECTORS
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Industry added!');
    }

    /**
     * Update an existing industry
     */
    public function updateIndustry(Request $request, $id)
    {
        DB::table('industries')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,          // optional
            'icon_class' => $request->icon_class ?? '', // optional
            'category' => $request->category,
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? true,
            'updated_at' => now()
        ]);

        return back()->with('success', 'Industry updated!');
    }

    /**
     * Delete an industry
     */
    public function deleteIndustry($id)
    {
        DB::table('industries')->where('id', $id)->delete();

        return back()->with('success', 'Industry deleted!');
    }
    // ========== CAREERS ==========

    /**
     * Add a new career
     */
    public function addCareer(Request $request)
    {
        DB::table('careers')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,          // optional
            'icon_class' => $request->icon_class ?? '', // optional
            'category' => $request->category,          // OPEN POSITIONS
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Career added!');
    }

    /**
     * Update an existing career
     */
    public function updateCareer(Request $request, $id)
    {
        DB::table('careers')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,          // optional
            'icon_class' => $request->icon_class ?? '', // optional
            'category' => $request->category,
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? true,
            'updated_at' => now()
        ]);

        return back()->with('success', 'Career updated!');
    }

    /**
     * Delete a career
     */
    public function deleteCareer($id)
    {
        DB::table('careers')->where('id', $id)->delete();

        return back()->with('success', 'Career deleted!');
    }

    // ========== COURSES ==========
    public function addCourse(Request $request)
    {
        // Convert content from textarea (line by line) to JSON array
        $content = !empty($request->content)
            ? array_values(array_filter(array_map('trim', explode("\n", $request->content))))
            : [];

        DB::table('courses')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,
            'content' => json_encode($content), // Store as JSON
            'projects' => $request->projects,
            'is_active' => true,
            'order' => DB::table('courses')->max('order') + 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Course added successfully!');
    }

    public function updateCourse(Request $request, $id)
    {
        // Convert content from textarea to JSON array
        $content = !empty($request->content)
            ? array_values(array_filter(array_map('trim', explode("\n", $request->content))))
            : [];

        DB::table('courses')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'icon_url' => $request->icon_url,
            'content' => json_encode($content), // Store as JSON
            'projects' => $request->projects,
            'updated_at' => now()
        ]);

        return back()->with('success', 'Course updated successfully!');
    }

    public function deleteCourse($id)
    {
        DB::table('courses')->where('id', $id)->delete();
        return back()->with('success', 'Course deleted successfully!');
    }

    public function addProject(Request $request)
    {
        // Optional: validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'is_featured' => 'nullable|boolean',
        ]);

        DB::table('projects')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'is_featured' => $request->is_featured ? true : false,
            'is_active' => true,
            'order' => DB::table('projects')->max('order') + 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Project added successfully!');
    }

    // ========== UPDATE PROJECT ==========
    public function updateProject(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'is_featured' => 'nullable|boolean',
        ]);

        DB::table('projects')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category' => $request->category,
            'is_featured' => $request->is_featured ? true : false,
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Project updated successfully!');
    }

    // ========== DELETE PROJECT ==========
    public function deleteProject($id)
    {
        DB::table('projects')->where('id', $id)->delete();
        return back()->with('success', 'Project deleted successfully!');
    }


    // ========== REVIEWS / FEEDBACK ==========

    /**
     * Show reviews in admin dashboard
     */
    public function reviews()
    {
        if (!session('admin_logged_in')) {
            return redirect('/secret-admin-login');
        }

        $reviews = DB::table('reviews')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.feedback', compact('reviews'));
    }

    /**
     * Approve a review
     */
    public function approveReview($id)
    {
        if (!session('admin_logged_in')) {
            return redirect('/secret-admin-login');
        }

        DB::table('reviews')->where('id', $id)->update([
            'is_approved' => true,
            'updated_at' => now()
        ]);

        return back()->with('success', 'Review approved successfully!');
    }

    /**
     * Delete a review
     */
    public function deleteReview($id)
    {
        if (!session('admin_logged_in')) {
            return redirect('/secret-admin-login');
        }

        DB::table('reviews')->where('id', $id)->delete();

        return back()->with('success', 'Review deleted successfully!');
    }
    public function approve($id)
    {
        $review = Review::findOrFail($id);
        $review->is_approved = true;
        $review->save();

        return redirect()->back()->with('success', 'Review approved!');
    }


}
