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

        return view('admin.dashboard', compact('solutions', 'technologies', 'industries', 'careers', 'courses'));
    }

    // Logout
    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/');
    }

    // ========== SOLUTIONS ==========
    public function addSolution(Request $request)
    {
        DB::table('solutions')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return back()->with('success', 'Solution added!');
    }

    public function updateSolution(Request $request, $id)
    {
        DB::table('solutions')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => now()
        ]);
        return back()->with('success', 'Solution updated!');
    }

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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return back()->with('success', 'Industry added!');
    }

    public function updateIndustry(Request $request, $id)
    {
        DB::table('industries')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => now()
        ]);
        return back()->with('success', 'Industry updated!');
    }

    public function deleteIndustry($id)
    {
        DB::table('industries')->where('id', $id)->delete();
        return back()->with('success', 'Industry deleted!');
    }

    // ========== CAREERS ==========
    public function addCareer(Request $request)
    {
        DB::table('careers')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return back()->with('success', 'Career added!');
    }

    public function updateCareer(Request $request, $id)
    {
        DB::table('careers')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => now()
        ]);
        return back()->with('success', 'Career updated!');
    }

    public function deleteCareer($id)
    {
        DB::table('careers')->where('id', $id)->delete();
        return back()->with('success', 'Career deleted!');
    }

    // ========== COURSES ==========
    public function addCourse(Request $request)
    {
        DB::table('courses')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return back()->with('success', 'Course added!');
    }

    public function updateCourse(Request $request, $id)
    {
        DB::table('courses')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => now()
        ]);
        return back()->with('success', 'Course updated!');
    }

    public function deleteCourse($id)
    {
        DB::table('courses')->where('id', $id)->delete();
        return back()->with('success', 'Course deleted!');
    }
}
