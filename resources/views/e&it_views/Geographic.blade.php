@extends('e&it_views.layout')
@section('title', 'Minstry of Electronics & IT')
@section('content')
    <section class="page-header" style="height: 30vh;">

    <div class="page-header-bg"
        style="background-image: url({{ asset('eit_assets/images/backgrounds/slider-3-1.jpg'); }});background-position: 0px -17rem;">
    </div>
    <div class="container">
        <div class="page-header__inner" style="padding-top:50px;">
            <h2>Geographic Information Systems Division</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="#">Chips Activity</a></li>
                <li><span>/</span></li>
                <li>Geographic Information Systems Division</li>
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
                                    <h4>Geographic Information Systems Division -</h4>
                                </div>
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <li>
                                            Chhattisgarh is the first state in the country, which has prepared the
                                            Geographical Information System of all the villages on 37 layers. In this
                                            system 37 layers, mainly land records, maps, roads, land use, land drainage,
                                            soil type, forest, forest, water storage, minerals, social, cultural,
                                            population etc. . This system is referred from satellite map by
                                            georeferencing. GIS is used for data analysis, categorization etc. of this
                                            system. based application has been developed so that the department can make
                                            use of its data. Presently a database of more than 70 layers has been
                                            prepared under the Geographic Information System Project.
                                        </li>
                                        <li>
                                            Geographical information system is used in preparation of projects of
                                            various departments, comparative study of land or geographical changes,
                                            analysis of forest, water storage, greenery, soil and fertility etc. This
                                            system is accurate and close to reality. The use of this system saves
                                            labour, time and money in planning or evaluation.
                                        </li>
                                        <li>
                                            Over the years, many departments have used this system for planning and
                                            evaluation. Apart from this, businessmen and entrepreneurs also work on the
                                            basis of the data of this system. Information about the cadastral/land maps
                                            prepared on this system is being provided as per the departmental
                                            requirement. Apart from this, road information system of the state has also
                                            been prepared, which is updated from time to time by the departments. Maps
                                            of plots of two new industrial areas created by CSIDC in the reported year
                                            were uploaded for online land allotment.
                                        </li>
                                        <li>
                                            Geographic Information System based database of roads has been created for
                                            Chhattisgarh Rural Road Development Authority. Presently, by using
                                            Geographical Information System, a reference atlas of administrative and
                                            natural maps of 32 districts of the state is being prepared in Hindi medium
                                            by using Geographical Information System. The map of new tehsils announced
                                            by the Revenue and Disaster Management Department this year is being
                                            prepared for the Land Records Office.
                                        </li>
                                        <li>
                                            In the reported year, for the first time in the state using Geographic
                                            Information System tools, maps were prepared for tribal based atlas for
                                            Tribal Research and Training Institute in a very short period. In these
                                            maps, information about the demographic, educational status, habitat
                                            environment, ITDP area, special backward tribes of the state, etc., of the
                                            tribes residing in the state has been displayed in a simple and clear
                                            manner.
                                        </li>
                                        <li>
                                            It was released on 9 August 2021 on the occasion of World Tribal Day.
                                            A one-day seminar was organized to create awareness on the topic
                                            “Geo-Spatial Techniques” under the aegis of CHIPs and Geo-Spatial World, New
                                            Delhi, covering Revenue, Forest, Primitive Caste Development, Water
                                            Resources, Rural Development Authority, More than 60 administrative officers
                                            from CSIDC, Urban Development etc. departments participated. A workshop has
                                            been organized to make various departments of the state aware of the new
                                            technologies being used in the GIS field in the country and to increase
                                            awareness. In the modern era, Geographic Information System is being
                                            considered as an important tool in the areas of digital empowerment and
                                            strong economy, smart cities, water irrigation, health, sanitation, security
                                            management etc.

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