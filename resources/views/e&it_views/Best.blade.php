@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2> Important Links</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Best Practice Videos </li>
            </ul>
        </div>
    </div>
</section>


<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Four Single Start-->
            <div class="col-xl-8 col-lg-8">
                <div class="department-details__left">
                    <div class="department-details__icon-and-title">
                        <div class="department-details__icon">
                            <span class="fa fa-tasks"></span>
                        </div>
                        <h3 class="department-details__title center">Best Practice Videos<h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">



                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Affidavit free regime in Punjab
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                </li>




                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Control Office Application (COA)
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>




                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>


                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Automated Building Plan Approval System (ABPAS)
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>




                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>





                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        SAND- System For Attumanal Neutral Distribution
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                </li>




                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>


                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Conduct of Panchayat Elections in Jammu & Kashmir
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                </li>




                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>




                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Cervical Cancer Screening Initiative Chennai, Tamilnadu
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                <li><a href="#"> Visit</a></li>
                                                </li>




                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                        </div>
                 
                    <!--Feature Four Single End-->
                    <!--Feature Four Single Start-->
                    <!-- @include('e&it_views.include.footer_sidebar') -->

                </div>
            </div>
        </div>
        @include('e&it_views.include.imp_links_sidebar')
    </div>
  
</section>
@endsection