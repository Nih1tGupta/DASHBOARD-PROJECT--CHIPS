@extends('e&it_views.layout')
@section('title', 'E and IT')
@section('content')
<section class="page-header" style="height: 40vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>Who's Who</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><span>/</span></li>
                <li>Who's Who</li>
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
                            <span class="icon-suitcase"></span>
                        </div>
                        <h3 class="department-details__title">Who's Who</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="table-responsive">
                            <table class="table cart-table text-center">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Name</th>
                                        <th class="font-weight-bold">Designation</th>
                                        <th class="font-weight-bold">Present Address/<br>Room no at ministry</th>
                                        <th class="font-weight-bold">Office-Telephone number/Fax Number</th>
                                        <th class="font-weight-bold">Resident address/Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Shri Subrat Sahoo </td>
                                        <td>Additional Chief Secretary</td>
                                        <td>M-05/11</td>
                                        <td>0771-2221311, 2510793</td>
                                        <td>D-1/5, Officers Colony, Devendra Nagar, Raipur</td>
                                    </tr>
                                    <tr>
                                        <td>Shri Sameer Vishnoi </td>
                                        <td>Special Secretary</td>
                                        <td>S-03/40</td>
                                        <td>0771-2510330</td>
                                        <td>D-2/40, New Officers Colony, Devendra Nagar, Raipur</td>
                                    </tr>
                                    <tr>
                                        <td>Mr. K. K. Gautam </td>
                                        <td>Upper Secretary</td>
                                        <td>M-05/01</td>
                                        <td>0771-2510794</td>
                                        <td>G-6/213, GAD Complex, Kabir Nagar, Raipur</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            <div class="col-xl-4 col-lg-5 mt-5 mt-5">
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
</section>
     @include('e&it_views.include.table')
@endsection