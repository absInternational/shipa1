<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('dashboard.admin.services.index', compact('service'));
    }

    public function create()
    {
        return view('dashboard.admin.services.create');
    }

    public function store(Request $request)
    {
        $service = new Service;

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
