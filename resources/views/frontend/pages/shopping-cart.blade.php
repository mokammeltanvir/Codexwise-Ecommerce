@extends('frontend.layouts.master')

@section('frontendTitle')
    Cart Page
@endsection

@section('frontend_content')
    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="{{ asset('assets/frontend') }}/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- cart-area-start -->
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cartitem)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img
                                                        src="{{ asset('uploads/product_photos') }}/{{ $cartitem->options->product_image }}"
                                                        alt="">
                                                </a>
                                            </td>

                                            <td class="product-name"><a href="shop-details.html">{{ $cartitem->name }}</a>
                                            </td>
                                            <td class="product-price"><span class="amount">${{ $cartitem->price }}</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus"><input type="text"
                                                        value="{{ $cartitem->qty }}">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span
                                                    class="amount">${{ $cartitem->price * $cartitem->qty }}</span></td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Coupon code" type="text">
                                        <button class="btn btn-primary btn-lg" name="apply_coupon" type="submit">Apply
                                            coupon</button>
                                        <a href="{{ route('shop.page') }}" class="btn btn-warning btn-lg">Continue
                                            Shopping</a>
                                    </div>
                                    <div class="coupon2">
                                        <button class="btn btn-primary btn-lg" name="update_cart" type="submit">Update
                                            Cart</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-5">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <li>Subtotal <span>${{ $total_price }}</span></li>
                                        <li>Total <span>${{ $total_price }}</span></li>
                                    </ul>
                                    <a class="btn btn-success btn-lg" href="checkout.html">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- cart-area-end -->

    <!-- subscribe area start -->
    @include('frontend.pages.widgets.subscribe')
    <!-- subscribe area end -->
@endsection
