@extends('frontend.layouts.master')

@section('frontendTitle')
    Shop
@endsection
@section('frontend_content')
    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="{{ asset('assets/frontend') }}/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- product area start -->
    <section class="product__area po-rel-z1 pt-100 pb-115 grey-bg">
        <div class="container">
            <div class="row">

                <!--Shoppage sidebar area start -->
                <div class="col-xxl-4 col-xl-4 col-lg-4 order-lg-first order-last">
                    <div class="product__sidebar mr-30">
                        <div class="product__sidebar-widget  white-bg mb-30">
                            <div class="sidebar__widget mb-20">
                                <form action="#">
                                    <div class="sidebar__widget-head d-flex align-items-center justify-content-between">
                                        <h4 class="sidebar__widget-title">Category</h4>
                                        <button type="submit" class="sidebar__clear-btn"><i
                                                class="fal fa-repeat"></i>Clear</button>
                                    </div>
                                    <div class="sidebar__widget-content">
                                        <div class="sidebar__check-wrapper">
                                            <ul>
                                                @foreach ($categories as $category)
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <a href="{{ $category->slug }}">
                                                                <label class="m-check-label"
                                                                    for="m-wp">{{ $category->title }}</label>
                                                            </a>
                                                        </div>
                                                        <span>76</span>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Tags sidebar-->
                            <div class="sidebar__widget">
                                <form action="#">
                                    <div class="sidebar__widget-head d-flex align-items-center justify-content-between">
                                        <h4 class="sidebar__widget-title">Tags</h4>
                                        <button type="submit" class="sidebar__clear-btn"><i
                                                class="fal fa-repeat"></i>Clear</button>
                                    </div>
                                    <div class="sidebar__widget-content">
                                        <div class="sidebar__check-wrapper sidebar__tag">
                                            <ul>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <div class="sidebar__check d-flex align-items-center">
                                                        <input class="m-check-input" type="checkbox" id="m-marketplace">
                                                        <label class="m-check-label" for="m-marketplace">Marketplace</label>
                                                    </div>
                                                    <span>28</span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Tags sidebar end-->
                        </div>
                    </div>
                </div>
                <!--Shoppage Sidebar end-->


                <!--Shoppage content area start -->
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="row">
                        @foreach ($category->products as $cproduct)
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="product__thumb">
                                        <div class="product__thumb-inner fix w-img">
                                            <a
                                                href="{{ route('productdetail.page', ['product_slug' => $cproduct->slug]) }}">
                                                <img src="{{ asset('uploads/product_photos') }}/{{ $cproduct->product_image }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product__thumb-btn transition-3">
                                            <a href="{{ route('productdetail.page', ['product_slug' => $product->slug]) }}"
                                                class="m-btn m-btn-6 mb-15">
                                                Buy Now
                                            </a>
                                            <a href="{{ route('productdetail.page', ['product_slug' => $cproduct->slug]) }}"
                                                target="_blank" class="m-btn m-btn-7">
                                                Preview Project
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                            <div class="product__tag">
                                                <a href="#">Business</a>
                                            </div>
                                            <div class="product__price">
                                                <span>${{ $cproduct->product_price }}</span>
                                            </div>
                                        </div>
                                        <h3 class="product__title">
                                            <a
                                                href="{{ route('productdetail.page', ['product_slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </h3>
                                        <p class="product__author">by <a href="#">Theme Pure</a> in <a
                                                href="#">Templates</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- pagination area start -->
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="basic-pagination wow fadeInUp text-center mt-20" data-wow-delay=".2s">
                                <ul>
                                    <li>
                                        {{ $cproduct->links() }}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- pagination area end -->


                </div>
                <!--Shoppage content area end -->


            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- subscribe area start -->
    @include('frontend.pages.widgets.subscribe')
    <!-- subscribe area end -->
@endsection
