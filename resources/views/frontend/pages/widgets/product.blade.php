<!-- product area start -->
<section class="product__area pt-105 pb-110 grey-bg-2">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section__title-wrapper text-center mb-60">
                    <h2 class="section__title">Latest <br> Premium Products</h2>
                    <p>From multipurpose themes to niche templates</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="product__thumb">
                            <div class="product__thumb-inner fix w-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('uploads/product_photos') }}/{{ $product->product_image }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="product__thumb-btn transition-3">
                                <a href="#" class="m-btn m-btn-6 mb-15">
                                    Buy Now
                                </a>
                                <a href="#" target="_blank" class="m-btn m-btn-7">
                                    Preview Project
                                </a>
                            </div>
                        </div>
                        <div class="product__content">
                            <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                <div class="product__tag">
                                    <a href="#">Category</a>
                                </div>
                                <div class="product__price">
                                    <span>${{ $product->product_price }}</span>
                                </div>
                            </div>
                            <h3 class="product__title">
                                <a href="#">{{ $product->name }}</a>
                            </h3>
                            <p class="product__author">by <a href="#">Theme Pure</a> in <a
                                    href="#">Templates</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-xxl-12">
                <div class="product__more text-center mt-30">
                    <a href="product.html" class="m-btn m-btn-2"> <span></span> Explore Premium</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product area end -->
