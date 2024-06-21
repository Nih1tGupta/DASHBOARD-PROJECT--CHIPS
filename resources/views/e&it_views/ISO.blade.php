@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
<section class="page-header" style="height: 30vh;">
    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top: 50px;">
            <h2>ISO 9001-2000 Certified</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><span>/</span></li>
                <li>ISO 9001-2000 Certified</li>
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
                        <h3 class="department-details__title">ISO 9001-2000 Certified</h3>
                    </div>
                    <div class="faq-one__right mt-3">
                        <p class="mt-4" style="text-align: justify;">
                            Chhattisgarh infotech & biotech Promosion Society(CHi PS) has become the first agency of
                            Government of Chhattisgarh to be awarded ISO 9001:2000 Quality
                            Management Certification. M/s National Productivity Council(NPC), Bhopal was appointed as
                            consultant to assist CHi PS in implementing ISO 9001:2000.The Implementation of ISO
                            9001:2000 has resulted in the workflows becoming more efficient, accountable and reliable.
                            It has also benefited the organization in clearly demarcating the procedures for project
                            initiation, vendor selection, project implementation and project control. The implementation
                            of ISO 9001:2000 in CHi PS has standardized the procedures and has created a benchmark on
                            project implementation methodologies for other government agencies. Certification Audit was
                            done by KVQA (Kvalitet Vertas Quality Assurance). KVQA is accredited by NORKS akkreditering
                            of norway, which is recognized universally. <br>

                            The certification would definitely assist CHi PS and the State of Chhattisgarh to
                            effectively and efficiently implement IT projects and steer the State in acquiring the
                            numero uno status in the are of eGovernance. <br>

                            1st Surveillance audit in CHi PS was conducted by certifying agency KVQA on 30th July, 2009.
                            Based on the audit findings, observations and absence of minor & major CAR as well as
                            evidence of substantial improvement in the Quality System, Quality Management System of CHi
                            PS has been recommended for continuation of certification as per ISO 9001:2000.
                        </p>
                        <br>
                        <a style="color: #0B66C2;" href="">Certificate</a> <br>
                        <a style="color: #0B66C2;" href="">Quality Policy</a>
                    </div>
                </div>
            </div>
            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->


            @include('e&it_views.include.imp_links_sidebar')

            <!--Feature Four Single End-->
            <!--Feature Four Single Start-->
            <!-- <div class="col-xl-4 col-lg-4">
                <div class="department-details__download">
                    <h3 class="department-details__download-title">Achievements &amp; Awards</h3>
                    <ul class="department-details__download-list list-unstyled">
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="department-details__download-content">
                                <div class="department-details__download-icon"><span class="fa fa-trophy"></span></div>
                                <div class="department-details__download-text">
                                    <p style="text-align: justify;">Annual Award for excellence</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->
            <!--Feature Four Single End-->
        </div>
    </div>
</section>

@endsection