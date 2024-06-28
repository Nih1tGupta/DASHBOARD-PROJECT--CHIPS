@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Subject Matter Art Scheme</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('view_home')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Subject Matter Art Scheme</li>
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
                        <h3 class="department-details__title center">Subject Matter Art Scheme</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                    <div class="scheme">
                        <div class="schemes">
                            <div class="scheme-title " style=" padding-left:13px;margin-top:23px; font-weight:900px;">
                                <h4>
                                    Schemes-
                                </h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <ul>
                                        <p>

                                            <li> Unique Identification Scheme (Aadhaar).</li>
                                            <li> Use of information technology to improve civil services.</li>
                                            <li> To develop and control the activities related to e-commerce.</li>
                                            
                                            <li> Establishment of software technology parks and other similar
                                                institutions.</li>
                                            <li> Development of Geographic Information System and its proper use in all
                                                departments.</li>

                                          
                                            <li>Consultancy regarding information technology programs and schemes in
                                                various departments</li>



                                            <li> To develop the state as a suitable market for promoting investment
                                                related to information technology sector.</li>

                                            <li> Policy promotion and assistance related to electronic hardware and
                                                semiconductor manufacturing.</li>

                                            <li> Coordinating with information technology institutions and organizations
                                                located in India and abroad.</li>

                                            <li> Coordination for the implementation of state's information technology
                                                policy and action plans.</li>

                                            <li> Organizing seminars, workshops, conferences etc. related to information
                                                technology.</li>
                                            <li>To promote the development of information technology in the state and
                                                implement the work plan of information technology in the socio-economic
                                                field.
                                            </li>



                                            <li> To make computerized automation system in all the departments of the
                                                state government, urban and rural and local bodies.</li>
                                            <li> Coordinating between all the departments of the state government, urban
                                                and rural local bodies for regional and inter-regional promotion of
                                                information technology and giving guidelines for facilitating
                                                information
                                                technology and its wide dissemination.</li>

                                            <li> To create awareness among the general public to ensure complete and
                                                cost-effective use of information technology and to remove doubts
                                                related to
                                                information technology.</li>


                                            <li>For manpower planning and human resource development in various
                                                departments as mentioned above Objectives (especially information
                                                technology
                                                related) support activities.</li>

                                            <li>To encourage and promote research and development work related to
                                                information technology, which includes increasing the use of Hindi in
                                                information technology.</li>




                                            <li> Establishment of rural internet and other internet based information
                                                systems, including establishment of information booths (kiosks) for
                                                various
                                                services.</li>


                                            <li> Promotion of information technology activities relating to
                                                dissemination of data and multi-media traffic through optical fiber
                                                cables,
                                                telecommunication channels, wireless and satellite.</li>

                                            <li> To establish coordination and network between investors, industry /
                                                business organizations and financial institutions for the development of
                                                information technology in the public and private sector.</li>





                                            <li> All matters relating to services to which the Department relates
                                                (except those allotted to the Finance Department and General
                                                Administration
                                                Department).</li>





                                        </p>
                                        <ul>
                                </div><!-- /.inner -->
                            </div>
                        </div>
</div>
                    </div>


                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature VFour Single Start-->

             
            @include('e&it_views.include.sidebar_notice_board')

        </div>
    </div>
</section>

    @include('e&it_views.include.table')






    @endsection