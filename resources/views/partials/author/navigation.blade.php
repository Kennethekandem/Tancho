
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <div Class="container">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header"><a class="navbar-brand" href="{{ route('author') }}">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('authored/assets/imgs/logo-icon.png') }}" alt="homepage" class="dark-logo"/>
                            <!-- Light Logo icon -->
                            <img src="{{ asset('authored/assets/imgs/logo-light-icon.png') }}" alt="homepage" class="light-logo"/> </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
          <!-- dark Logo text -->
          <img src="{{ asset('authored/assets/imgs/logo-text.png') }}" alt="homepage" class="dark-logo dark-logo2"/>
                            <!-- Light Logo text -->
          <img src="{{ asset('authored/assets/imgs/logo-light-text.png') }}" class="light-logo" alt="homepage"/></span> </a></div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="top-bar-main">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <div class="float-left">
                        <ul class="navbar-nav">
                            <li class="nav-item "><a
                                        class="nav-link navbar-toggler sidebartoggler waves-effect waves-dark float-right"
                                        href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a></li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item hidden-xs-down app-search">
                                <input type="text" class="form-control float-left" placeholder="Type for search...">
                            </li>
                        </ul>
                    </div>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <div class="float-right pr-3">
                        <ul class="navbar-nav my-lg-0 float-right">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark"
                                                             href="#" data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="false"> <i class="mdi mdi-bell"></i>
                                    <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
                                    <ul>
                                        <li>
                                            <div class="drop-title">You have <span class="highlighted">3 new</span>
                                                Notifications
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"><i class="fas fa-envelope"></i> 2 new messages
                                                        <span class="float-right text-light">15:07</span></div>
                                                </a>
                                                <!-- Message -->
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"><i class="fas fa-comment"></i> 1 new comment
                                                        <span class="float-right text-light">11.08.2018</span></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="mail-content"><i class="fas fa-calendar-alt"></i> 2 Events
                                                        Soon <span class="float-right text-light">10.08.2018</span></div>
                                                </a></div>
                                        </li>
                                        <li><a class="nav-link text-center" href="javascript:void(0);">See all
                                                notifications </a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Comment -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Messages -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark"
                                                             href="#" id="2" data-toggle="dropdown" aria-haspopup="true"
                                                             aria-expanded="false"> <i class="mdi mdi-message"></i>
                                    <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                                </a>
                                <div class="dropdown-menu mailbox dropdown-menu-right animated fadeIn" aria-labelledby="2">
                                    <ul>
                                        <li>
                                            <div class="drop-title">You have <span class="highlighted">7 new</span> messages
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><img src="{{ asset('authored/assets/imgs/users/user-50x50.jpg') }}"
                                                                               alt="user" class="img-circle"> <span
                                                                class="profile-status online pull-right"></span></div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Amanda Robertson</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                        </div>
                                                        <span class="float-right text-light text-right">11:18 <span
                                                                    class="clearfix"></span> <span
                                                                    class="label label-rounded label-primary">1</span> </span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><img src="{{ asset('authored/assets/imgs/users/user-50x50.jpg') }}"
                                                                               alt="user" class="img-circle"> <span
                                                                class="profile-status online pull-right"></span></div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Danny Donavan</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                        </div>
                                                        <div class="float-right text-light text-right">09.07.2018 <span
                                                                    class="clearfix"></span> <span
                                                                    class="label label-rounded label-primary">2</span></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <!-- Message -->
                                                <a href="#">
                                                    <div class="user-img"><img src="{{ asset('authored/assets/imgs/users/user-50x50.jpg') }}"
                                                                               alt="user" class="img-circle"> <span
                                                                class="profile-status online pull-right"></span></div>
                                                    <div class="mail-content">
                                                        <div class="float-left">
                                                            <h5 class="mt-0 text-dark">Frank Hendrics</h5>
                                                            <span class="mail-desc text-light mt-1">Guterres was elec...</span>
                                                        </div>
                                                        <div class="float-right text-light text-right">10.08.2018 <span
                                                                    class="clearfix"></span> <span
                                                                    class="label label-rounded label-primary">4</span></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a></div>
                                        </li>
                                        <li><a class="nav-link text-center" href="javascript:void(0);">See all
                                                notifications </a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- End mega menu -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown u-pro"><a
                                        class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                            src="{{ asset('authored/assets/imgs/users/user-50x50.jpg') }}" alt="user" class=""/><span
                                            class="circle-status"></span></a>
                                <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                    <ul class="dropdown-user">
                                        <li class="text-center">
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="{{ asset('authored/assets/imgs/users/user-50x50.jpg') }}"
                                                                        alt="user"></div>
                                                <div class="clearfix"></div>
                                                <div class="u-text">
                                                    <h4>Mason Vox</h4>
                                                    <p class="text-light"><span class="status-circle bg-success"></span>online
                                                        <i class="fas fa-chevron-down small"></i></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><span class="status-circle bg-success"></span> online</a></li>
                                        <li><a href="#"><span class="status-circle bg-warning"></span> away</a></li>
                                        <li><a href="#"><span class="status-circle bg-danger"></span> not disturb</a></li>
                                        <li><a href="#"><span class="status-circle bg-light"></span> offline</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fas fa-user mr-1"></i> My Profile</a></li>
                                        <li><a href="#"><i class="fas fa-cog mr-1"></i> Settings</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fas fa-sign-in-alt mr-1"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="container">
        <aside class="left-sidebar">
            <ul class="nav-bar navbar-inverse hidden-xs-down">
                <li class="nav-item"> <a class="nav-link navbar-toggler sidebartoggler  waves-effect waves-dark float-right" href="javascript:void(0)"><span class="navbar-toggler-icon"></span></a> </li>
            </ul>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="clearfix"></li>
                        <li class=""> <a class=" waves-effect waves-dark" href="{{ route('author') }}"><i class="flaticon-desktop-computer-screen-with-rising-graph"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li><a href="{{ route('blog.index') }}" class=""><i class="fas fa-bullhorn"></i><span class="hide-menu">Blogs</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->