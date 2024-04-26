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
}
