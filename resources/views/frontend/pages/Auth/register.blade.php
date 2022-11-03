@extends('frontend.layouts.master')

@section('frontendTitle')
    Register
@endsection
@section('frontend_content')
    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="{{ asset('assets/frontend') }}/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- sign up area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="{{ asset('assets/frontend') }}/img/icon/sign/man-3.png" alt="">
            <img class="man-2 man-22" src="{{ asset('assets/frontend') }}/img/icon/sign/man-2.png" alt="">
            <img class="circle" src="{{ asset('assets/frontend') }}/img/icon/sign/circle.png" alt="">
            <img class="zigzag" src="{{ asset('assets/frontend') }}/img/icon/sign/zigzag.png" alt="">
            <img class="dot" src="{{ asset('assets/frontend') }}/img/icon/sign/dot.png" alt="">
            <img class="bg" src="{{ asset('assets/frontend') }}/img/icon/sign/sign-up.png" alt="">
            <img class="flower" src="{{ asset('assets/frontend') }}/img/icon/sign/flower.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="page__title-wrapper text-center mb-55">
                        <h2 class="page__title-2">Please Register <br> Account</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                            <div class="sign__in text-center">
                                <a href="#" class="sign__social g-plus text-start mb-15"><i
                                        class="fab fa-google-plus-g"></i>Sign Up with Google</a>
                                <p> <span>........</span> Or, <a href="{{ route('register.page') }}">register</a> with your
                                    email<span>
                                        ........</span> </p>
                            </div>
                        </div>
                        <div class="sign__form">
                            <form action="{{ route('register.store') }}" method="post">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Full Name</h5>
                                    <div class="sign__input">
                                        <input type="text" placeholder="Full name" name="name"
                                            class="form-control @error('name') is-invalid @enderror">
                                        <i class="fal fa-user"></i>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Phone No</h5>
                                    <div class="sign__input">
                                        <input placeholder="enter phone number" type="tel" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror">
                                        <i class="fal fa-tel"></i>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Work email</h5>
                                    <div class="sign__input">
                                        <input placeholder="e-mail address" type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror">
                                        <i class="fal fa-envelope"></i>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Password</h5>
                                    <div class="sign__input">
                                        <input placeholder="Password" type="Password" name="password"
                                            class="form-control @error('email') is-invalid @enderror">
                                        <i class="fal fa-lock"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-30">
                                    <h5>Re-Password</h5>
                                    <div class="sign__input">
                                        <input placeholder="Confirm-Password" type="Password" name="password_confirmation"
                                            class="form-control @error('email') is-invalid @enderror">
                                        <i class="fal fa-lock"></i>
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="m-btn m-btn-4 w-100"> <span></span>Register</button>
                                <div class="sign__new text-center mt-20">
                                    <p>Already in Regiter ? <a href="{{ route('login.page') }}"> Sign In</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up area end -->
@endsection
