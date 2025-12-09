<?php


namespace App\Http\Controllers;

    use App\Models\Solutions;
    use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index()
    {
        // Get active solutions by category and order
        $topSolutions = Solutions::where('is_active', 1)
            ->where('category', 'TOP SOLUTIONS')
            ->orderBy('order', 'asc')
            ->get();

        $enterpriseSolutions = Solutions::where('is_active', 1)
            ->where('category', 'ENTERPRISE FOCUSED')
            ->orderBy('order', 'asc')
            ->get();

        return view('solutions', compact('topSolutions', 'enterpriseSolutions'));
    }
}
