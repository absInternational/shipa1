<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function blogs()
    {
        return view('frontend.blogs.index');
    }
    
    public function blogDetails()
    {
        return view('frontend.blogs.detail');
    }
    
    public function aboutUs()
    {
        return view('frontend.pages.aboutUs');
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
}
