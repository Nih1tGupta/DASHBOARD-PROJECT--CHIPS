@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
<section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>About CH<i>i</i>PS</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>About CH<i>i</i>PS</li>
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

                    </div>
                    <div class="faq-one__right mt-3">
                        <div class="accrodion-grp " data-grp-name="">

                            <div class="accrodion active">
                                <div class="accrodion-title" style="margin-top:16px; margin-bottom:16px;">
                                    <h4>About CH<i>i</i>PS -</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <ul>
                                            <li>
                                                Chhattisgarh Infotech Promotion Society (CHi PS) is the nodal agency and
                                                prime mover for propelling IT growth & implementation of the IT &
                                                e-Governance projects in the State of Chhattisgarh. CHi PS is involved
                                                in
                                                the end-to-end implementation of some mega IT Projects like, SDC, SSDG,
                                                SWAN, GIS, CHOi CE, e-Procurement etc. A professional approach is being
                                                adopted for the implementation of IT Projects using the services of
                                                e-governance experts and consultants from corporate and academia.
                                            </li>
                                            <li>
                                                Chhattisgarh State with wide-ranging socio-economic disparities is now
                                                witnessing the ongoing Information Technology (IT) revolution.
                                                Information
                                                and Communication Technology (ICT) is a particularly important medium
                                                for
                                                the state in reaching out and improving livelihoods specially for its
                                                overwhelming SC / ST population across 44% forest area, which had
                                                largely
                                                remained untouched by modern development.
                                            </li>
                                            <li>
                                                An overwhelming proportion of this population is dependent upon
                                                agriculture
                                                and forest for their basic livelihood. Despite significant bottlenecks
                                                of
                                                limited access to market related information, monsoon forecasts,
                                                government
                                                schemes, information on modern farming practices, agriculture and forest
                                                contribute significantly to the State’s income. ICT has the potential to
                                                significantly improve this contribution. In doing so, Government of
                                                Chhattisgarh seeks to create an IT environment in the state wherein
                                                investments in IT are not only encouraged but actively facilitated.
                                            </li>
                                            <li>
                                                We aim to achieve quality and excellence in state government services to
                                                citizens, state transactions with citizens and businesses, and internal
                                                state governmental operations/functions through the strategic deployment
                                                of
                                                information technologies.
                                            </li>
                                            <li>
                                                The State of Chhattisgarh recognizes the importance of Information and
                                                Communication Technology as a key enabler in its economic development
                                                and
                                                improving the quality of life. With a view to make Chhattisgarh an IT
                                                enabled state progressively, CHi PS has come up with the “Electronics,
                                                IT
                                                and ITeS Investment Policy of Chhattisgarh 2014 – 2019”.
                                            </li>
                                        </ul>

                                    </div><!-- /.inner -->
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            @include('e&it_views.include.chips_activity_sidebar')

        </div>
    </div>
</section>
@endsection