<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Blog;
use App\Models\NewsletterSubscribers;

class FrontendController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('frontend.index', compact('reviews'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blogs = Blog::latest()->get();
        $blog = Blog::where('slug_name', $slug)->first();
        return view('frontend.blogs.detail', compact('blog', 'blogs'));
    }

    public function aboutUs()
    {
        $reviews = Review::all();
        return view('frontend.pages.aboutUs', compact('reviews'));
    }

    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }

    public function services()
    {
        return view('frontend.pages.services.index');
    }

    public function serviceDetails()
    {
        return view('frontend.pages.services.detail');
    }

    public function autoAuction()
    {
        return view('frontend.pages.services.index');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ], [
            'email.unique' => 'You have already subscribed to our newsletter.',
        ]);

        NewsletterSubscribers::create($request->only('email'));

        return response()->json(['message' => 'Subscription successful']);
    }
}
