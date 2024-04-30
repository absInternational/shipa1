<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Blog;
use App\Models\Service;
use App\Models\NewsletterSubscribers;
use App\Models\ServiceCategory;

class FrontendController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->take(3)->get();
        $reviews = Review::all();
        return view('frontend.index', compact('reviews', 'blogs'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blogs = Blog::where('slug_name', '!=', $slug)->latest()->get();
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

    public function services(Request $request)
    {
        if ($request->has('category')) {
            $category = ServiceCategory::whereSlug($request->category)->first();
            $services = Service::where('category_id', $category->id)->latest()->get();
        } else {
            $services = Service::latest()->get();
        }

        return view('frontend.pages.services.index', compact('services'));
    }

    public function serviceDetails(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.pages.services.detail', compact('service'));
    }

    public function autoAuction(Request $request)
    {
        $services = Service::latest()->get();
        return view('frontend.pages.services.index', compact('services'));
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
