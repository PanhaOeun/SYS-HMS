<!DOCTYPE html>
<?php
use App\Http\Controllers\Login_Controllers\HomeController;
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>New Tech Soluction | Home Page @yield('title')</title>

<!--***********************************************Link Style CSS***************************************************************-->
<!-- Link style css Table GLobal-->
    <link rel="stylesheet" href="{{asset('css/Global/_nt.global.css')}}">
    <link rel="stylesheet" href="{{asset('css/master_page_css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/master_page_css/dataTables.bootstrap.min.css')}}">
<!-- Link style css Table GLobal-->
<!-- =====================************Link Grouop Style in Master Page ***************========================= -->
<!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/master_page_css/bootstrap-home.min.css')}}">
<!-- jquery.mCustomScrollbar -->
    <link rel="stylesheet" href="{{asset('css/master_page_css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Home Page -->
    <link rel="stylesheet" href="{{asset('css/master_page_css/homepage.css')}}">
<!-- _all-skins -->
    <link rel="stylesheet" href="{{asset('css/master_page_css/_all-skins-home.min.css')}}">
<!-- ss-main -->
    <link rel="stylesheet" href="{{asset('css/master_page_css/ss-main.css')}}">
<!-- font-awesome-CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- bootstrapdatetimepicker -->
    <link rel="stylesheet" href="{{asset('css/master_page_css/bootstrapdatetimepicker.css')}}">
<!--file nprogress CSS auto-Loded -->
    <link rel="stylesheet" href="{{asset('css/master_page_css/nprogress.css')}}">
<!--Language_icon-->
    <link rel="stylesheet" href="{{asset('css/Language_icon/bootstrap_lan_icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/Language_icon/flag_icon.css')}}">
<!--Link GLobal-Madal_Popup-->
    <link rel="stylesheet" href="{{asset('css/Global/_madal_popup.css')}}">

<!-- =====================************Link Grouop Style in Master Page ***************========================= -->
<!-- Call style css anywhere -->
@yield('css')
<!--***********************************************Link Style CSS***************************************************************-->
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
       <div class="wrapper">
