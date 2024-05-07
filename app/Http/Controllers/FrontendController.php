<?php

namespace App\Http\Controllers;

use App\Models\FAQs;
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
        $blogs = Blog::where('status', 1)->take(3)->get();
        $reviews = Review::get();
        return view('frontend.index', compact('reviews', 'blogs'));
    }

    public function blogs()
    {
        $blogs = Blog::where('status', 1)->paginate(10);
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blogs = Blog::where('slug_name', '!=', $slug)->take(3)->get();
        $blog = Blog::where('slug_name', $slug)->first();
        return view('frontend.blogs.detail', compact('blog', 'blogs'));
    }

    public function blogDetailsNoSlug($slug)
    {
        $blogs = Blog::where('slug_name', '!=', $slug)->take(3)->get();
        $blog = Blog::where('slug_name', $slug)->first();
        return view('frontend.blogs.detail', compact('blog', 'blogs'));
    }

    public function aboutUs()
    {
        $faqs = FAQs::where('status', 1)->get();
        $reviews = Review::get();
        return view('frontend.pages.aboutUs', compact('reviews', 'faqs'));
    }

    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }

    public function services(Request $request)
    {
        if ($request->has('category')) {
            $category = ServiceCategory::whereSlug($request->category)->first();
            $services = Service::where('category_id', $category->id)->get();
        } else {
            $services = Service::get();
        }

        return view('frontend.pages.services.index', compact('services'));
    }

    public function serviceDetails(Request $request, $slug)
    {
        $faqs = FAQs::where('status', 1)->get();
        $service = Service::where('slug', $slug)->first();
        $related = Service::where('id', '!=', $service->id)->where('category_id', $service->category_id)->take(5)->get();
        return view('frontend.pages.services.detail', compact('service', 'related', 'faqs'));
    }

    public function autoAuction(Request $request)
    {
        $services = Service::get();
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

    public function orderTracking()
    {
        return view('frontend.pages.orderTracking');
    }

    public function termsAndConditions()
    {
        return view('frontend.pages.termsAndConditions');
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacyPolicy');
    }
}
