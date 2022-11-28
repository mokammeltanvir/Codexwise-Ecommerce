@extends('frontend.layouts.master')

@section('frontendTitle')
    Home
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
                        <div class="postbox__meta d-flex">
                            <div class="postbox__tag-2">
                                <a href="#">Digital,</a>
                                <a href="#">Marketing. </a>
                            </div>
                            <div class="postbox__time">
                                <span>4 min read</span>
                            </div>
                        </div>
                        <h2 class="page__title">{{ $blog->title }}</h2>
                        <div class="postbox__author-2 mt-20">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <div class="postbox__author-thumb-2">
                                        <img src="{{ asset('assets/frontend') }}/img/blog/author/blog-author-4.jpg"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <h6><a href="#">Justin Case</a></h6>
                                    <span><a href="#">View Profile</a></span>
                                </li>
                                <li>
                                    <h6>{{ $blog->updated_at->format('d M Y') }} </h6>
                                    <span>Published</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- postbox area start -->
    <section class="postbox__area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox__wrapper">

                        <div class="postbox__thumb postbox__thumb-2 fix w-img mb-30">
                            <a href="#"><img src="{{ asset('uploads/blog_photos') }}/{{ $blog->blog_image }}"
                                    alt=""></a>
                        </div>
                        <div class="postbox__details mb-30">
                            <h4>{{ $blog->title }}</h4>
                            <p>{{ $blog->description }}</p>
                        </div>

                        <div class="postbox__tag postbox__tag-3 d-sm-flex mb-25">
                            <h5>Tagged with:</h5>
                            <a href="#">Business</a>
                            <a href="#">Landing</a>
                            <a href="#">Design</a>
                            <a href="#">UI/UX</a>
                        </div>
                        <div class="postbox__share m-social mb-80">
                            <h5>The share</h5>
                            <ul>
                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="link"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="blog__sidebar-wrapper  ml-30">
                        <div class="blog__sidebar mb-30">
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__search-wrapper">
                                        <form action="#">
                                            <input type="text" placeholder="Search ...">
                                            <button type="submit"><i class="fal fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-title">
                                    <h3>Recent News</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="rc__post-wrapper">
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-15">
                                                <a href="blog-details.html"><img
                                                        src="{{ asset('assets/frontend') }}/img/blog/sm/blog-sm-1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>October 15, 2021</span>
                                                </div>
                                                <h6 class="rc__title"><a href="blog-details.html">Communication Between
                                                        Departments</a></h6>
                                            </div>
                                        </div>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-15">
                                                <a href="blog-details.html"><img
                                                        src="{{ asset('assets/frontend') }}/img/blog/sm/blog-sm-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>March 26, 2021</span>
                                                </div>
                                                <h6 class="rc__title"><a href="blog-details.html">How to build outside
                                                        links for your shop SEO</a></h6>
                                            </div>
                                        </div>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-15">
                                                <a href="blog-details.html"><img
                                                        src="{{ asset('assets/frontend') }}/img/blog/sm/blog-sm-3.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>October 15, 2021</span>
                                                </div>
                                                <h6 class="rc__title"><a href="blog-details.html">20 creative content
                                                        ideas to post on Instagram</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__catagory">
                                        <ul>
                                            <li><a href="blog.html">Web Design (6)</a></li>
                                            <li><a href="blog.html"> Web Development (14)</a></li>
                                            <li><a href="blog.html">Graphics (12)</a></li>
                                            <li><a href="blog.html">IOS/Android Design (10)</a></li>
                                            <li><a href="blog.html">App & Saas (4)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <div class="sidebar__widget-title">
                                    <h3>Popular Tags</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="tags">
                                        <a href="#">Business</a>
                                        <a href="#">Landing</a>
                                        <a href="#">Design</a>
                                        <a href="#">Digital</a>
                                        <a href="#">Technology</a>
                                        <a href="#">UI/UX</a>
                                        <a href="#">Features</a>
                                        <a href="#">Pix Saas Blog</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- postbox area end -->
@endsection
