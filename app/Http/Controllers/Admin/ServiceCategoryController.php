<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        return view('dashboard.admin.service_categories.index', compact('serviceCategories'));
    }
    
    public function create()
    {
        return view('dashboard.admin.service_categories.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string|unique:service_categories,slug',
            'status' => 'required|in:active,inactive',
        ]);

        ServiceCategory::create($request->all());

        return redirect()->route('admin.service-categories.index')->with('success', 'Service category created successfully.');
    }
    
    public function edit(ServiceCategory $serviceCategory)
    {
        return view('dashboard.admin.service_categories.edit', compact('serviceCategory'));
    }
    
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string|unique:service_categories,slug,'.$serviceCategory->id,
            'status' => 'required|in:active,inactive',
        ]);

        $serviceCategory->update($request->all());

        return redirect()->route('admin.service-categories.index')->with('success', 'Service category updated successfully.');
    }
    
    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();

        return redirect()->route('admin.service-categories.index')->with('success', 'Service category deleted successfully.');
    }
}
