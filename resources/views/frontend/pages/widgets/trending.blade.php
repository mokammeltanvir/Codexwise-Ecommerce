        <section class="trending__area pt-110 pb-110 grey-bg">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg col-md-8">
                        <div class="section__title-wrapper mb-50">
                            <h2 class="section__title">
                                Trending <br />
                                Products
                            </h2>
                            <p>Jeffrey pardon me jolly good.</p>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg col-md-4">
                        <div class="trending__more d-flex justify-content-md-end mb-50">
                            <a href="{{ route('shop.page') }}" class="m-btn m-btn-border"><span></span>Explore
                                Cloneables</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($trending_products as $trending_product)
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                            <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <div class="trending__thumb mr-25">
                                    <div class="trending__thumb-inner fix">
                                        <a href="#">
                                            <img src="{{ asset('assets/frontend') }}/img/trending/tren-1.jpg"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="trending__content">
                                    <h3 class="trending__title">
                                        <a
                                            href="{{ route('productdetail.page', ['product_slug' => $trending_product->slug]) }}">{{ $trending_product->name }}</a>
                                    </h3>
                                    <p>{{ $trending_product->short_description }}</p>
                                    <div class="trending__meta d-flex justify-content-between">
                                        <div class="trending__tag">
                                            <a href="#">Category</a>
                                        </div>
                                        <div class="trending__price">
                                            <span>${{ $trending_product->product_price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
