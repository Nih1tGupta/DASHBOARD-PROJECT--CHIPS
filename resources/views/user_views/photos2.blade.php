@extends('user_views.layout')

@section('title','Home')

@section('css')
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user_assets/images/favicons/apple-touch-icon.png');}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('user_assets/images/favicons/favicon-32x32.png');}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('user_assets/images/favicons/favicon-16x16.png');}}" />
    <link rel="manifest" href="{{ asset('user_assets/images/favicons/site.webmanifest');}}" />
    <meta name="description" content="govity HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('user_assets/vendors/bootstrap/css/bootstrap.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/animate/animate.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/animate/custom-animate.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/fontawesome/css/all.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/jarallax/jarallax.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/nouislider/nouislider.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/nouislider/nouislider.pips.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/odometer/odometer.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/swiper/swiper.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/govity-icons/style.css');}}">
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/tiny-slider/tiny-slider.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/reey-font/stylesheet.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/owl-carousel/owl.theme.default.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/bxslider/jquery.bxslider.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/bootstrap-select/css/bootstrap-select.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/vegas/vegas.min.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/jquery-ui/jquery-ui.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/timepicker/timePicker.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/vendors/nice-select/nice-select.css');}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('user_assets/css/govity.css');}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/css/govity-responsive.css');}}" />




    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png');}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png');}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png');}}" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="govity HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('user_assets/vendors/bootstrap/css/bootstrap.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/animate/animate.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/animate/custom-animate.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/fontawesome/css/all.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/jarallax/jarallax.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/nouislider/nouislider.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/nouislider/nouislider.pips.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/odometer/odometer.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/swiper/swiper.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/govity-icons/style.css');}}">
    <link rel="stylesheet" href="{{asset('user_assets/vendors/tiny-slider/tiny-slider.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/reey-font/stylesheet.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/owl-carousel/owl.carousel.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/owl-carousel/owl.theme.default.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/bxslider/jquery.bxslider.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/bootstrap-select/css/bootstrap-select.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/vegas/vegas.min.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/jquery-ui/jquery-ui.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/timepicker/timePicker.css');}}" />
    <link rel="stylesheet" href="{{asset('user_assets/vendors/nice-select/nice-select.css');}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/govity.css');}}" />
    <link rel="stylesheet" href="{{asset('assets/css/govity-responsive.css');}}" />
@endsection
 
@section('content')
<section class="department-page">
            <div class="container">
<div class="section-title text-center">
                    <div class="section-title__icon">
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="section-title__tagline">Our Gallery</span>
                    <h2 class="section-title__title">Explore</h2>
                </div>

<div class="row">
<div class="contact-one__bg" style="background-image: url(https://artgallery.yale.edu/sites/default/files/styles/hero_small/public/2023-01/ag-doc-2281-0036-pub.jpg?h=147a4df9&itok=uclO7OrF); ">
</div>
    <div class="col-xxl-10 col-md-10 ms-auto me-auto" data-select2-id="select2-data-6-ktob">
        <div class="card stretch-full" data-select2-id="select2-data-5-p6zd">
           
        </div>
    </div>
</div>
<div class=" wow fadeInUp animated animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">

                            <div class="footer-widget__column footer-widget__gallery  ">
                                <ul class="footer-widget__gallery-list list-unstyled clearfix">
                                @if($all)
                                @foreach($all as $photo)
                                    <li>
                                        <div class="footer-widget__gallery-img"   style= "width:18rem;">
                                            <img src="{{ asset($photo->photo_url); }}   "style=" height: 21rem ;object-fit:cover;" alt="">
                                            <a href="{{ asset($photo->photo_url); }}" class="img-popup"></a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                  
                                </ul>

                            </div>
                        </div>
</div>
</div>
</div>

@endsection


@section('js')

<script src="{{ asset('user_assets/vendors/jquery/jquery-3.6.0.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/bootstrap/js/bootstrap.bundle.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/jarallax/jarallax.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/jquery-appear/jquery.appear.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/jquery-validate/jquery.validate.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/nouislider/nouislider.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/odometer/odometer.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/swiper/swiper.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/tiny-slider/tiny-slider.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/wnumb/wNumb.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/wow/wow.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/isotope/isotope.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/countdown/countdown.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/owl-carousel/owl.carousel.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/bxslider/jquery.bxslider.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/bootstrap-select/js/bootstrap-select.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/vegas/vegas.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/jquery-ui/jquery-ui.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/timepicker/timePicker.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/circleType/jquery.circleType.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/circleType/jquery.lettering.min.js');}}"></script>
    <script src="{{ asset('user_assets/vendors/nice-select/jquery.nice-select.min.js');}}"></script>
    <script src="{{ asset('user_assets/js/govity.js');}}"></script>



    <script src="{{asset('assets/vendors/jquery/jquery-3.6.0.min.js');}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js');}}"></script>
    <script src="{{asset('assets/vendors/jarallax/jarallax.min.js');}}"></script>
    <script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js');}}"></script>
    <script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js');}}"></script>
    <script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js');}}"></script>
    <script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js');}}"></script>
    <script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js');}}"></script>
    <script src="{{asset('assets/vendors/nouislider/nouislider.min.js');}}"></script>
    <script src="{{asset('assets/vendors/odometer/odometer.min.js');}}"></script>
    <script src="{{asset('assets/vendors/swiper/swiper.min.js');}}"></script>
    <script src="{{asset('assets/vendors/tiny-slider/tiny-slider.min.js');}}"></script>
    <script src="{{asset('assets/vendors/wnumb/wNumb.min.js');}}"></script>
    <script src="{{asset('assets/vendors/wow/wow.js');}}"></script>
    <script src="{{asset('assets/vendors/isotope/isotope.js');}}"></script>
    <script src="{{asset('assets/vendors/countdown/countdown.min.js');}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js');}}"></script>
    <script src="{{asset('assets/vendors/bxslider/jquery.bxslider.min.js');}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js');}}"></script>
    <script src="{{asset('assets/vendors/vegas/vegas.min.js');}}"></script>
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.js');}}"></script>
    <script src="{{asset('assets/vendors/timepicker/timePicker.js');}}"></script>
    <script src="{{asset('assets/vendors/circleType/jquery.circleType.js');}}"></script>
    <script src="{{asset('assets/vendors/circleType/jquery.lettering.min.js');}}"></script>
    <script src="{{asset('assets/vendors/nice-select/jquery.nice-select.min.js');}}"></script>
    <script src="{{asset('assets/js/govity.js');}}"></script>
@endsection

