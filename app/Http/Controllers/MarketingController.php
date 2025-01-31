<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Marketing;
use App\Models\ReviewSite;
use App\Models\Review;
use App\Models\Blog;
use App\Models\VehicleName;
class MarketingController extends Controller
{
    public function index()
    {
        $marketings = Marketing::latest()->paginate(10);
        return view('dashboard.admin.marketing.index', compact('marketings'));
    }
    public function create()
    {
        return view('dashboard.admin.marketing.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:marketing',
            'img_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'heading_one' => 'required',
            'desc_one' => 'required',
            'category' => 'required',
            'status' => 'required|boolean',
        ]);
        $data = $request->all();
        if ($request->hasFile('img_one')) {
            $data['img_one'] = $request->file('img_one')->store('uploads/marketing', 'public');
        }
        Marketing::create($data);
        return redirect()->route('marketing.index')->with('success', 'Marketing post created successfully.');
    }
    public function preview($slug)
    {
        $marketing = Marketing::where('slug', $slug)->firstOrFail();
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $blogs = Blog::where('status', 1)->take(3)->get(['id', 'post_name', 'slug_name', 'post_image', 'post_description']);
        $reviews = Review::all();
        $site_reviews = ReviewSite::all();
        return view('frontend.pages.marketing.show', data: compact('marketing','reviews', 'blogs', 'makes', 'site_reviews'));
    }
    public function edit(Marketing $marketing)
    {
        return view('dashboard.admin.marketing.edit', compact('marketing'));
    }
    public function update(Request $request, Marketing $marketing)
    {
        $request->validate([
            'slug' => 'required|unique:marketing,slug,' . $marketing->id,
            'img_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'heading_one' => 'required',
            'desc_one' => 'required',
            'category' => 'required',
            'status' => 'required|boolean',
        ]);
        $data = $request->all();
        if ($request->hasFile('img_one')) {
            $data['img_one'] = $request->file('img_one')->store('uploads/marketing', 'public');
        }
        $marketing->update($data);
        return redirect()->route('marketing.index')->with('success', 'Marketing post updated successfully.');
    }
    public function destroy(Marketing $marketing)
    {
        $marketing->delete();
        return redirect()->route('marketing.index')->with('success', 'Marketing post deleted successfully.');
    }
}