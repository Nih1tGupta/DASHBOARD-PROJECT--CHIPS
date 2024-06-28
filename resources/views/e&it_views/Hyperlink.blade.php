@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Hyperlink Policy </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Hyperlink Policy</li>
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
                        <h3 class="department-details__title center">Hyperlink Policy</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">


                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Links to External Websites/Portals":
                                    </h4>
                                </div>
                                <div class="accrodifon-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li>At many places in this website, you shall find links to other
                                                    websites/portals. This links have been placed for your convenience.
                                                    Chhattisgarh Infotech Promotion Society(CHIPS),Government of
                                                    Chhattisgarh is not responsible for the contents and reliability of
                                                    the linked websites and does not necessarily endorse the views
                                                    expressed in them. Mere presence of the link or its listing on this
                                                    website should not be assumed as endorsement of any kind. We cannot
                                                    guarantee that these links will work all the time and we have no
                                                    control over availability of linked pages.</li>
                                            </p>
                                            <ol>
                                    </div><!-- /.inner -->
                                </div>



                            </div>
                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Links to Chhattisgarh Infotech Promotion Society(CHIPS),Government of
                                        Chhattisgarh:
                                    </h4>
                                </div>
                                <div class="accrodifon-content">
                                    <div class="inner">
                                        <ol>
                                            <p>

                                                <li>Prior permission is required before hyperlink are directed from any
                                                    website/portal to this site. Permission for the same, stating the
                                                    nature of the content on the pages from where the link has to be
                                                    given and the exact language of the hyperlink should be obtained by
                                                    sending a request to stake holder</li>
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