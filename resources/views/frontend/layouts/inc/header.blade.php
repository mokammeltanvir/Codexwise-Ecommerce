<header>
    <div class="header__area white-bg" id="header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/frontend') }}/img/logo/logo.png" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 d-none d-lg-block">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop.page') }}">Shop</a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-8 col-6">
                    <div class="header__action d-flex align-items-center justify-content-end">
                        @auth
                            <div class="header__login d-none d-sm-block">
                                <a href="javascript:void(0)"><i class="far fa-unlock"></i> My Account</a>
                            </div>
                            <div class="header__login d-none d-sm-block">
                                <a href="{{ route('customer.logout') }}"><i class="far fa-lock"></i> Logout</a>
                            </div>
                        @endauth

                        @guest
                            <div class="header__login d-none d-sm-block">
                                <a href="{{ route('login.page') }}"><i class="far fa-unlock"></i> Login</a>
                            </div>
                            <div class="header__login d-none d-sm-block">
                                <a href="{{ route('register.page') }}"><i class="far fa-lock"></i> Register</a>
                            </div>
                        @endguest
                        <div class="header__cart d-none d-sm-block">
                            <a href="{{ route('cart.page') }}" class="">
                                <i class="far fa-shopping-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
                        <div class="sidebar__menu d-lg-none">
                            <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