<!-- =====================================++++++**********Headers-Mainer*************+++++++========================================= -->
            <header class="main-header" id="alert">
                <a href="" class="logo">
                    <!-- Logo Mini -->
                    <span class="logo-mini">
                        <img src="{{asset('image/small-logo.png')}}" alt="Mount Carmel School" />
                    </span>
                    <!-- Logo Big -->
                    <span class="logo-lg">
                        <img src="{{asset('image/1.png')}}" alt="" />
                    </span>
                </a>
            <!-- =============Navbar Togle resonsive page ============== -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <a onclick="collapseSidebar()"  class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="col-lg-5 col-md-3 col-sm-2 col-xs-5">
                        <!-- Name near togle -->
                        <span href="#"  class="sidebar-session">
                            <!--{{__('common_lang.school_name')}}-->
                            ចត្តាឡីស័ក
                        </span>
                       <!-- Name near togle -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-sm-10 col-xs-7">
                        <div class="pull-right">
                                <form class="navbar-form navbar-left search-form" role="search"  action="">
                                    <!-- Input Search -->
                                    <div class="input-group">
                                        <input type="text" value="" name="search_text1" class="form-control search-form search-form3" placeholder="Search By Student Name, Roll Number,Id Etc.">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-flat topsidesearchbtn" >
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <!-- Input Search -->
                                </form>
                                <!-- Dropdown Languges -->
                                        <div class="navbar-custom-menu">
                                                    <div class="langdiv">
                                                        <select class="languageselectpicker" onchange="set_languages(this.value)"  type="text" id="languageSwitcher" >
                                                            <option data-content='<span class="flag-icon flag-icon-cambodia" style=""></span> Cambodia' value="4" Selected></option>
                                                            <option data-content='<span class="flag-icon flag-icon-in"></span> English' value="82" ></option>
                                                        </select>
                                          </div>
                                <!-- Dropdown Languges -->

                                <ul class="nav navbar-nav headertopmenu">
                                             <li class="cal15">
                                                <!-- ==========Input Group right languges============= -->
                                                <!-- Calender -->
                                                <a data-placement="bottom" data-toggle="tooltip" title="Calendar" href="">
                                                         <i class="fa fa-calendar"></i>
                                                </a>
                                            </li>
                                        <!-- Task -->
                                            <li class="dropdown" data-placement="bottom" data-toggle="tooltip" title="Task">
                                                <a href="#"  class="dropdown-toggle todoicon" data-toggle="dropdown">
                                                    <i class="fa fa-check-square-o"></i>
                                                </a>

                                                <ul class="dropdown-menu menuboxshadow">
                                                    <li class="todoview plr10 ssnoti">Today you have 0 pending task.
                                                        <a href="" class="pull-right pt0">View All</a>
                                                    </li>
                                                    <li>
                                                        <ul class="todolist">

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                    <!-- facebook -->
                                    <li class="cal15">
                                        <a data-placement="bottom" data-toggle="tooltip" title="" href="" data-original-title="Facebook" class="todoicon">
                                            <i class="fa fa-facebook"></i></a>
                                    </li>
                                    <!-- Messager -->
                                    <li class="cal15">
                                        <a data-placement="bottom" data-toggle="tooltip" title="" href="" data-original-title="Messanger" class="todoicon">
                                            <i class="fa fa-whatsapp"></i></a>
                                    </li>
                                     <!-- ==========Input Group right languges============= -->
                                     <!-- Card ID and Position Users -->
                                    <li class="dropdown user-menu">
                                        <a class="dropdown-toggle" style="padding: 15px 13px;" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <img src="{{asset('image/2.jpg')}}" class="topuser-image" alt="User Image">
                                        </a>
                                        <ul class="dropdown-menu dropdown-user menuboxshadow">
                                            <li>
                                                <div class="sstopuser">
                                                    <div class="ssuserleft">
                                                        <a href="">
                                                            <img src="{{asset('image/2.jpg')}}" alt="User Image">
                                                        </a>
                                                    </div>

                                                    <div class="sstopuser-test">
                                                        <h4 style="text-transform: capitalize;">Pouv Saroth</h4>
                                                        <h5>Admin</h5>

                                                    </div>

                                                    <div class="divider"></div>
                                                    <div class="sspass">
                                                        <a href="" data-toggle="tooltip" title="" data-original-title="My Profile">
                                                            <i class="fa fa-user"></i>Profile
                                                        </a>
                                                        <a class="pl25" href="" data-toggle="tooltip" title="" data-original-title="Change Password">
                                                            <i class="fa fa-key"></i>Password
                                                        </a>
                                                        <a class="pull-right" href="">
                                                            <i class="fa fa-sign-out fa-fw"></i>
                                                            Logout
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--./sstopuser-->
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Card ID and Position Users -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
             <!-- =============Navbar Togle resonsive page ============== -->
            </header>
<!-- =====================================++++++**********Headers-Mainer*************++++++++========================================= -->
            <aside class="main-sidebar" id="alert2">
<!-- =====================================++++++**********Start-Navbar-Dropdown*************++++++++========================================= -->
            <form class="navbar-form navbar-left search-form2" role="search"  action="">
             <div class="input-group ">
                <input type="text"  name="search_text" class="form-control search-form" placeholder="Search By Student Name, Roll Number, Enroll Number, National Id, Local Id Etc.">
                <!-- Input Search -->
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" style="padding: 3px 12px !important;border-radius: 0px 30px 30px 0px; background: #fff;" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
                </span>
                <!-- Input Search -->
            </div>
        </form>
