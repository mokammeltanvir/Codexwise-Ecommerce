<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest('id')->select(['id', 'title', 'slug', 'description', 'blog_image', 'updated_at'])->paginate(10);

        return view('backend.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogStoreRequest $request)
    {
        // dd($request->all());
        $blog = Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,

        ]);

        $this->image_upload($request, $blog->id);

        Toastr::success('Data Stored Successfully!');
        return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('backend.pages.blog.edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'is_active' => $request->filled('is_active'),
        ]);

        $this->image_upload($request, $blog->id);

        Toastr::success('Data Updated Successfully!');
        return redirect()->route('blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if ($blog->blog_image) {
            $photo_location = 'uploads/blog_photos/' . $blog->blog_image;
            unlink($photo_location);
        }

        $blog->delete();

        Toastr::success('Data Deleted Successfully!');
        return redirect()->route('blog.index');

    }

    // Image upload
    public function image_upload($request, $item_id)
    {
        $blog = Blog::findorFail($item_id);
        if ($request->hasFile('blog_image')) {
            if ($blog->blog_image != 'blog_image.jpg') {
                //delete old photo
                $photo_location = 'public/uploads/blog_photos/';
                $old_photo_location = $photo_location . $blog->blog_image;
                unlink(base_path($old_photo_location));
            }
            $photo_location = 'public/uploads/blog_photos/';
            $uploaded_photo = $request->file('blog_image');
            $new_photo_name = $blog->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_location . $new_photo_name;
            Image::make($uploaded_photo)->resize(770, 400)->save(base_path($new_photo_location), 40);
            $check = $blog->update([
                'blog_image' => $new_photo_name,
            ]);
        }
    }
}
