<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    @include('frontend.layouts.inc.style')
</head>

<body>
    <!-- bg shape area start -->
    <div class="bg-shape top0">
        <img src="{{ asset('assets/frontend') }}/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- sign in area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="{{ asset('assets/frontend') }}/img/icon/sign/man-1.png" alt="">
            <img class="man-2" src="{{ asset('assets/frontend') }}/img/icon/sign/man-2.png" alt="">
            <img class="circle" src="{{ asset('assets/frontend') }}/img/icon/sign/circle.png" alt="">
            <img class="zigzag" src="{{ asset('assets/frontend') }}/img/icon/sign/zigzag.png" alt="">
            <img class="dot" src="{{ asset('assets/frontend') }}/img/icon/sign/dot.png" alt="">
            <img class="bg" src="{{ asset('assets/frontend') }}/img/icon/sign/sign-up.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="page__title-wrapper text-center mb-55">
                        <h2 class="page__title-2">Sign in to <br> Admin Dashboard.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                            <form action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Admin Email</h5>
                                    <div class="sign__input">
                                        <input type="email" id="email-address" placeholder="Admin e-mail address"
                                            class="form-control @error('email') is-invalid @enderror" name="email">
                                        <i class="fal fa-envelope"></i>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sign__input-wrapper mb-10">
                                    <h5>Password</h5>
                                    <div class="sign__input">
                                        <input type="password" id="password" placeholder="Password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password">
                                        <i class="fal fa-lock"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sign__action d-sm-flex justify-content-between mb-30">


                                </div>
                                <button type="submit" class="m-btn m-btn-4 w-100"> <span></span> Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign in area end -->
    </div>

    @include('frontend.layouts.inc.script')
</body>

</html>
