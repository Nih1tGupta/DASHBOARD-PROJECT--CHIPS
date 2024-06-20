@extends('user_views.layout')
@section('title', 'Home')
@section('css')
<!-- favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user_assets/images/favicons/apple-touch-icon.png'); }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('user_assets/images/favicons/favicon-32x32.png'); }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('user_assets/images/favicons/favicon-16x16.png'); }}" />
<link rel="manifest" href="{{ asset('user_assets/images/favicons/site.webmanifest'); }}" />
<meta name="description" content="govity HTML 5 Template " />
<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('user_assets/vendors/bootstrap/css/bootstrap.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/animate/animate.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/animate/custom-animate.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/fontawesome/css/all.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/jarallax/jarallax.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/nouislider/nouislider.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/nouislider/nouislider.pips.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/odometer/odometer.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/swiper/swiper.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/govity-icons/style.css'); }}">
<link rel="stylesheet" href="{{ asset('user_assets/vendors/tiny-slider/tiny-slider.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/reey-font/stylesheet.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/owl-carousel/owl.theme.default.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/bxslider/jquery.bxslider.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/bootstrap-select/css/bootstrap-select.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/vegas/vegas.min.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/jquery-ui/jquery-ui.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/timepicker/timePicker.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/vendors/nice-select/nice-select.css'); }}" />
<!-- template styles -->
<link rel="stylesheet" href="{{ asset('user_assets/css/govity.css'); }}" />
<link rel="stylesheet" href="{{ asset('user_assets/css/govity-responsive.css'); }}" />
@endsection

@section('content')
<!-- <section class="page-header">
    <div class="page-header-bg" style="background-image: url(user_assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Our services</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li></li>
            </ul>
        </div>
    </div>
