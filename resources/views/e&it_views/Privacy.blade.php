@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Privacy Policy </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Privacy Policy</li>
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
                        <h3 class="department-details__title center">Privacy Policy</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="acgcrodion">
                                <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Privacy Policy
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li>As a general rule, this website does not collect Personal
                                                    Information about you when you visit the site. You can generally
                                                    visit the site without revealing Personal Information, unless you
                                                    choose to provide such information.
                                                </li>
                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>



                            </div>

                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Site Visit Data:
                                    </h4>
                                </div>
                                <div class="accrodifon-content">
                                    <div class="inner">
                                        <ol>
                                            <p>
                                                <li>This website records your visit and logs the following information
                                                    for statistical purposes your server's address; the name of the
                                                    top-level domain from which you access the Internet (for example,
                                                    .gov, .com, .in, etc.); the type of browser you use; the date and
                                                    time you access the site; the pages you have accessed and the
                                                    documents downloaded and the previous Internet address from which
                                                    you linked directly to the site.
                                                </li>
                                                <li>We will not identify users or their browsing activities, except when
                                                    a law enforcement agency may exercise a warrant to inspect the
                                                    service provider's logs.</li>
                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>



                            </div>


                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Cookies:
                                    </h4>
                                </div>
                                <div class="accrodifon-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li>A cookie is a piece of software code that an internet web site sends
                                                    to your browser when you access information at that site. This site
                                                    does not use cookies.</li>
                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>



                            </div>

                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Email Management:
                                    </h4>
                                </div>
                                <div class="accrodifon-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li>Your email address will only be recorded if you choose to send a
                                                    message. It will only be used for the purpose for which you have
                                                    provided it and will not be added to a mailing list. Your email
                                                    address will not be used for any other purpose, and will not be
                                                    disclosed, without your consent</li>
                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>



                            </div>

                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Collection of Personal Information:
                                    </h4>
                                </div>
                                <div class="accrodifon-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li>If you are asked for any other Personal Information you will be
                                                    informed how it will be used if you choose to give it. If at any
                                                    time you believe the principles referred to in this privacy
                                                    statement have not been followed, or have any other comments on
                                                    these principles, please notify the webmaster through the contact us
                                                    page.</li>
                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>



                            </div>
                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Note:
                                    </h4>
                                </div>
                                <div class="accrodifon-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li>The use of the term "Personal Information" in this privacy statement refers to any information from which your identity is apparent or can be reasonably ascertained.</li>
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