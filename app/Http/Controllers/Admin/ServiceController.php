<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->get();
        return view('dashboard.admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::get();
        return view('dashboard.admin.services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'heading_one' => 'required|string|max:255',
            'desc_one' => 'required|string',
            'heading_two' => 'nullable|string|max:255',
            'desc_two_one' => 'nullable|string',
            'desc_two_two' => 'nullable|string',
            'desc_two_three' => 'nullable|string',
            'desc_two_four' => 'nullable|string',
            'desc_two_five' => 'nullable|string',
            'desc_two_six' => 'nullable|string',
            'extra' => 'nullable|string',
            'status' => 'required|boolean',
            'category_id' => 'required',
            'name' => 'required',
        ]);

        $slug = Str::slug($request->heading_one, '-');

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store uploaded files in the public directory
        $bannerImage = $request->file('banner_image');
        $bannerImage->move(public_path('uploads'), $bannerImage->getClientOriginalName());

        $image2 = $request->file('image2');
        if ($image2) {
            $image2->move(public_path('uploads'), $image2->getClientOriginalName());
        }

        $image3 = $request->file('image3');
        if ($image3) {
            $image3->move(public_path('uploads'), $image3->getClientOriginalName());
        }

        // Create a new Service instance
        $service = new Service;
        // $service->heading_one = $request->heading_one;
        // $service->desc_one = $request->desc_one;
        // $service->heading_two = $request->heading_two;
        // $service->desc_two_one = $request->desc_two_one;
        // $service->desc_two_two = $request->desc_two_two;
        // $service->desc_two_three = $request->desc_two_three;
        // $service->desc_two_four = $request->desc_two_four;
        // $service->desc_two_five = $request->desc_two_five;
        // $service->desc_two_six = $request->desc_two_six;
        // $service->extra = $request->extra;
        // $service->category_id = $request->category_id;
        // $service->status = $request->status;
        // $service->name = $request->name;
        // $service->slug = $slug;

        $service->heading_one = $request->filled('heading_one') ? $request->heading_one : null;
        $service->desc_one = $request->filled('desc_one') ? $request->desc_one : null;
        $service->heading_two = $request->filled('heading_two') ? $request->heading_two : null;
        $service->desc_two_one = $request->filled('desc_two_one') ? $request->desc_two_one : null;
        $service->desc_two_two = $request->filled('desc_two_two') ? $request->desc_two_two : null;
        $service->desc_two_three = $request->filled('desc_two_three') ? $request->desc_two_three : null;
        $service->desc_two_four = $request->filled('desc_two_four') ? $request->desc_two_four : null;
        $service->desc_two_five = $request->filled('desc_two_five') ? $request->desc_two_five : null;
        $service->desc_two_six = $request->filled('desc_two_six') ? $request->desc_two_six : null;
        $service->extra = $request->filled('extra') ? $request->extra : null;
        $service->category_id = $request->filled('category_id') ? $request->category_id : null;
        $service->status = $request->filled('status') ? $request->status : null;
        $service->slug = $slug;
        $service->name = $request->filled('name') ? $request->name : null;

        $service->banner_image = '/uploads/' . $bannerImage->getClientOriginalName();
        if ($image2) {
            $service->image2 = '/uploads/' . $image2->getClientOriginalName();
        }
        if ($image3) {
            $service->image3 = '/uploads/' . $image3->getClientOriginalName();
        }

        // Save the service
        $service->save();

        // Redirect back with success message
        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $categories = ServiceCategory::get();
        $service = Service::find($id);
        return view('dashboard.admin.services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'heading_one' => 'required|string|max:255',
            'desc_one' => 'required|string',
            'heading_two' => 'nullable|string|max:255',
            'desc_two_one' => 'nullable|string',
            'desc_two_two' => 'nullable|string',
            'desc_two_three' => 'nullable|string',
            'desc_two_four' => 'nullable|string',
            'desc_two_five' => 'nullable|string',
            'desc_two_six' => 'nullable|string',
            'extra' => 'nullable|string',
            'status' => 'required|boolean',
            'category_id' => 'required',
            'name' => 'required',
        ]);

        $slug = Str::slug($request->heading_one, '-');

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the service by id
        $service = Service::findOrFail($id);

        // Update the service attributes
        $service->heading_one = $request->filled('heading_one') ? $request->heading_one : null;
        $service->desc_one = $request->filled('desc_one') ? $request->desc_one : null;
        $service->heading_two = $request->filled('heading_two') ? $request->heading_two : null;
        $service->desc_two_one = $request->filled('desc_two_one') ? $request->desc_two_one : null;
        $service->desc_two_two = $request->filled('desc_two_two') ? $request->desc_two_two : null;
        $service->desc_two_three = $request->filled('desc_two_three') ? $request->desc_two_three : null;
        $service->desc_two_four = $request->filled('desc_two_four') ? $request->desc_two_four : null;
        $service->desc_two_five = $request->filled('desc_two_five') ? $request->desc_two_five : null;
        $service->desc_two_six = $request->filled('desc_two_six') ? $request->desc_two_six : null;
        $service->extra = $request->filled('extra') ? $request->extra : null;
        $service->category_id = $request->filled('category_id') ? $request->category_id : null;
        $service->status = $request->filled('status') ? $request->status : null;
        $service->slug = $slug;
        $service->name = $request->filled('name') ? $request->name : null;

        // Handle banner image update if provided
        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImage->move(public_path('uploads'), $bannerImage->getClientOriginalName());
            $service->banner_image = '/uploads/' . $bannerImage->getClientOriginalName();
        }

        // Handle image2 update if provided
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2->move(public_path('uploads'), $image2->getClientOriginalName());
            $service->image2 = '/uploads/' . $image2->getClientOriginalName();
        }

        // Handle image3 update if provided
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $image3->move(public_path('uploads'), $image3->getClientOriginalName());
            $service->image3 = '/uploads/' . $image3->getClientOriginalName();
        }

        // Save the updated service
        $service->save();

        // Redirect back with success message
        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Service::findOrFail($id);
        $blog->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
