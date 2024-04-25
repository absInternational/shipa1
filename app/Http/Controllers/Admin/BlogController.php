<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_name' => 'required|string|max:255',
            'slug_name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'post_short_description' => 'nullable|string',
            'post_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|string|max:255',
            'meta_keyword' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_images'), $imageName);
            $validatedData['post_image'] = 'blog_images/' . $imageName;
        }

        $validatedData['user_id'] = auth()->id();

        Blog::create($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validatedData = $request->validate([
            'post_name' => 'required|string|max:255',
            'slug_name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'post_short_description' => 'nullable|string',
            'post_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|string|max:255',
            'meta_keyword' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_images'), $imageName);
            $validatedData['post_image'] = 'blog_images/' . $imageName;
        }

        $blog->update($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
