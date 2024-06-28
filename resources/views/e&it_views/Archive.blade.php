@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Archive </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Archive</li>
            </ul>
        </div>
    </div>
</section>

 

<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
           
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->

        </div>
       
        @include('e&it_views.include.imp_links_sidebar')
</section>
@endsection