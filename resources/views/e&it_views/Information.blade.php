@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>IT Enabled Services</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>IT Enabled Services</li>
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
                                    <h4>Information Technology and Information Technology Enabled Services investment
                                        incentives -</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <li>
                                            The objective of this project is to promote investment in information
                                            technology in the state. Under this, a simple and attractive policy
                                            framework has been created so that the state becomes a preferred investment
                                            destination for industries related to electronics, information technology
                                            and information technology enabled services. Specialized Investor Promotion
                                            and Facilitation Cell has been set up in CHIPS which is active in promoting
                                            the State as an investment destination in national and international fora.
                                            This cell is constantly striving to find better opportunities to connect
                                            with potential investors and motivate them to invest. Under this project a
                                            single window investment portal has been created, which makes doing business
                                            simple and easy. Management of this platform is an important part of
                                            investment facilitation. Investment Promotion Cell works actively in
                                            collaboration with various stakeholders in the areas of Start-up, Skill
                                            Development, Higher Education, R&D and other areas for creation of skilled
                                            manpower. Apart from this, this cell is also actively working in relevant
                                            areas like main industry, education, health care, smart cities, interim
                                            security, industrial, security, use of information technology for social and
                                            economic development.
                                            <br>
                                            Investments made under the policy -
                                            <ol>
                                                <li>
                                                    As a result of the investment promotion efforts of CHIPs, 79
                                                    investment proposals have been received under Electronics, IT and
                                                    ITeS Investment Policy 2014-2019 with a proposed investment amount
                                                    of Rs.1834.36 crore and proposed employment of 24,710.
                                                </li>
                                                <li>
                                                    Approval has been given to 46 investment proposals in Electronics,
                                                    IT and ITeS sector with proposed investment amount of Rs.707.7 crore
                                                    and proposed employment of Rs.17,047.
                                                </li>
                                                <li>
                                                    In the reported year, 13 new investment proposals have been received
                                                    for approval, whose proposed investment amount is Rs 166.18 crore
                                                    and proposed employment is 2,200.
                                                </li>
                                            </ol>
                                        </li>
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