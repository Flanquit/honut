
  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-token" content="{{ Session::token() }}"> 

        <title>{{ config('app.name', 'Online Store') }}</title>
        
       {{-- @extends('inc.head') --}}
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="admin dashboard">
        <meta name="author" content="admin dashboard">
        <meta name="keywords" content="admin dashboard">

        <!-- Title Page-->
        <title>Admin Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href="css-admin/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css-admin/theme.css" rel="stylesheet" media="all">
</head>



<body class="animsition">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a href="#">
                        <img src="wp-content/themes/nooflow-understrap-child/img/honut-logo.png" alt="Honut Logo" style="max-width:100%;" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
               
                        
                   
                   
                        <h4 class="name">Welcome {{ Auth::user()->name }} </h4>

                        <a id="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                        </a>

                       
                   
                    

                      
                      
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active ">
                                <a class="js-arrow" href="{{URL::asset('home')}}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                   
                                </a>
                             
                            </li>
                            <li>
                                <a href="{{URL::asset('add_products')}}">
                                    <i class="fas fa-chart-bar"></i>Add Product</a>
                               
                            </li>

                            <li>
                                <a href="{{URL::asset('products')}}">
                                        <i class="fas fa-chart-bar"></i>View Stocks</a>
                                   
                            </li>
                           
                           
                           
                                    
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
    
            <!-- PAGE CONTAINER-->
            <div class="page-container2">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap2">
                                <div class="logo d-block d-lg-none">
                                    <a href="{{URL::asset('home')}}">
                                        <img src="images/szl-logo.png" alt="Dashboard" />
                                    </a>
                                </div>
                                <div class="header-button2">
                                   
                                    <div class="header-button-item has-noti js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 1 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Product out of stock  </p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                           
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i class="zmdi zmdi-menu"></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                          
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                    <a id="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                                    </a>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>


                {{-- below view will be used for tablet viewing --}}

                {{--   


                <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                    <div class="logo">
                        <a href="#">
                            <img src="images/szl-logo.png" alt="DashBoard" />
                        </a>
                    </div>
                    <div class="menu-sidebar2__content js-scrollbar2">
                        <div class="account2">
                            <div class="image img-cir img-120">
                                <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                            </div>
                            <h4 class="name">john doe</h4>
                            <a href="#">Sign out</a>
                        </div>
                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list">
                                <li class="active has-sub">
                                    <a class="js-arrow" href="{{URL::asset('dashboard')}}">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                        </li>
                                        <li>
                                            <a href="index2.html">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                        </li>
                                        <li>
                                            <a href="index3.html">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                        </li>
                                        <li>
                                            <a href="index4.html">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="inbox.html">
                                        <i class="fas fa-chart-bar"></i>Inbox</a>
                                    <span class="inbox-num">3</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-shopping-basket"></i>eCommerce</a>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-trophy"></i>Features
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="table.html">
                                                <i class="fas fa-table"></i>Tables</a>
                                        </li>
                                        <li>
                                            <a href="form.html">
                                                <i class="far fa-check-square"></i>Forms</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                                        </li>
                                        <li>
                                            <a href="map.html">
                                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-copy"></i>Pages
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="login.html">
                                                <i class="fas fa-sign-in-alt"></i>Login</a>
                                        </li>
                                        <li>
                                            <a href="register.html">
                                                <i class="fas fa-user"></i>Register</a>
                                        </li>
                                        <li>
                                            <a href="forget-pass.html">
                                                <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-desktop"></i>UI Elements
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="button.html">
                                                <i class="fab fa-flickr"></i>Button</a>
                                        </li>
                                        <li>
                                            <a href="badge.html">
                                                <i class="fas fa-comment-alt"></i>Badges</a>
                                        </li>
                                        <li>
                                            <a href="tab.html">
                                                <i class="far fa-window-maximize"></i>Tabs</a>
                                        </li>
                                        <li>
                                            <a href="card.html">
                                                <i class="far fa-id-card"></i>Cards</a>
                                        </li>
                                        <li>
                                            <a href="alert.html">
                                                <i class="far fa-bell"></i>Alerts</a>
                                        </li>
                                        <li>
                                            <a href="progress-bar.html">
                                                <i class="fas fa-tasks"></i>Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="modal.html">
                                                <i class="far fa-window-restore"></i>Modals</a>
                                        </li>
                                        <li>
                                            <a href="switch.html">
                                                <i class="fas fa-toggle-on"></i>Switchs</a>
                                        </li>
                                        <li>
                                            <a href="grid.html">
                                                <i class="fas fa-th-large"></i>Grids</a>
                                        </li>
                                        <li>
                                            <a href="fontawesome.html">
                                                <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                        </li>
                                        <li>
                                            <a href="typo.html">
                                                <i class="fas fa-font"></i>Typography</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                 --}}
                <!-- END HEADER DESKTOP-->





                <main class="py-4">
                        @include('inc.message')
                        @yield('content')
                </main>




    
                @extends('layouts.Admin_footer'); 
    </body>

</html>
