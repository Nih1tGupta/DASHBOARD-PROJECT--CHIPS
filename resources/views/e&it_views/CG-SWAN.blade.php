@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>CG-SWAN</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>CG-SWAN</li>
            </ul>
        </div>
    </div>
</section>

<section class="update-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2">
                <div class="update-one__left">
                    <div class="update-one__city-update-box">
                        <div class="update-one__city-update-icon">
                            <img src="{{ asset('eit_assets/images/icon/update-one-city-update-icon.png'); }}" alt="">
                        </div>
                        <div class="update-one__city-update-text">
                            <p>Latest Update</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10">
                <div class="update-one__right">
                    <div class="update-one__carousel thm-owl__carousel owl-theme owl-carousel owl-loaded owl-drag"
                        data-owl-options="{
                                &quot;items&quot;: 1,
                                &quot;margin&quot;: 10,
                                &quot;smartSpeed&quot;: 500,
                                &quot;loop&quot;:true,
                                &quot;autoplay&quot;: true,
                                &quot;nav&quot;:false,
                                &quot;dots&quot;:false,
                                &quot;navText&quot;: [&quot;<span class=\&quot;icon-left-arrow\&quot;></span>&quot;,&quot;<span class=\&quot;icon-right-arrow\&quot;></span>&quot;],
                                &quot;responsive&quot;:{
                                    &quot;0&quot;:{
                                        &quot;items&quot;:1
                                    },
                                    &quot;768&quot;:{
                                        &quot;items&quot;:1
                                    },
                                    &quot;992&quot;:{
                                        &quot;items&quot;: 1
                                    }
                                }
                            }">



                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-3120px, 0px, 0px); transition: all 0.5s ease 0s; width: 5460px;">
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 770px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="update-one__single">
                                            <p class="update-one__text">The city of govity cultural festival &amp;
                                                concert at
                                                domanion valer...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    class="icon-left-arrow"></span></button><button type="button" role="presentation"
                                class="owl-next"><span class="icon-right-arrow"></span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
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
                        <h3 class="department-details__title center">CG-SWAN</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Project Details:
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li>The Chhattisgarh State Wide Area Network (CG-SWAN) is a very
                                                    ambitious project to provide the State with a basic information
                                                    technology backbone which will be utilized for carrying voice, data
                                                    and voice traffic facilitating interdepartmental communication and
                                                    data sharing within the State. CG-SWAN will be a safe, fast,
                                                    reliable and cost effective network connecting all the 146 blocks of
                                                    the State through a hybrid network consisting of MPLS leased line,
                                                    RF and other network technologies. The project will enable instant
                                                    online interaction among government departments / agencies resulting
                                                    in obtaining reports on a real time, improving the workflow
                                                    processes and the pace of decision-making. The project would act as
                                                    a vehicle for effective implementation of eGovernance projects
                                                    across the State.
                                                </li>




                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Milestones:
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li>One of the largest SWAN in India.
                                                </li>
                                                <li>Minimum 6 Mbps connectivity till block level</li>
                                                <li>Successfully integrated with National Knowledge Network (NKN) at
                                                    district level</li>
                                                <li>First SWAN to implement IPv6 (Dual Stack).</li>
                                                <li>First SWAN to implement MPLS Leased Line upto block level.</li>






                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>



                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Impact:
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li>Anywhere-Anytime access to Government Services for citizens
                                                </li>
                                                <li>Availability of government services in cost-effective manner
                                                    regardless of location</li>
                                                <li>Better Monitoring and evaluation of Government Schemes with
                                                    Management Information System (MIS)</li>
                                                <li>Substantial Reduction in Communication Cost</li>
                                                <li>Increases the productivity of the government due to reliable
                                                    vertical and horizontal connectivity</li>






                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>


                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Current Status:
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li>M/s Bharti Airtel Ltd. has been selected after a transparent bidding
                                                    process for Facility Management Service and AMC of CGSWAN Project.
                                                </li>
                                                <li>Bandwidth provisions for Leased Lines, VSAT and Internet are being
                                                    made by BSNL, Bharti Airtel Ltd, Reliance Communications Ltd and NKN
                                                    respectively</li>

                                                <li>No. of Point-of-Presence (PoPs)</li>







                                            <!-- </p>
                                            <ol> -->

                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered text-left">

                                                        <thead>
                                                            <tr>
                                                                <th colspan="1" class="text-center">Vertical</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>SHQ</td>
                                                                <td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>DHQ</td>
                                                                <td>27</td>
                                                            </tr>
                                                            <tr>
                                                                <td>BHQ</td>
                                                                <td>120</td>
                                                            </tr>
                                                            <tr>
                                                                <td>BHQ with VSAT</td>
                                                                <td>2</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>



                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered text-left">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="1" class="text-center">Horizontal</th>
                                                            </tr>

                                                        </thead>



                                                        <tbody>
                                                            <tr>
                                                                <td>Leased Line</td>
                                                                <td>323</td>
                                                            </tr>
                                                            <tr>
                                                                <td>RF</td>
                                                                <td>396</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Extended LAN</td>
                                                                <td>63</td>
                                                            </tr>
                                                            <tr>
                                                                <td>VSAT</td>
                                                                <td>14</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </p>
                                                <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>


                            <div class="g">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                      Achievements:
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li>1st SWAN to implement 100% MPLS connectivity upto block level and IPv6 Schema.
                                                </li>
                                                <li>One of the pilot states for NKN integration. 1st State to integrate all 17 DHQs with NKN by 2014.</li>
                                                <li>New Video Conferencing Solution with minimum 150 concurrent sessions.</li>
                                                <li>Video Conferencing Portal for reservation is introduced. Total 984 VCs have been conducted till date from December 2016 onwards.</li>
                                                <li>Involvement of multiple bandwidth providers for better, consistent and quality bandwidth connectivity.</li>
                                                <li>Upgradation of CGSWAN Firewall with latest NextGen Firewall and better Network Security Policy for enhanced security of network. (No impact of WannaCry Threat observed in CGSWAN Network)</li>
                                                <li>New Enterprise Level Network Monitoring System and Helpdesk for better link monitoring and faster ticket lodging/resolution.</li>
                                                <li>Connectivity to Commercial Tax Department has made the State ready for GST implementation.</li>
                                                <li>Connectivity to Health Department for initiating Telemedicine Project in the State at 16 selected pilot locations.</li>
                                                <li>Backhaul bandwidth/Connectivity to various projects such as City WiFi, CCTNS, Lok Seva Kendras, etc</li>
                                                <li>Inauguration of CGSWAN 2.0 by Mr. Rajnath Singh, Honourable Home Minister, Government of India on 5th November 2016 during Rajyotsav Mela by interacting with Sukama District Collector Neeraj Bansod and sukama Municipal Council Chairperson Laxmi Bai through VC from Sukma DMC along with 157 districts & blocks.</li>
                                                <li>CGSWAN-NICNET integration for seamless access to Government Applications and Websites for G2G and Citizen Services</li>






                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                             


        </div>
                            </div>
        
                        </div>
                    </div>
       
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
         
</section>
@endsection