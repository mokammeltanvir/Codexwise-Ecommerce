@extends('backend.layouts.master')

@section('title')
    Blog Create
@endsection

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('admin_content')
    <div class="row">
        <h1>Blogs Create Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('blog.index') }}" class="btn btn-primary">
                    <i class="fas fa-backward"></i>
                    Back to Blogs
                </a>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" name="title"
                                class="form-control @error('title')
                            is-invalid
                        @enderror"
                                placeholder="Blog Title" id="">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Client Testimonial</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=""
                                cols="30" rows="5"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="blog_image" class="form-label">Client Image</label>
                            <input type="file" class="form-control dropify" name="blog_image" id="">
                            @error('blog_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" name="is_active" type="checkbox" role="switch"
                                id="activeStatus" checked>
                            <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                            @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endpush
