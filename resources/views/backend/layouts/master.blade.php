<!DOCTYPE html>
<html lang="en" data-footer="true"
    data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>CodexWise | @yield('title')</title>
    <meta name="description" content="Ecommerce Dashboard" />

    @include('backend.layouts.inc.style')
</head>

<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                @include('backend.layouts.inc.logo')
                <!-- Logo End -->

                <!-- User Menu Start -->
                @include('backend.layouts.inc.user-menu')
                <!-- User Menu End -->

                <!-- Menu Incldule here -->
                @include('backend.layouts.inc.menu')

                <!-- Menu End -->

                <!-- Mobile Buttons Start -->
                <div class="mobile-buttons-container">
                    <!-- Menu Button Start -->
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-cs-icon="menu"></i>
                    </a>
                    <!-- Menu Button End -->
                </div>
                <!-- Mobile Buttons End -->
            </div>
            <div class="nav-shadow"></div>
        </div>

        <main>
            <div class="container mt-5">
                <!-- Stats Start -->
                @yield('admin_content')
                <!-- Stats End -->

            </div>
        </main>
        <!-- Layout Footer Start -->
        @include('backend.layouts.inc.footer')

        <!-- Layout Footer End -->
    </div>

    @include('backend.layouts.inc.script')

</body>

</html>
