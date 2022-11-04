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
                    @php
                        $carts = \Gloudemans\Shoppingcart\Facades\Cart::content();
                        $total_price = \Gloudemans\Shoppingcart\Facades\Cart::subtotal();
                    @endphp
                    @foreach ($carts as $item)
                        <li>
                            <div class="cartmini__thumb">
                                <a href="product-details.html">
                                    <img src="{{ asset('uploads/product_photos') }}/{{ $item->options->product_image }}"
                                        alt="" />
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5>
                                    <a href="product-details.html">Findup - Directory & Listing</a>
                                </h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="{{ $item->qty }}" />
                                    <span class="cart-plus">+</span>
                                </div>
                                <div class="product__sm-price-wrapper">
                                    <span>{{ $item->qty }} <i class="fal fa-times"></i></span>
                                    <span class="product__sm-price">${{ $item->price }}</span>
                                </div>
                            </div>
                            <a href="{{ route('remove-from.cart', ['cart_id' => $item->rowId]) }}"
                                class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    <h4>Subtotal:</h4>
                    <span>${{ $total_price }}</span>
                </div>
                <div class="cartmini__checkout-btn">
                    <a href="{{ route('cart.page') }}" class="m-btn m-btn-border mb-10 w-100">
                        <span></span> view cart</a>
                    <a href="{{ route('customer.checkoutpage') }}" class="m-btn m-btn-3 w-100">
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
                    <img src="{{ asset('assets/frontend') }}/img/logo/logo-white.png" alt="logo" />
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
