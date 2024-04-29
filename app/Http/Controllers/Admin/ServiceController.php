<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('dashboard.admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.admin.services.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'heading_one' => 'required|string|max:255',
            'desc_one' => 'required|string',
            'heading_two' => 'required|string|max:255',
            'desc_two_one' => 'required|string',
            'desc_two_two' => 'required|string',
            'desc_two_three' => 'required|string',
            'desc_two_four' => 'required|string',
            'desc_two_five' => 'required|string',
            'desc_two_six' => 'required|string',
            'extra' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

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
        $service->heading_one = $request->heading_one;
        $service->desc_one = $request->desc_one;
        $service->heading_two = $request->heading_two;
        $service->desc_two_one = $request->desc_two_one;
        $service->desc_two_two = $request->desc_two_two;
        $service->desc_two_three = $request->desc_two_three;
        $service->desc_two_four = $request->desc_two_four;
        $service->desc_two_five = $request->desc_two_five;
        $service->desc_two_six = $request->desc_two_six;
        $service->extra = $request->extra;
        $service->status = $request->status;
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
        $service = Service::find($id);
        return view('dashboard.admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Service::findOrFail($id);
        $blog->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
