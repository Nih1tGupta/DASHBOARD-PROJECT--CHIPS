<header class="main-header-three">
    <div class="main-menu__top">
        <div class="main-menu__top-inner">
            <div class="main-menu__top-right">
                <ul class="list-unstyled main-menu__contact-list">
                    <li>
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="text">
                            <p><a href="https://www.cgstate.gov.in" target="_blank">Chhattisgarh Government</a></p>
                        </div>
                    </li>
                </ul>
                <div class="main-menu-three__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <ul class="list-unstyled main-menu__top-menu">
                    <li><a href="#"><i class="fa fa-arrow-down"></i> Skip to Main Content</a></li>
                    <li><a href="#"><i class="fa fa-eye-slash"></i> Screen Reader Access</a></li>
                    <li><a href="#"> Text Size
                            <span class="bg-c">A-</span>
                            <span class="bg-c">A</span>
                            <span class="bg-c">A+</span>
                        </a></li>

                   




                    <li>
                        <a href="#">
                            <span class="bg-c bg-c1">A</span>
                            <span class="bg-c bg-c2">A</span>
                            <span class="bg-c bg-c3">A</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-header-three__top">
        <div class="container">
            <div class="main-header-three__top-inner">
                <div class="main-header-three__logo">
                    <a href="index.html">
                        <img src="{{ asset('eit_assets/images/cg-logo.svg'); }}">
                        <h1>Electronics &amp; IT Department</h1>
                        <p>Government of Chhattisgarh</p>
                    </a>
                </div>
                <div class="main-header-three__content-box">
                    <div class="main-header-three__search-lan-switcher-btn">
                        <div class="main-header-three__search-box">
                            <a href="#" class="main-header-three__search search-toggler icon-magnifying-glass"></a>
                        </div>
                        <div class="main-header-three__language-switcher language-switcher">
                            <div class="dropdown bootstrap-select"><select class="selectpicker">
                                    <option data-content="<span class='lang-en'><img src="
                                        {{ asset('eit_assets/images/lang-flag/en.png'); }}" alt=''>English</span>"
                                        value="en" selected="">English</option>
                                    <option data-content="<span class='lang-fr'><img src="
                                        {{ asset('eit_assets/images/lang-flag/fr.png'); }}" alt=''>French</span>"
                                        value="fr">French
                                    </option>

                                    <option data-content="<span class='lang-it'><img src="
                                        {{ asset('eit_assets/images/lang-flag/it.png'); }}" alt=''>Italian</span>"
                                        value="it">
                                        Italian</option>
                                </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                    data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                    aria-haspopup="listbox" aria-expanded="false" title="English">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner"><span class="lang-en"><img
                                                        src="{{ asset('eit_assets/images/lang-flag/en.png'); }}"
                                                        alt="">English</span></div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-header-three__btn-box">
                            <input type="text" name="search" placeholder="Search.." class="search">
                            <a href="contact.html" class="thm-btn main-header-three__btn"> <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="container">
                <div class="main-menu-three__wrapper-inner">
                    <div class="main-menu-three__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="">
                                <a href="{{ route('view_home') }}">Home </a>
                            </li>
                            <li class="dropdown">
                                <a href="#">About Us</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('view_acts_and_rules') }}">Acts & Rules</a></li>
                                    <li><a href="{{ route('view_program_and_schemes') }}">Programmes & Schemes</a></li>
                                    <li><a href="{{ route('view_organization_chart') }}">Organisation Chart</a>
                                    </li>
                                    <li class="dropdown"><a href="{{route('view_whos_who')}}">Who's who</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('view_achievements') }}">Achievements</a></li>
                                            <li><a href="{{ route('view_departmental_activities') }}">Departmental Activities</a></li>
                                            <li><a href="{{ route('view_departmental_structure') }}">Departmental Structures</a></li>
                                            <li><a href="{{route('view_subject_matter_art_scheme')}}">Subject
                                                    Matter of formulated policy</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="">
                                <a href="{{route('view_services')}}">Services </a>
                            </li>
                            <li class="">
                                <a href="{{route('photo_gallery')}}">Photo Gallery </a>
                            </li>
                            <li class="dropdown">
                                <a href="{{route('eit_view_notice_board')}}">Notice Board</a>
                                <ul class="sub-menu">
                                <li><a href="{{ route('eit_view_news') }}">News</a></li>
                                    <li><a href="{{ route('eit_view_tenders') }}">Tenders</a></li>
                                    <li><a href="{{ route('eit_view_orders') }}">Orders</a></li>
                                    <li><a href="{{ route('eit_view_circulars') }}">Circulars</a></li>
                                    <li><a href="{{ route('eit_view_recruitments') }}">Recruitments</a></li>
                                    <li><a href="{{ route('eit_view_notifications') }}">Notifications</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="{{route('e&it_views.chips_activity')}}">Chips Activity </a>
                            </li>
                            <li class="">
                                <a href="{{route('view_right_to_information')}}">Right to Information </a>
                            </li>
                            <li class="">
                                <a href="{{route('e&it_views.contact_us')}}">Contact Us </a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="main-menu-three__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content">
        <div class="main-menu-three__wrapper">
            <div class="container">
                <div class="main-menu-three__wrapper-inner">
                    <div class="main-menu-three__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="current">
                                <a href="index.html">Home </a>
                            </li>
                            <li class="dropdown">
                                <a href="#">About</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Departments</a></li>
                                    <li><a href="our-history.html">Our history</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-details.html">Team details</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-details.html">Portfolio details</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="event-details.html">Event details</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">404 error</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="our-services.html">Services</a></li>
                                    <li><a href="building-permission.html">Building permission</a></li>
                                    <li><a href="driving-license.html">Driving license</a></li>
                                    <li><a href="report-polution.html">Report polution</a></li>
                                    <li><a href="parking-permission.html">Parking permission</a></li>
                                    <li><a href="tax-return.html">Tax return</a></li>
                                    <li><a href="birth-certificate.html">Birth certificate</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Departments</a>
                                <ul class="sub-menu">
                                    <li><a href="departments.html">Establishments</a></li>
                                    <li><a href="department-details.html">Societies</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">Noticeboard</a>
                                <ul class="sub-menu">
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="news-sidebar.html">Tenders</a></li>
                                    <li><a href="news-details.html">Recruitment</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu-three__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.sticky-header__content -->
</div>
