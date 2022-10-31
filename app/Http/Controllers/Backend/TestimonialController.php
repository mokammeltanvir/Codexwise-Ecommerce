<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialStoreRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Models\Testimonial;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest('id')->select(['id', 'client_name', 'client_name_slug', 'client_designation', 'client_testimonial', 'client_image', 'updated_at'])->paginate(10);
        return view('backend.pages.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialStoreRequest $request)
    {
        $testimonial = Testimonial::create(
            [
                'client_name' => $request->client_name,
                'client_name_slug' => Str::slug($request->client_name),
                'client_designation' => $request->client_designation,
                'client_testimonial' => $request->client_testimonial,
            ]
        );
        $this->image_upload($request, $testimonial->id);

        Toastr::success('Testimonial Added Successfully', 'Success');
        return redirect()->route('testimonial.index');
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
        $testimonial = Testimonial::where('client_name_slug', $slug)->first();
        return view('backend.pages.testimonial.edit', compact('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialUpdateRequest $request, $slug)
    {
        $testimonial = Testimonial::where('client_name_slug', $slug)->first();
        $testimonial->update([
            'client_name' => $request->client_name,
            'client_name_slug' => Str::slug($request->client_name),
            'client_designation' => $request->client_designation,
            'client_testimonial' => $request->client_testimonial,
            'is_active' => $request->filled('is_active'),
        ]);

        $this->image_upload($request, $testimonial->id);

        Toastr::success('Data Updated Successfully!!');
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $testimonial = Testimonial::where('client_name_slug', $slug)->first();

        if ($testimonial->client_image) {
            $photo_location = 'uploads/testimonials/' . $testimonial->client_image;
            unlink($photo_location);
        }

        $testimonial->delete();

        Toastr::success('Data Deleted Successfully!!');
        return redirect()->route('testimonial.index');

    }
    // Image Upload
    public function image_upload($request, $item_id)
    {

        $testimonial = Testimonial::findorFail($item_id);
        if ($request->hasFile('client_image')) {
            if ($testimonial->client_image != 'default-client.jpg') {
                //delete old photo
                $photo_location = 'public/uploads/testimonials/';
                $old_photo_location = $photo_location . $testimonial->client_image;
                unlink(base_path($old_photo_location));
            }
            $photo_location = 'public/uploads/testimonials/';
            $uploaded_photo = $request->file('client_image');
            $new_photo_name = $testimonial->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_location . $new_photo_name;
            Image::make($uploaded_photo)->resize(105, 105)->save(base_path($new_photo_location), 40);
            //$user = User::find($category->id);
            $check = $testimonial->update([
                'client_image' => $new_photo_name,
            ]);
        }
    }
}
