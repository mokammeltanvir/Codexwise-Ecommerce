    <section class="cta__area pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section__title-wrapper text-center mb-45">
                        <h2 class="section__title wow fadeInUp" data-wow-delay=".3s">
                            What Our Clients <span>Says</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Thousands of Markit Brands have made the swich.Text marketing
                            with the customer in mind!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="testimonial__area pt-50 pb-115 fix">
        <div class="container">
            <div class="testimonial__inner p-relative pb-110">
                <div class="testimonial__bg p-absolute">
                    <img src="{{ asset('assets/frontend') }}/img/bg/testimonial-bg.png" alt="" />
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="testimonial__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">

                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial__item white-bg">
                                    <div class="testimonial__person d-flex mb-20">
                                        <div class="testimonial__avater">
                                            <img src="{{ asset('uploads/testimonials') }}/{{ $testimonial->client_image }}"
                                                alt="" />
                                        </div>
                                        <div class="testimonial__info ml-15">
                                            <h5>{{ $testimonial->client_name }}</h5>
                                            <span>{{ $testimonial->client_designation }}</span>
                                        </div>
                                    </div>
                                    <div class="testimonial__text">
                                        <p>
                                            {{ $testimonial->client_testimonial }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->
