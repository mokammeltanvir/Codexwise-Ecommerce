@extends('frontend.layouts.master')

@section('frontendTitle')
    Home
@endsection

@section('frontend_content')
    <!-- hero area start -->
    @include('frontend.pages.widgets.hero')

    <!-- hero area end -->
    <!-- category area start -->
    @include('frontend.pages.widgets.category')

    <!-- category area end -->

    <!-- trending area start -->
    @include('frontend.pages.widgets.trending')

    <!-- trending area end -->

    <!-- subscribe area start -->
    @include('frontend.pages.widgets.subscribe')
    <!-- subscribe area end -->

    <!-- product area start -->
    @include('frontend.pages.widgets.product')

    <!-- product area end -->

    <!-- testimonial area start -->
    @include('frontend.pages.widgets.testimonial')

    <!-- testimonial area end -->
@endsection
