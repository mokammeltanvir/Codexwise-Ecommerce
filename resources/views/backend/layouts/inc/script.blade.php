<!-- Vendor Scripts Start -->
<script src="{{ asset('assets/backend') }}/js/vendor/jquery-3.5.1.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/vendor/OverlayScrollbars.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/vendor/autoComplete.min.js"></script>

<!-- Vendor Scripts End -->

<!-- Template Base Scripts Start -->
<script src="{{ asset('assets/backend') }}/font/CS-Line/csicons.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/base/helpers.js"></script>
<script src="{{ asset('assets/backend') }}/js/base/globals.js"></script>
<script src="{{ asset('assets/backend') }}/js/base/nav.js"></script>
<script src="{{ asset('assets/backend') }}/js/base/search.js"></script>
<script src="{{ asset('assets/backend') }}/js/base/settings.js"></script>
<script src="{{ asset('assets/backend') }}/js/base/init.js"></script>
<!-- Template Base Scripts End -->

<!--Toastr link start-->
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<!--Toastr link end-->

<!-- Page Specific Scripts Start -->
@stack('admin_script')
<!-- Page Specific Scripts End -->
