<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo-full.png" alt="" class="logo logo-lg" />
                <img src="assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('dashboard')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span>
                    </a>
                    <!-- <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="index.html">CRM</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="analytics.html">Analytics</a></li>
                        </ul> -->
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layout"></i></span>
                        <span class="nxl-mtext">Forms</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{route('form1')}}">1</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('form2')}}">2</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="reports-project.html">Project Report</a></li>
                            <li class="nxl-item"><a cnotifilass="nxl-link" href="reports-timesheets.html">Timesheets Report</a></li> -->
                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layout"></i></span>
                        <span class="nxl-mtext">Notice</span><span class="nxl-arrow"><i
                        class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{route('add_notice')}}">Add Notice</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('view_notice')}}">View News</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('view_tender')}}">View Tenders</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('view_orders')}}">View Orders</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('view_circulars')}}">View Circulars</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('view_recruitments')}}">View Recruitments</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('view_notifications')}}">View Notificatons</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link" href="reports-project.html">Project Report</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="reports-timesheets.html">Timesheets Report</a></li> -->
                    </ul>
                </li>
                @if(auth()->user()->role== 1)
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Members</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('create_post') }}">Add Member</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('detail') }}">View Members</a></li>
                    </ul>
                </li>
                @endif
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-folder"></i></span>
                        <span class="nxl-mtext">Gallery</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        @if(auth()->user()->role== 1)
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('add_gallery') }}">Add Gallery</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('view_pending_request') }}">View Pending Requests</a></li>
                        @endif
                        @if(auth()->user()->role == 2)
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('add_gallery') }}">Add Request</a></li>
                        @endif
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_gallery') }}">View Gallery</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('view_all_requests_for_member') }}">My Posts</a></li>

                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="bi bi-graph-up"></i></span>
                        <span class="nxl-mtext">Charts</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{route('HighChart')}}">High Chart</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{route('BarChart')}}">Bar Chart</a></li>

                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('reports')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="bi bi-file-earmark"></i></span>
                        <span class="nxl-mtext">Report</span>
                    </a>

                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('calender')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="bi bi-journal-text"></i></span>
                        <span class="nxl-mtext">Calender</span>
                    </a>

                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('tender')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="bi bi-people"></i></span>
                        <span class="nxl-mtext">Tender Details</span>
                        <!-- <span class="nxl-arrow"><i class="feather-chevron-right"></i></span> -->
                    </a>
                    <!-- <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="leads.html">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="leads-view.html">Leads View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="leads-create.html">Leads Create</a></li>
                        </ul> -->
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('notify')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="fa-regular fa-bell"></i></span>
                        <span class="nxl-mtext">Notifications</span>
                    </a>

                </li>





            </ul>

        </div>
    </div>
</nav>