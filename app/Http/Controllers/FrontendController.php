<?php

namespace App\Http\Controllers;

use App\Models\FAQs;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Blog;
use App\Models\Service;
use App\Models\NewsletterSubscribers;
use App\Models\ServiceCategory;
use App\Models\VehicleName;
use App\Models\ReviewSite;
use App\Models\NationWideTransport;


class FrontendController extends Controller
{
    public function index()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $reviews = Review::get();
        $site_reviews = ReviewSite::get();
        return view('frontend.index', compact('reviews', 'blogs', 'makes', 'site_reviews'));
    }


    // public function blogs()
    // {
    //     $blogTitle = Blog::get();
    //     // dd($blogTitle);
    //     $blogs = Blog::where('status', 1)->paginate(10);
    //     return view('frontend.blogs.index', compact('blogs', 'blogTitle'));
    // }

    // public function blogDetails($slug)
    // {
    //     $blogs = Blog::where('slug_name', '!=', $slug)->take(3)->get();
    //     $blog = Blog::where('slug_name', $slug)->first();
    //     return view('frontend.blogs.detail', compact('blog', 'blogs'));
    // }

    // public function blogDetailsNoSlug($slug)
    // {
    //     $blog = Blog::where('slug_name', $slug)->first();

    //     if ($blog) {
    //         $blogs = Blog::where('slug_name', '!=', $slug)->take(3)->get();

    //         if ($blog->post_name) {
    //             return view('frontend.blogs.detail', compact('blog', 'blogs'));
    //         } else {
    //         }
    //     } else {
    //         abort(404);
    //     }
    // }

    public function blogs()
    {
        $blogTitle = Blog::where('category', '!=', 'Trailer & Trucks')->get();
        // dd($blogTitle);
        $blogs = Blog::where('category', '!=', 'Trailer & Trucks')->where('status', 1)->paginate(10);
        $recent_blogs = Blog::where('category', '!=', 'Trailer & Trucks')->where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.blogs.index', compact('blogs', 'blogTitle', 'recent_blogs'));
    }

    public function blogsTrailerTruck()
    {
        $blogTitle = Blog::where('category', 'Trailer & Trucks')->get();
        // dd($blogTitle);
        $blogs = Blog::where('category', 'Trailer & Trucks')->where('status', 1)->paginate(10);
        $recent_blogs = Blog::where('category', 'Trailer & Trucks')->where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.blogs.index', compact('blogs', 'blogTitle', 'recent_blogs'));
    }

    public function blogDetails($slug)
    {

        $blogs = Blog::where('slug_name', '!=', $slug)->take(5)->get();
        $blog = Blog::where('slug_name', $slug)->first();
        $recent_blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.blogs.detail', compact('blog', 'blogs', 'recent_blogs'));
    }

    public function blogDetailsNoSlug($slug)
    {
        $blog = Blog::where('slug_name', $slug)->first();
        $recent_blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();

        if ($blog) {
            $blogs = Blog::where('slug_name', '!=', $slug)->take(3)->get();

            if ($blog->post_name) {
                return view('frontend.blogs.detail', compact('blog', 'blogs', 'recent_blogs'));
            } else {
            }
        } else {
            abort(404);
        }
    }

    public function aboutUs()
    {
        $faqs = FAQs::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $reviews = Review::get();
        return view('frontend.pages.aboutUs', compact('reviews', 'faqs', 'blogs'));
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
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        return view('frontend.pages.services.index', compact('services', 'makes'));
    }

    public function serviceDetails(Request $request, $slug)
    {
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $faqs = FAQs::where('status', 1)->get();
        $service = Service::where('slug', $slug)->first();
        $related = Service::where('id', '!=', $service->id)->where('category_id', $service->category_id)->take(5)->get();
        if ($service->layout_type == 'new') {
            return view('frontend.pages.services.detail_new_layout', compact('service', 'related', 'faqs', 'site_reviews', 'blogs'));
        }
        return view('frontend.pages.services.detail', compact('service', 'related', 'faqs', 'site_reviews', 'blogs'));
    }

    public function autoAuction()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        return view('frontend.pages.autoAuction', compact('makes'));
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

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacyPolicy');
    }

    public function vehicleTransportDetail()
    {
        $transports = NationWideTransport::with('details')->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();

        return view('frontend.pages.vehicleTransportDetail', compact('makes', 'blogs', 'site_reviews', 'transports'));
    }

    public function heavyTransportDetail()
    {
        $transports = NationWideTransport::with('details')->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.heavy-transport-detail', compact('blogs', 'site_reviews', 'transports'));
    }

    public function freightTransportDetail()
    {
        $transports = NationWideTransport::with('details')->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.freighttransport-detail', compact('blogs', 'site_reviews', 'transports'));
    }
    public function hazmatTransport()
    {
        return view('frontend.forms.hazmattransport');
    }

    public function dryVan()
    {
        return view('frontend.forms.dryvan');
    }

    public function reeferTrucking()
    {
        return view('frontend.forms.reefertrucking');
    }

    public function carService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.car-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function bikeService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.bike-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function atvutvService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.atv-utv-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function golfcartService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.golf-cart-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function boatService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.boat-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function excavatorService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.excavator-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function hazmatService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.hazmat-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function dryvanService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.dryvan-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function reeferService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.reefer-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function freightService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.freight-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function farmService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.farm-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function rvService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.rv-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function heavyService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.heavy-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function constructionService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.construction-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function commercialService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.commercial-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function roroService()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.services.roro-service', compact('site_reviews', 'blogs', 'makes'));
    }

    public function nationwideAutotransport()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $transports = NationWideTransport::with('details')->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.nationwide-autotransport', compact('site_reviews', 'blogs', 'makes', 'transports'));
    }

    public function thankYou()
    {
        return view('frontend.pages.thank-you');
    }

    public function getNationWideData($slug)
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $transport = NationWideTransport::with('details')->where('slug', $slug)->first();
        $transports = NationWideTransport::with('details')->get();
        $site_reviews = ReviewSite::get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        return view('frontend.pages.nationwide-autotransport', compact('site_reviews', 'blogs', 'makes', 'transports', 'transport'));
    }
}
