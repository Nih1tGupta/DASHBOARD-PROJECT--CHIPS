@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Departmental Activities</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('view_home')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Departmental Activities</li>
            </ul>
        </div>
    </div>
</section>
@include('e&it_views.include.news_slider');

<section class="feature-four" id="wrapper">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="icon-suitcase"></span>
                        </div>
                        <h3 class="department-details__title center">Achievement</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">

                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Activities</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <li>The basic objective of the activities of the department in the state is to
                                            establish infrastructure for telecommunication and information technology in
                                            the state, in which a better environment is created for the industries and
                                            through the services of e-governance, speedy and quality services can be
                                            provided to the common man of the state. Can you Many projects have been
                                            implemented by the department through chips.</li>


                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->

            @include('e&it_views.include.sidebar_notice_board')
            @include('e&it_views.include.table')
        </div>
    </div>
</section>
@endsection