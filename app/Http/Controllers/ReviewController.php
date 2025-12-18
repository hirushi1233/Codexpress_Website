<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;


class ReviewController extends Controller
{
    /* Store frontend review */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Review::create([
            'name' => $request->name,
            'title' => $request->title,
            'company' => $request->company,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Review submitted! Awaiting admin approval.');
    }

    /* Admin dashboard feedback list */
    public function adminIndex()
    {
        $reviews = Review::latest()->get();
        return view('admin.feedback', compact('reviews'));
    }

    /* Approve review */
    public function approve($id)
    {
        Review::where('id', $id)->update(['is_approved' => true]);
        return back()->with('success', 'Review approved!');
    }

    /* Delete review */
    public function destroy($id)
    {
        Review::findOrFail($id)->delete();
        return back()->with('success', 'Review deleted!');
    }
}

