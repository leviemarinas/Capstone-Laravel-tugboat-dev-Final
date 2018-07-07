<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--Scripts-->
        @include('Templates.masterTemplateScriptsTop')
        <!--Stylesheets-->
        @include('Templates.masterTemplateStyles')
    </head>
    <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                    <form class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
                            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
                        </ul>
                        <div class="search-element">
                            <input class="form-control" id="searchForm" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn" id="searchButton" type="submit">
                                <span id="searchIcon"class="col-md">
                                    <i class="ion ion-search largeIcon"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Notifications
                                    <div class="float-right">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                                <div class="dropdown-list-content">
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" type="text/javascript" src="/others/stisla_admin_v1.0.0/dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                    <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="/others/stisla_admin_v1.0.0/dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                                    <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                    <a href="#" class="dropdown-item">
                                    <img alt="image" src="/others/stisla_admin_v1.0.0/dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                                    <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                    <a href="#" class="dropdown-item">
                                    <img alt="image" src="/others/stisla_admin_v1.0.0/dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                                    <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                    <a href="#" class="dropdown-item">
                                    <img alt="image" src="/others/stisla_admin_v1.0.0/dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                                    <div class="time">Yesterday</div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi, John Carlos Pagaduan</div></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="profile.html" class="dropdown-item has-icon">
                                <i class="ion ion-android-person"></i> Profile
                                </a>
                                <a href="#" class="dropdown-item has-icon">
                                <i class="ion ion-log-out"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="main-sidebar">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="index.html">Administrator</a>
                        </div>
                        <div class="sidebar-user">
                            <div class="sidebar-user-picture">
                                <img alt="image" src="/others/stisla_admin_v1.0.0/dist/img/avatar/avatar-5.jpeg">
                            </div>
                            <div class="sidebar-user-details">
                                <div class="user-name">John Carlos Pagaduan</div>
                                <div class="user-role">
                                    Administrator
                                </div>
                            </div>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">Dashboard</li>
                            <li class="active">
                                <a href="index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                            </li>
                            <li class="menu-header active">Main Navigation</li>
                            <li id="maintenanceTree">
                                <a href="#" class="has-dropdown"><i class="ion ion-ios-cog-outline"></i><span>Maintenance</span></a>
                                <ul class="menu-dropdown">
                                    <li><a href=""><i class="fas fa-life-ring"></i>Berth</a></li>
                                    <li><a href=""><i class="ion ion-ios-paper"></i> Contracts</a></li>
                                    <li><a href="buttons.html"><i class="ion ion-person"></i> Employee</a></li>
                                    <li><a href="toastr.html"><i class="fas fa-anchor"></i> Equipment</a></li>
                                    <li><a href="general.html"><i class="fas fa-life-ring"></i> Pier</a></li>
                                    <li><a href="components.html"><i class="fas fa-sitemap"></i>Position</a></li>
                                    <li id="tugboatMenu"><a href="/tugboat"><i class="ion ion-android-boat"></i> Tugboat</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="has-dropdown"><i class="fas fa-tasks"></i><span>Transactions</span></a>
                                <ul class="menu-dropdown">
                                    <li><a href="#" class="has-dropdown"><i class="ion ion-android-people"></i>Consignee</a>
                                        <ul class="menu-dropdown">
                                            <li><a href="#"><i class="ion ion-ios-paper"></i>Contracts</a></li>
                                            <li><a href="#"><i class="ion ion-document-text"></i>Requests</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="general.html"><i class="fas fa-ticket-alt"></i>Dispatch Ticket</a></li>
                                    <li><a href="components.html"><i class="ion ion-android-boat"></i>Dispatch &amp; Hauling</a></li>
                                    <li><a href="buttons.html"><i class="ion ion-ios-list"></i>Invoice</a></li>
                                    <li><a href="toastr.html"><i class="ion ion-clipboard"></i>Job Order</a></li>
                                    <li><a href="buttons.html"><i class="ion ion-cash"></i>Payment &amp; Billing</a></li>
                                    <li><a href="toastr.html"><i class="fas fa-calendar-alt"></i>Schedule</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="has-dropdown"><i class="ion ion-stats-bars"></i><span>Reports</span></a>
                                <ul class="menu-dropdown">
                                    <li><a href="general.html"><i class="fas fa-life-ring"></i>Berth</a></li>
                                    <li><a href="components.html"><i class="ion ion-ios-paper"></i> Contracts</a></li>
                                    <li><a href="buttons.html"><i class="ion ion-person"></i> Employee</a></li>
                                    <li><a href="toastr.html"><i class="fas fa-anchor"></i> Equipment</a></li>
                                    <li><a href="general.html"><i class="fas fa-life-ring"></i> Pier</a></li>
                                    <li><a href="components.html"><i class="fas fa-sitemap"></i>Position</a></li>
                                    <li><a href="toastr.html"><i class="ion ion-android-boat"></i> Tugboat</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="has-dropdown"><i class="fas fa-wrench"></i><span>Utilities</span></a>
                                <ul class="menu-dropdown">
                                    <li><a href="general.html"><i class="fas fa-life-ring"></i>Berth</a></li>
                                    <li><a href="components.html"><i class="ion ion-ios-paper"></i> Contracts</a></li>
                                    <li><a href="buttons.html"><i class="ion ion-person"></i> Employee</a></li>
                                    <li><a href="toastr.html"><i class="fas fa-anchor"></i> Equipment</a></li>
                                    <li><a href="general.html"><i class="fas fa-life-ring"></i> Pier</a></li>
                                    <li><a href="components.html"><i class="fas fa-sitemap"></i>Position</a></li>
                                    <li><a href="toastr.html"><i class="ion ion-android-boat"></i> Tugboat</a></li>
                                </ul>
                            </li>
                            <li class="menu-header">OTHERS(will be removed)</li>
                            <li>
                                <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
                                <ul class="menu-dropdown">
                                    <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
                                    <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                                    <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
                            </li>
                            <li>
                                <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
                            </li>
                            <li>
                                <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
                            </li>
                            <li>
                                <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
                                <ul class="menu-dropdown">
                                    <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                                    <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                                    <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                                    <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                                    <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
                                </ul>
                            </li>
                
                            <li class="menu-header">More</li>
                            <li>
                                <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                                <ul class="menu-dropdown">
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                                    <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                                        <ul class="menu-dropdown">
                                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                            <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                                                <ul class="menu-dropdown">
                                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
                            </li>
                            <li>
                                <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
                            </li>
                        </ul>
                        <div class="p-3 mt-4 mb-4">
                        </div>
                    </aside>
                </div>
                @yield('outside')
                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        </div>

        @yield('scripted')
        <script language="JavaScript" type="text/javascript" src="{{URL::asset('/others/stisla_admin_v1.0.0/dist/js/demo.js')}}"></script>
            
    </body>
</html>