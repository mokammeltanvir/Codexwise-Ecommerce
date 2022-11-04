<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>CodexWise - @yield('frontendTitle')</title>
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

    <!-- sidebar area start -->
    @include('frontend.layouts.inc.sidebar-cartmenu')
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