</section> -->
<section class="main-slider">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel owl-loaded owl-drag"
        data-owl-options="{&quot;loop&quot;: true, &quot;items&quot;: 1, &quot;navText&quot;: [&quot;<span class=\&quot;icon-left-arrow\&quot;></span>&quot;,&quot;<span class=\&quot;icon-right-arrow\&quot;></span>&quot;], &quot;margin&quot;: 0, &quot;dots&quot;: true, &quot;nav&quot;: true, &quot;animateOut&quot;: &quot;slideOutDown&quot;, &quot;animateIn&quot;: &quot;fadeIn&quot;, &quot;active&quot;: true, &quot;smartSpeed&quot;: 1000, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000, &quot;autoplayHoverPause&quot;: false}">







        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-3769px, 0px, 0px); transition: all 0s ease 0s; width: 6597px;">
                <div class="owl-item cloned" style="width: 942.4px;">
                    <div class="item main-slider__slide-2">
                        <div class="main-slider__bg"
                            style="background-image: url(user_assets/images/backgrounds/slider-1-2.jpg);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shape-1">
                            <img src="user_assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="user_assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="user_assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__meta-box">
                            <ul class="main-slider__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-sun"></span>
                                    </div>
                                    <div class="text">
                                        <p>Today: 32 0C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Time: 09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">2 Millions Visitors Every Year</p>
                                <h2 class="main-slider__title">Safest City in
                                    <br> the World.
                                </h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 942.4px;">
                    <div class="item main-slider__slide-3">
                        <div class="main-slider__bg"
                            style="background-image: url(user_assets/images/backgrounds/slider-1-3.jpg);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shape-1">
                            <img src="user_assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="user_assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="user_assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__meta-box">
                            <ul class="main-slider__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-sun"></span>
                                    </div>
                                    <div class="text">
                                        <p>Today: 32 0C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Time: 09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">2 Millions Visitors Every Year</p>
                                <h2 class="main-slider__title">Safest City in
                                    <br> the World.
                                </h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 942.4px;">
                    <div class="item main-slider__slide-1">
                        <div class="main-slider__bg"
                            style="background-image: url(user_assets/images/backgrounds/slider-1-1.jpg);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shape-1">
                            <img src="user_assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="user_assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="user_assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__meta-box">
                            <ul class="main-slider__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-sun"></span>
                                    </div>
                                    <div class="text">
                                        <p>Today: 32 0C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Time: 09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">2 Millions Visitors Every Year</p>
                                <h2 class="main-slider__title">Safest City in
                                    <br> the World.
                                </h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 942.4px;">
                    <div class="item main-slider__slide-2">
                        <div class="main-slider__bg"
                            style="background-image: url(user_assets/images/backgrounds/slider-1-2.jpg);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shape-1">
                            <img src="user_assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="user_assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="user_assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__meta-box">
                            <ul class="main-slider__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-sun"></span>
                                    </div>
                                    <div class="text">
                                        <p>Today: 32 0C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Time: 09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">2 Millions Visitors Every Year</p>
                                <h2 class="main-slider__title">Safest City in
                                    <br> the World.
                                </h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item active" style="width: 942.4px;">
                    <div class="item main-slider__slide-3">
                        <div class="main-slider__bg"
                            style="background-image: url(user_assets/images/backgrounds/slider-1-3.jpg);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shape-1">
                            <img src="user_assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="user_assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="user_assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__meta-box">
                            <ul class="main-slider__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-sun"></span>
                                    </div>
                                    <div class="text">
                                        <p>Today: 32 0C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Time: 09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">2 Millions Visitors Every Year</p>
                                <h2 class="main-slider__title">Safest City in
                                    <br> the World.
                                </h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 942.4px;">
                    <div class="item main-slider__slide-1">
                        <div class="main-slider__bg"
                            style="background-image: url(user_assets/images/backgrounds/slider-1-1.jpg);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shape-1">
                            <img src="user_assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="user_assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="user_assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__meta-box">
                            <ul class="main-slider__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-sun"></span>
                                    </div>
                                    <div class="text">
                                        <p>Today: 32 0C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Time: 09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">2 Millions Visitors Every Year</p>
                                <h2 class="main-slider__title">Safest City in
                                    <br> the World.
                                </h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 942.4px;">
                    <div class="item main-slider__slide-2">
                        <div class="main-slider__bg"
                            style="background-image: url(user_assets/images/backgrounds/slider-1-2.jpg);">
                        </div><!-- /.slider-one__bg -->
                        <div class="main-slider__shape-1">
                            <img src="user_assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="user_assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="user_assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="main-slider__meta-box">
                            <ul class="main-slider__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-sun"></span>
                                    </div>
                                    <div class="text">
                                        <p>Today: 32 0C</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                    <div class="text">
                                        <p>Time: 09:28 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">2 Millions Visitors Every Year</p>
                                <h2 class="main-slider__title">Safest City in
                                    <br> the World.
                                </h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="main-slider__btn thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                    class="icon-left-arrow"></span></button><button type="button" role="presentation"
                class="owl-next"><span class="icon-right-arrow"></span></button></div>
        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot active"><span></span></button></div>
    </div>
</section>
@endsection

@section('js')
<script src="{{ asset('user_assets/vendors/jquery/jquery-3.6.0.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jarallax/jarallax.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-appear/jquery.appear.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-validate/jquery.validate.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/nouislider/nouislider.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/odometer/odometer.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/swiper/swiper.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/tiny-slider/tiny-slider.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/wnumb/wNumb.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/wow/wow.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/isotope/isotope.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/countdown/countdown.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/bxslider/jquery.bxslider.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/bootstrap-select/js/bootstrap-select.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/vegas/vegas.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/jquery-ui/jquery-ui.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/timepicker/timePicker.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/circleType/jquery.circleType.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/circleType/jquery.lettering.min.js'); }}"></script>
<script src="{{ asset('user_assets/vendors/nice-select/jquery.nice-select.min.js'); }}"></script>




<!-- template js -->
<script src="{{ asset('user_assets/js/govity.js'); }}"></script>
@endsection