<script src="{{ asset('assets/frontend') }}/js/vendor/jquery-3.5.1.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/vendor/waypoints.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.meanmenu.js"></script>
<script src="{{ asset('assets/frontend') }}/js/slick.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.fancybox.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/parallax.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/backToTop.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/ajax-form.js"></script>
<script src="{{ asset('assets/frontend') }}/js/wow.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/main.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

@stack('frontend_script')
