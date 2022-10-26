<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Markit - @yield('frontendTitle')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
    <!-- CSS here -->
    @include('frontend.layouts.inc.style')
</head>

<body>
    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two" style="left: 20px"></div>
                <div class="object" id="object_three" style="left: 40px"></div>
                <div class="object" id="object_four" style="left: 60px"></div>
                <div class="object" id="object_five" style="left: 80px"></div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    @include('frontend.layouts.inc.header')
    <!-- header area end -->

    <!-- cart mini area start -->
    <div class="cartmini__area">
        <div class="cartmini__wrapper">
            <div class="cartmini__title">
                <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
                <button type="button" class="cartmini__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="cartmini__widget">
                <div class="cartmini__inner">
                    <ul>
                        <li>
                            <div class="cartmini__thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/sm/cart-5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5>
                                    <a href="product-details.html">Findup - Directory & Listing</a>
                                </h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
                                    <span class="cart-plus">+</span>
                                </div>
                                <div class="product__sm-price-wrapper">
                                    <span>2 <i class="fal fa-times"></i></span>
                                    <span class="product__sm-price">$24.00</span>
                                </div>
                            </div>
                            <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>
                        <li>
                            <div class="cartmini__thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/sm/cart-2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5>
                                    <a href="product-details.html">TechBuzz - Businesses Agency</a>
                                </h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
                                    <span class="cart-plus">+</span>
                                </div>
                                <div class="product__sm-price-wrapper">
                                    <span>1 <i class="fal fa-times"></i></span>
                                    <span class="product__sm-price">$17.00</span>
                                </div>
                            </div>
                            <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>
                        <li>
                            <div class="cartmini__thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/sm/cart-3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5>
                                    <a href="product-details.html">Zibber - Agency Template</a>
                                </h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1" />
                                    <span class="cart-plus">+</span>
                                </div>
                                <div class="product__sm-price-wrapper">
                                    <span>5 <i class="fal fa-times"></i></span>
                                    <span class="product__sm-price">$72.00</span>
                                </div>
                            </div>
                            <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="cartmini__checkout">
                    <div class="cartmini__checkout-title mb-30">
                        <h4>Subtotal:</h4>
                        <span>$113.00</span>
                    </div>
                    <div class="cartmini__checkout-btn">
                        <a href="cart.html" class="m-btn m-btn-border mb-10 w-100">
                            <span></span> view cart</a>
                        <a href="checkout.html" class="m-btn m-btn-3 w-100">
                            <span></span> checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- cart mini area end -->

    <!-- sidebar area start -->
    <div class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="logo mb-40">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-white.png" alt="logo" />
                    </a>
                </div>
                <div class="mobile-menu"></div>
                <div class="sidebar__action mt-330">
                    <div class="sidebar__login mt-15">
                        <a href="#"><i class="far fa-unlock"></i> Log In</a>
                    </div>
                    <div class="sidebar__cart mt-20">
                        <a href="javascript:void(0);" class="cart-toggle-btn">
                            <i class="far fa-shopping-cart"></i>
                            <span>2</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->

    <main>
        <!-- Home Body Content area start -->
        @yield('frontend_content')


    </main>

    <!-- footer area start -->
    @include('frontend.layouts.inc.footer')
    <!-- footer area end -->

    <!-- JS here -->
    @include('frontend.layouts.inc.script')
</body>

</html>
