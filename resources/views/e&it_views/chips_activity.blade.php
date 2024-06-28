@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Chips Activity</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('view_home')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Chips Activity</li>
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
                        <h3 class="department-details__title center">CH<i>i</i>PS Activities</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                                <div class="accrodion-title" style="margin-top:16px; margin-bottom:16px;">
                                    <h4>Strategic Group-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">

                                        <h6>Telecom Infrastructure Division-</h6>
                                        <li> <a href="{{route('e&it_views.StateWide')}}">Statewide Area Network Project</a></li>
                                        <li> <a href="{{route('e&it_views.BharatNet')}}">BharatNet Project</a></li>
                                        <li> <a href="{{route('e&it_views.BastarNet')}}">Bastarnet Project</a></li>
                                        <li> <a href="{{route('e&it_views.Wi-Fi')}}">Wi-Fi City Project</a></li>


                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                                <div class="accrodion-title"style="margin-top:16px; margin-bottom:16px;">
                                    <h4>Information Technology Infrastructure Division-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <li> <a href="{{route('e&it_views.Establishment')}}">Establishment of Software Park in Bhilai</a></li>
                                        <li> <a href="{{route('e&it_views.State-Data')}}">State Data Center</a></li>
                                        <li> <a href="{{route('e&it_views.State-Portal')}}">State Portal Project</a></li>



                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="faq-one__right mt-3">
                    <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                            <div class="accrodion-title"style="margin-top:16px; margin-bottom:16px;">
                                    <h4>e-Governance Services Division-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <div class="padd" style="margin-bottom:14px;">
                                            <h6>(A) Civil service from government-</h6>
                                        </div>
                                        <li><a href="{{route('e&it_views.E')}}"> E-District Project</a></li>
                                        <li><a href="{{route('e&it_views.Common')}}"> Common Service Center</a></li>
                                        <li><a href="{{route('e&it_views.Aadhar')}}"> Aadhaar Authentication System</a></li>
                                        <li><a href="{{route('e&it_views.Integrated')}}"> Integrated Proactive e-Governance Project (II)</a></li>
                                        <li><a href="{{route('e&it_views.Chhattisgarh-Haat')}}"> Chhattisgarh Haat Project</a></li>
                                        <li><a href="{{route('e&it_views.Chhattisgarh-Darpan')}}"> Chhattisgarh Darpan Portal</a></li>
                                        <li><a href="{{route('e&it_views.CG')}}"> CG Tika Web Portal</a></li>
                                        <li><a href="{{route('e&it_views.Web')}}"> Web Portal and Mobile App for Quantifiable Data Commission</a>
                                        </li>



                                    </div><!-- /.inner -->
                                </div>

                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <div class="padd" style="margin-bottom:14px;">
                                            <h6> (B) Government to government service-</h6>
                                        </div>
                                        <li><a href="{{route('e&it_views.Digital')}}"> Digital Secretariat Project</a></li>
                                        <li><a href="{{route('e&it_views.E-Procurement')}}"> E-Procurement Project</a></li>
                                        <li><a href="{{route('e&it_views.Central')}}"> Central Project Monitoring Unit Project</a></li>
                                        <li><a href="{{route('e&it_views.Capacity')}}"> Capacity Development Program</a></li>
                                        <li><a href="{{route('e&it_views.BuildNext')}}"> BuildNext Project</a></li>
                                        <li><a href="{{route('e&it_views.Payment')}}"> Payment Application in Godhan Nyay Yojana</a></li>
                                        <li><a href="{{route('e&it_views.e-Samiksha')}}"> e-Samiksha</a></li>
                                        <li><a href="{{route('e&it_views.CG-Camp')}}"> CG Camp Portal</a></li>
                                        <li><a href="{{route('e&it_views.e-Punchboard')}}"> e-Punchboard</a></li>




                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="faq-one__right mt-3">
                    <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                            <div class="accrodion-title"style="margin-top:16px; margin-bottom:16px;">
                                    <h4>Investment Division-</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                    <li><a href="{{route('e&it_views.Information')}}"> Information Technology and Information Technology Enabled Services investment incentives </a></li>



                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="faq-one__right mt-3">
                    <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                            <div class="accrodion-title"style="margin-top:16px; margin-bottom:16px;">
                              <a href="">  <h4>Geographic Information Systems Division-</h4> </a>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                    <a href="{{route('e&it_views.Geographic')}}"> Read More...</a>



                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                            <div class="accrodion-title"style="margin-top:16px; margin-bottom:16px;">
                                <h4>Innovation & Emerging Technology Division</h4> 
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                    <li><a href="{{route('e&it_views.Incubator')}}">Incubator-cum-Accelerator Institute (36Inc)</a></li>



                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection