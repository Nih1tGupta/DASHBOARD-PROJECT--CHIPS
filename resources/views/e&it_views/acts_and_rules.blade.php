@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container" >
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Acts & Rules</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('view_home')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Acts & Rules</li>
            </ul>
        </div>
    </div>
</section>

@include('e&it_views.include.news_slider');

<section class="feature-four"id="wrapper">>
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="icon-suitcase"></span>
                        </div>
                        <h3 class="department-details__title center">Acts & Rules</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        Policy related topics enunciated in the department-
                                    </h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <ol>
                                        <p>
                                            <li>To promote the development of information technology in the state and
                                            implement the work plan of information technology in the socio-economic
                                            field.
</li>

<li> Development of Geographic Information System and its proper use in all
                                            departments.</li>

                                            <li> Use of information technology to improve civil services.</li>

                                            <li> To make computerized automation system in all the departments of the
                                            state government, urban and rural and local bodies.</li>

                                            <li> Coordinating between all the departments of the state government, urban
                                            and rural local bodies for regional and inter-regional promotion of
                                            information technology and giving guidelines for facilitating information
                                            technology and its wide dissemination.</li>

                                            <li> To create awareness among the general public to ensure complete and
                                            cost-effective use of information technology and to remove doubts related to
                                            information technology.</li>

                                            <li> Coordination for the implementation of state's information technology
                                            policy and action plans.</li>

                                            <li> Organizing seminars, workshops, conferences etc. related to information
                                            technology.</li>

                                            <li>For manpower planning and human resource development in various
                                            departments as mentioned above Objectives (especially information technology
                                            related) support activities.</li>

                                            <li>To encourage and promote research and development work related to
                                            information technology, which includes increasing the use of Hindi in
                                            information technology.</li>

                                            <li> Coordinating with information technology institutions and organizations
                                            located in India and abroad.</li>

                                             <li> Establishment of software technology parks and other similar
                                            institutions.</li>
                                            <li>Consultancy regarding information technology programs and schemes in
                                            various departments</li>
                                            Doing.

                                            <li> Establishment of rural internet and other internet based information
                                            systems, including establishment of information booths (kiosks) for various
                                            services.</li>


                                            <li> Promotion of information technology activities relating to
                                            dissemination of data and multi-media traffic through optical fiber cables,
                                            telecommunication channels, wireless and satellite.</li>

                                            <li> To establish coordination and network between investors, industry /
                                            business organizations and financial institutions for the development of
                                            information technology in the public and private sector.</li>

                                            <li> To develop the state as a suitable market for promoting investment
                                            related to information technology sector.</li>

                                            <li> To develop and control the activities related to e-commerce.</li>

                                            <li> All matters relating to services to which the Department relates
                                            (except those allotted to the Finance Department and General Administration
                                            Department).</li>

                                            <li> Policy promotion and assistance related to electronic hardware and
                                            semiconductor manufacturing.</li>

                                            <li> Unique Identification Scheme (Aadhaar).</li>

                                        </p>
                                        <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>What are the benefits of IT consultant?</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <p>There are many variations of passages the majority have suffered
                                            alteration in some fo injected humour, or randomised words
                                            believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                            aliquet pellentesque vitae.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What can you do if we hire a IT advisor for business?</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p> lorem34There are many variations of passages the majority have suffered
                                            alteration in some fo injected humour, or randomised words
                                            believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                            aliquet pellentesque vitae.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>What makes your company different?</h4>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>There are many valofghngyfgdfdghmgnfvgfbnhbfvdme fo injected humour, or
                                            randomised words
                                            believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                            aliquet pellentesque vitae.</p>
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
</section>
@endsection