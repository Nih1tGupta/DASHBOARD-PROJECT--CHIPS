@extends('e&it_views.layout')
@section('title', 'E and IT')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Organization Chart</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><span>/</span></li>
                <li>Organization Chart</li>
            </ul>
        </div>
    </div>
</section>

@include('e&it_views.include.news_slider');

<section class="feature-four"id="wrapper">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
            <img src="{{ asset('eit_assets/org_chart.png'); }}" alt="" style="max-width: 150vh;">
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->

            
            @include('e&it_views.include.sidebar_notice_board')
            @include('e&it_views.include.table')
        </div>
    </div>
</section>
@endsection