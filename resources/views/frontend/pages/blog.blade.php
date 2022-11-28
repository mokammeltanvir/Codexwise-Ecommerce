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
                        <h2 class="page__title">Latest From The Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
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
                        @foreach ($blogs as $blog)
                            <article class="postbox__item format-image fix mb-50 wow fadeInUp" data-wow-delay=".2s">
                                <div class="postbox__thumb">
                                    <a href="{{ route('blogdetail.page', ['slug' => $blog->slug]) }}" class="w-img">
                                        <img src="{{ asset('uploads/blog_photos') }}/{{ $blog->blog_image }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="postbox__content">
                                    <div class="postbox__meta d-flex mb-10">
                                        <div class="postbox__tag mr-20">
                                            <a href="#">marketing</a>
                                        </div>
                                        <div class="postbox__date">
                                            <span><i class="fal fa-clock"></i>
                                                {{ $blog->updated_at->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                    <h3 class="postbox__title mb-15">
                                        <a
                                            href="{{ route('blogdetail.page', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <div class="postbox__text mb-20">
                                        <p>{{ $blog->description }}
                                        </p>
                                    </div>
                                    <div class="postbox__author d-flex align-items-center">
                                        <div class="postbox__author-thumb mr-15">
                                            <img src="{{ asset('assets/frontend') }}/img/blog/author/blog-author-1.jpg"
                                                alt="">
                                        </div>
                                        <h5>Post by <a href="#">Justin Case</a> </h5>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div class="basic-pagination wow fadeInUp text-center" data-wow-delay=".2s">
                            <ul>
                                <li>
                                    {{ $blogs->links() }}
                                </li>
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
