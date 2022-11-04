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
                                            <div class="cart-plus-minus"><input type="text" value="{{ $cartitem->qty }}">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span
                                                class="amount">${{ $cartitem->price * $cartitem->qty }}</span></td>
                                        <td class="product-remove"><a
                                                href="{{ route('remove-from.cart', ['cart_id' => $cartitem->rowId]) }}"><i
                                                    class="fa fa-times"></i></a>
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
                                    <form action="{{ route('customer.couponapply') }}" method="post">
                                        @csrf
                                        <input id="coupon_code" type="text" name="coupon_name" placeholder="Coupon Code"
                                            placeholder="Coupon code" type="text">
                                        <button class="btn btn-primary btn-lg" name="apply_coupon" type="submit">Apply
                                            coupon</button>
                                    </form>
                                </div>
                                <div class="coupon2">
                                    <a href="{{ route('shop.page') }}" class="btn btn-warning btn-lg">Continue
                                        Shopping</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-5">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <p>
                                    @if (Session::has('coupon'))
                                        <a class="p-1" href="{{ route('customer.couponremove', 'coupon_name') }}">
                                            <i class="fa fa-times">
                                            </i></a>

                                        <b> {{ Session::get('coupon')['name'] }} </b> is Applied
                                    @endif
                                </p>
                                <ul class="mb-20">
                                    @if (Session::has('coupon'))
                                        <li>Discount Amount: <span> ${{ Session::get('coupon')['discount_amount'] }}
                                            </span>
                                        </li>
                                        <li>Total: <span>${{ Session::get('coupon')['balance'] }} </span>
                                            <del class="text-danger">$
                                                {{ Session::get('coupon')['cart_total'] }}</del>
                                        </li>
                                    @else
                                        <li>Subtotal: <span>${{ $total_price }}</span></li>
                                        <li>Total: <span>${{ $total_price }}</span></li>
                                    @endif
                                </ul>
                                <a class="btn btn-success btn-lg" href="checkout.html">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- cart-area-end -->

    <!-- subscribe area start -->
    @include('frontend.pages.widgets.subscribe')
    <!-- subscribe area end -->
@endsection
