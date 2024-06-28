@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT | Home')
@section('content')
<section class="page-header">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -15rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Copyright Policy </h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('view_home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Copyright Policy</li>
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
                        <h3 class="department-details__title center">Copyright Policy</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                            <div class="g">
                            <div class="g-title" style="margin-top:12px;margin-bottom:14px;">
                                    <h4>
                                        Copyright Policy
                                    </h4>
                                </div>
                                <div class="accrodfion-content">
                                <div class="inner">
                                        <ol>
                                            <p>
                                                <li>The contents of this website may not be reproduced partially or fully, without due permission from Chhattisgarh Infotech Promotion Society(CHIPS),Government of Chhattisgarh. If referred to as a part of another publication, the source must be appropriately acknowledged. The contents of this website can not be used in any misleading or objectionable context.
                                                </li>




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