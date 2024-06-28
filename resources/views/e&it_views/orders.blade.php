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





<div class="col-xl-4 col-lg-4">
    <div class="department-details__right">
        <h3 class="department-details__download-title">NOTICE BOARD</h3>
        <div class="department-details__services-box">
            <ul class="department-details__services-list list-unstyled">
                <li>
                    <a href="#">Your Government<span class="icon-right-arrow"></span></a>
                </li>
                <li>
                    <a href="#">Jobs & Unemployment<span class="icon-right-arrow"></span></a>
                </li>
                <li>
                    <a href="#">Business & Industrials<span class="icon-right-arrow"></span></a>
                </li>
                <li>
                    <a href="#">Roads & Transportation<span class="icon-right-arrow"></span></a>
                </li>
                <li>
                    <a href="#">Art & Culture<span class="icon-right-arrow"></span></a>
                </li>
                <li>
                    <a href="#">Policing & Crimes<span class="icon-right-arrow"></span></a>
                </li>
            </ul>
        </div>

    </div>
</div>

</div>

</div>
</div>


@endsection