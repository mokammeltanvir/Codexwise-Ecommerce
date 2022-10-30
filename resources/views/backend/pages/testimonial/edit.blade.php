@extends('backend.layouts.master')

@section('title')
    Testimonial Edit | Admin Panel
@endsection

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('admin_content')
    <div class="row">
        <h1>Testimonial Edit Form</h1>
        <div class="col-12">
            <div class="d-flex justify-content-start">
                <a href="{{ route('testimonial.index') }}" class="btn btn-primary">
                    <i class="fas fa-backward"></i>
                    Back to Testimonials
                </a>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimonial.update', $testimonial->client_name_slug) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="client-name" class="form-label">Client Name</label>
                            <input type="text" name="client_name" value="{{ $testimonial->client_name }}"
                                class="form-control @error('client_name')
                            is-invalid
                        @enderror"
                                placeholder="enter client name" id="">
                            @error('client_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client-designation" class="form-label">Client Designation</label>
                            <input type="text" name="client_designation" value="{{ $testimonial->client_designation }}"
                                class="form-control @error('client_designation')
                            is-invalid
                        @enderror"
                                placeholder="enter client designation" id="">
                            @error('client_designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client-message" class="form-label">Client message</label>
                            <textarea name="client_testimonial" class="form-control @error('client_testimonial') is-invalid @enderror"
                                id="" cols="30" rows="5">{{ $testimonial->client_testimonial }}</textarea>
                            @error('client_testimonial')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client-image" class="form-label">Client Image</label>
                            <input type="file" class="form-control dropify" name="client_image" id=""
                                data-default-file="{{ asset('uploads/testimonials') }}/{{ $testimonial->client_image }}">
                            @error('client_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" name="is_active" type="checkbox" role="switch"
                                id="activeStatus" @if ($testimonial->is_active) checked @endif>
                            <label class="form-check-label" for="activeStatus">Active or Inactive</label>
                            @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-warning">Update</button>
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
