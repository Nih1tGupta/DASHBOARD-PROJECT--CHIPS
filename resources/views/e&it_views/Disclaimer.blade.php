@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Disclaimer </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Disclaimer</li>
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
                        <h3 class="department-details__title center">Disclaimer</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Disclaimer
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                <div class="inner">
                                        <ol>
                                            <p>
                                                <li>This Website is maintained by Chhattisgarh Infotech Promotion
                                                    Society(CHIPS),Government of Chhattisgarh
                                                </li>

                                                <li> The contents of this website are for information purposes only,
                                                    enabling the public at large to have a quick and an easy access to
                                                    information and do not have any legal sanctity. Though every effort
                                                    is made to provide accurate and updated information, it is likely
                                                    that the some details such as telephone numbers, names of the
                                                    officer holding a post, etc may have changed prior to their update
                                                    in the website. Hence, we do not assume any legal liability on the
                                                    completeness, accuracy or usefulness of the contents provided in
                                                    this website.</li>

                                                <li>The links are provided to other external sites in some web
                                                    pages/documents. We do not take responsibility for the accuracy of
                                                    the contents in those sites. The hyperlink given to external sites
                                                    do not constitute an endorsement of information, products or
                                                    services offered by these sites.</li>

                                                <li>Despite our best efforts, we do not guarantee that the documents in
                                                    this site are free from infection by computer viruses etc.</li>

                                                <li>We welcome your suggestions to improve this website and request that
                                                    error(if any) may kindly be brought to our notice.</li>



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