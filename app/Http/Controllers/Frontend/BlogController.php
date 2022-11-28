<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blogPage()
    {
        $blogs = Blog::latest('id')->select(['id', 'title', 'slug', 'description', 'blog_image', 'updated_at'])->paginate(6);

        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::whereSlug($slug)
            ->select(['id', 'title', 'slug', 'description', 'blog_image', 'updated_at'])
            ->firstOrFail();

        return view('frontend.pages.blog-details', compact('blog'));
    }
}
