@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Accessibility Statement</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Accessibility</li>
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
                        <h3 class="department-details__title center">Accessibility</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Accessibility Statement
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                <div class="inner">
                                        <ol>
                                            <p>
                                                <li>The Official website of the Chhattisgarh Infotech Promotion Society
                                                    (CHiPS),Government of Chhattisgarh has been built with an aim to
                                                    provide maximum accessibility and usability to its visitors.
                                                </li>

                                                <li> This website can be viewed from a variety of devices such as Desktop or Laptop computers, web-enabled mobile devices, WAP phones, PDAs, etc. However, currently Portable Document Format (PDF) files are not fully accessible.</li>

                                                <li> We aim to be standards compliant and follow principles of usability and universal design, which should help all visitors of this website.</li>

                                                <li> This website is designed to meet the Guidelines for Indian Government Websites and also adheres to level AA of the Web Content Accessibility Guidelines (W.C.A.G.) 2.0 laid down by the World Wide Web Consortium (W.3.C.). Part of the information in the website is also made available through links to external Websites. External Websites are maintained by the respective departments who are responsible for making their sites accessible.</li>

                                                <li>If you face any problem or have suggestions regarding the accessibility of this website, please do let us know the nature of the problem along with your contact information to get back to you at the earliest.</li>

                                              

                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            @include('e&it_views.include.footer_sidebar')


        </div>
</section>
@endsection