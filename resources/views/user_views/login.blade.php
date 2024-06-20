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




<link rel="apple-touch-icon" sizes="180x180" href="{{asset('user_assets/images/favicons/apple-touch-icon.png');}}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('user_assets/images/favicons/favicon-32x32.png');}}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('user_assets/images/favicons/favicon-16x16.png');}}" />
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
<link rel="stylesheet" href="{{asset('user_assets/css/govity.css');}}" />
<link rel="stylesheet" href="{{asset('user_assets/css/govity-responsive.css');}}" />
@endsection


@section('content')
<div class="mt-5">
    @if($errors->any())
    <div class="col-12">
        @foreach($errors->all() as $error)
        <div class=" alert alert-danger">{{$error}}</div>
        @endforeach
    </div>
    @endif

    @if(session()->has('error'))
    <div class=" alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

</div>




<section class="contact-one">
    <div class="contact-one__bg"
        style="background-image: url(https://www.incredibleindia.org/content/dam/incredibleindia/images/places/agra/agra-tajmahal-10.jpg/_jcr_content/renditions/cq5dam.web.1800.600.jpeg); ">
    </div>
    <div class="container">

        <div class="section-title text-center mt-4">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">CHIPS</span>
            <h2 class="section-title__title">Login</h2>
        </div>
        <div class="contact-one__form-box">
            <form action="{{ route('login_done') }}" method="POST" class="contact-one__form">
                @csrf
                <div class="column">
                    <div class="col-xl-6 mx-auto">
                        <div class="contact-one__input-box ">
                            <input type="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6 mx-auto">
                        <div class="contact-one__input-box ">
                            <input type="text" placeholder="Enter password " name="password"
                                style="-webkit-text-security: disc;text-security: disc;">
                        </div>
                    </div>

                    <!-- <div class="contact-one__btn-box main-menu__btn-box ">
                        <input type="submit" class="thm-btn main-menu__btn" value="Login">
                    </div> -->

                    <div class="contact-one__btn-box">
                        <button type="submit" class="thm-btn contact-one__btn">Login</button>
                    </div>
            </form>
        </div>
    </div>
</section>
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




@endsection