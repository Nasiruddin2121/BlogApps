<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BlogPost::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ]);

        return BlogPost::create($request->all());
    }

    public function show(BlogPost $blogPost)
    {
        return $blogPost;
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ]);

        $blogPost->update($request->all());
        return $blogPost;
    }

    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return response()->json(['message' => 'Blog post deleted']);
    }
}
