<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return view('dashboard.admin.reviews.index', compact('review'));
    }

    public function create()
    {
        return view('dashboard.admin.reviews.create');
    }

    public function store(Request $request)
    {
        $review = new Review;

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    public function edit($id)
    {
        $review = Review::find($id);
        return view('dashboard.admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Review::findOrFail($id);
        $blog->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
