@extends('frontend.layouts.master')

@section('frontendTitle')
    Product Details
@endsection
@section('frontend_content')
    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="{{ asset('assets/frontend') }}/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- page title area -->
    <section class="page__title-area  pt-85">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-content mb-50">
                        <h2 class="page__title">{{ $product->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('shop.page') }}">Product</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Current</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- product area start -->
    <section class="product__area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="product__wrapper">

                        <div class="product__details-thumb w-img mb-30">
                            <img src="{{ asset('uploads/product_photos') }}/{{ $product->product_image }}"
                                alt="product-details">
                        </div>
                        <!-- Multiple Images -->

                        <div class="row">
                            @foreach ($product->productImages as $image)
                                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 mb-10">

                                    <div class="view overlay zoom" data-ripple-color="light">
                                        <img src="{{ asset('uploads/product_photos') }}/{{ $image->product_multiple_image }}"
                                            class="img-fluid" />

                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- Multiple Images -->


                        <div class="product__details-content">
                        </div>
                        <div class="product__details-content">
                            <div class="product__tab mb-40">
                                <ul class="nav nav-tabs" id="proTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                            data-bs-target="#overview" type="button" role="tab"
                                            aria-controls="overview" aria-selected="true">Overview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="support-tab" data-bs-toggle="tab"
                                            data-bs-target="#support" type="button" role="tab" aria-controls="support"
                                            aria-selected="false">Support</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__tab-content">
                                <div class="tab-content" id="proTabContent">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview-tab">
                                        <div class="product__overview">
                                            <h3 class="product__overview-title">{{ $product->name }}</h3>
                                            <p>{{ $product->long_description }}</p>



                                            <div class="product__social m-social grey-bg-2">
                                                <h4 class="product__social-title">Follow us</h4>
                                                <ul>
                                                    <li><a href="#" class="fb"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" class="pin"><i
                                                                class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#" class="link"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
                                        <div class="product__support">
                                            <div class="latest-comments mb-55">
                                                <ul>
                                                    <li>
                                                        <div class="comments-box grey-bg-2">
                                                            <div class="comments-info d-flex">
                                                                <div class="comments-avatar mr-15">
                                                                    <img src="{{ asset('assets/frontend') }}/img/product/support/sup-1.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="avatar-name">
                                                                    <h5>Jason Response</h5>
                                                                    <span class="post-meta">Author</span>
                                                                </div>
                                                            </div>
                                                            <div class="comments-text ml-65">
                                                                <p>Harry codswalp boot porkies up the duff morish cor
                                                                    blimey guvnor fa about blower twit Why it's your
                                                                    round matie.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="children">
                                                        <div class="comments-box grey-bg-2">
                                                            <div class="comments-info d-flex">
                                                                <div class="comments-avatar mr-15">
                                                                    <img src="{{ asset('assets/frontend') }}/img/product/support/sup-2.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="avatar-name">
                                                                    <h5>Hilary Ouse</h5>
                                                                    <span class="post-meta">Author</span>
                                                                </div>
                                                            </div>
                                                            <div class="comments-text ml-65">
                                                                <p>I don't want no agro dropped a clanger do one wind.!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="post-comment-form wow fadeInUp" data-wow-delay=".2s">
                                                <h4 class="post-comment-title mb-25">Add a comment</h4>
                                                <form action="#">
                                                    <div class="post-comment-inner">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="post-input d-sm-flex align-items-center mb-10">
                                                                    <textarea placeholder="Comment for the author..."></textarea>
                                                                    <button type="submit" class="m-btn m-btn-4">
                                                                        <span></span> Post Comment</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="post-agree d-flex align-items-center">
                                                                    <input class="m-check-input" type="checkbox"
                                                                        id="m-agree">
                                                                    <label class="m-check-label" for="m-agree">Email
                                                                        me when this comment receives a reply</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product tab end -->

                </div>



                <!-- Right Sidebar -->
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="product__details-sidebar ml-30">
                        <div class="product__proprietor white-bg mb-30">
                            <div class="product__proprietor-head mb-25">
                                <div class="product__prorietor-info mb-20 d-flex justify-content-between">
                                    <div class="product__proprietor-avater d-flex align-items-center">
                                        <div class="product__proprietor-thumb">
                                            <img src="{{ asset('uploads/product_photos') }}/{{ $product->product_image }}"
                                                alt="">
                                        </div>
                                        <div class="product__proprietor-name">
                                            <h5><a href="#">Product Price:</a></h5>
                                        </div>
                                    </div>
                                    <div class="product__proprietor-price">
                                        <span
                                            class="d-flex align-items-start"><span>$</span>{{ $product->product_price }}</span>
                                    </div>
                                </div>
                                <div class="product__proprietor-text">
                                    <p>{{ $product->short_description }}</p>
                                </div>
                            </div>
                            <div class="product__proprietor-body fix">

                                <ul class="rating mb-10 fix">
                                </ul>
                                <ul class="input-style">
                                    <form action="{{ route('add-to.cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_slug" value="{{ $product->slug }}">
                                        <li class="quantity cart-plus-minus">
                                            <input type="number" value="1" name="order_qty" />
                                        </li>

                                        <button type="submit" class="m-btn m-btn-2 w-100 mb-20 mt-10">Add to
                                            Cart</button>

                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar -->



            </div>
        </div>
    </section>
    <!-- product area end -->


    <!-- subscribe area start -->
    @include('frontend.pages.widgets.subscribe')
    <!-- subscribe area end -->
@endsection
