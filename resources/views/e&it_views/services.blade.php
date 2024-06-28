@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Acts & Rules</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><span>/</span></li>
                <li>Acts & Rules</li>
            </ul>
        </div>
    </div>
</section>
@include('e&it_views.include.news_slider');



            


        </div>

        </div>
    </div>





    @include('e&it_views.include.sidebar_notice_board')
    @include('e&it_views.include.table')

    @endsection