<!--===============Sidebar============= -->
    <section class="sidebar" id="sibe-box">
        <ul class="sessionul fixedmenu">
            <li class="removehover">
        <!-- Fixed menu -->
            <a data-toggle="modal" data-target="#sessionModal">
                <span>Current Session: 2020-21</span>
                <i class="fa fa-pencil pull-right"></i>
            </a>
        </li>
    <!--======Fixed drodown=====-->
    <li class="dropdown">
            <a class="dropdown-toggle drop5" data-toggle="dropdown" href="#" aria-expanded="false">
            <span>Quick Links</span>
            <i class="fa fa-th pull-right ftlayer"></i>
        </a>

        <ul class="dropdown-menu verticalmenu" style="min-width:194px;font-size:10pt;left:3px;">
                <li role="presentation">
                    <a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="">
                    <i class="fa fa-user-plus"></i>Student Details</a>
                </li>
                <li role="presentation">
                    <a style="color:#282828; font-family: 'Roboto-Bold';padding:6px 20px;" role="menuitem" tabindex="-1" href="">
                    <i class="fa fa-envelope-o"></i>Send Email / SMS</a>
                </li>
        </ul>
    </li>
    <!--======Fixed drodown=====-->
</ul>

    <ul class="sidebar-menu verttop" id="sidebar-menu">
    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-gears ftlayer"></i> <span>System Settings</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu menu-open" style="display: block;">
                             <li class=""><a href=""><i class="fa fa-angle-double-right"></i> SMS Setting</a></li>
                        </ul>
                    </li>

    </ul>
<!--============********Sider bar Menu with Dropdwon*****================ -->
    </section>
</aside>
<!-- =====================================++++++**********End-NavbarMenu-Mainer*************++++++++========================================= -->

    <div class="content-wrapper" style="min-height: 946px;">
        <div class="content" id="content">
                    @yield('content')
        </div>
    </div>

<!-- ***********************Script of Javascript******************************************* -->
<!-- ======================****===Script Group Master Page==****=============================================== -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/moment.min.js')}}"></script>

        <script src="{{asset('js/jquery-ui.min.js')}}"></script>

        <!-- <script src="{{asset('js/custom.js')}}"></script> -->

        <script src="{{asset('js/home-bootstrap.min.js')}}"></script>
        <script src="{{asset('js/master_page_js/jqury.min.js')}}"></script>
        <script src="{{asset('js/toastr.js')}}"></script>
        <!-- <script src="{{asset('js/bootstrap.min.js')}}"></script> -->
        <script src="{{asset('js/master_page_js/select2.full.min.js')}}"></script>
        <script src="{{asset('js/master_page_js/jquery.inputmask.js')}}"></script>
        <script src="{{asset('js/master_page_js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('js/master_page_js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('js/master_page_js/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{asset('js/master_page_js/moment.min.js')}}"></script>
        <script src="{{asset('js/master_page_js/daterangepicker.js')}}"></script>
        <script src="{{asset('js/master_page_js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Togle navbar responsive-->
    <script type="text/javascript">
            var chk_validate="HDY4L3-YD4QFZ-7QKQAV-dHVybmIrbldVN0hLdlJiQ010WEYzczdmTjQrRmFFT1dCNmJzYjNDNzlhOD0=";
    </script>
<!-- Togle responsive-->
    <!--nprogress-autorefresh-->
    <script src="{{asset('js/master_page_js/nprogress.js')}}"></script>
    <script src="{{asset('js/master_page_js/app.min.js')}}"></script>
    <script src="{{asset('js/master_page_js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/master_page_js/dataTables.buttons.min.js')}}"></script>
    <!-- <script src="{{asset('js/master_page_js/dataTables.responsive.min.js')}}"></script> -->
    <script src="{{asset('js/master_page_js/ss.custom.js')}}"></script>
<!-- ************Script of refresh not responsive on navbar****************** -->
<!-- <script src="{{asset('js/popper.min.js')}}"></script> -->
    <script src="{{asset('js/sidebar_menu_masterpage/sidebar.js')}}"></script>
    <script src="{{asset('js/sidebar_menu_masterpage/sidebar.js')}}"></script>
    <!-- Script of _modal Popup -->
    <script src="{{asset('js/model_js/_madal-popup.js')}}"></script>
<!-- ************Script of refresh not responsive on navbar****************** -->

<!-- =======================****==Script Group Master Page==****=============================================== -->

<!-- =====================================++++++**********Footer*************++++++++========================================= -->
        <footer class="main-footer">
                &copy;  2020 | New Tech Soluction

        </footer>
<!-- =====================================++++++**********Footer*************++++++++========================================= -->

</body>
</html>