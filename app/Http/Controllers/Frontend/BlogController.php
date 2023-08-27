<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 1)->with('photos')->paginate(9);
        return view('frontend.blog.index', get_defined_vars());
    }

    public function show($slug)
    {
        $blog = Blog::where('status', 1)->where('slug', $slug)->first();
        if (!$blog) {
            abort(404);
        }
        return view('frontend.blog.show', get_defined_vars());
    }
}
