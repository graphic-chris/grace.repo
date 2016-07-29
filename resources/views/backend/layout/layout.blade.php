<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title>GRACE admin | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{!! url('backend/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{!! url('backend/plugins/morris/morris.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! url('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! url('backend/plugins/daterangepicker/daterangepicker-bs3.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! url('backend/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css"/>

    <link href="{!! url('backend/css/style.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! url('backend/css/important.css') !!}" rel="stylesheet" type="text/css"/>


    <script src="{!! url('backend/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
    <script src="{!! url('backend/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/fastclick/fastclick.min.js') !!}"></script>
    <script src="{!! url('backend/js/app.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/sparkline/jquery.sparkline.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/daterangepicker/daterangepicker.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/datepicker/bootstrap-datepicker.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/slimScroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/plugins/chartjs/Chart.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('backend/js/demo.js') !!}" type="text/javascript"></script>
    <link href="{!! url('backend/css/skins/_all-skins.min.css') !!}" rel="stylesheet" type="text/css"/>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<body class="skin-black-light">

<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{!! url(getLang() . '/admin') !!}" class="logo"><b>GRACE</b>admin</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" src="img/flags/us.png">
                            <span class="username">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}"><img alt="" src="img/flags/es.png">{{{ $properties['native'] }}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">{{ $formPost->count() }}</span> </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have {{ $formPost->count() }} notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    @foreach($formPost as $item)
                                        <li>
                                            <a href="#">
                                                <p>{{ $item->subject }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="footer"><a href="{{ url(getLang() . '/admin/form-post') }}">See All Messages</a></li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ gravatarUrl(Sentinel::getUser()->email) }}" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">{{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }}</span> </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ gravatarUrl(Sentinel::getUser()->email) }}" class="img-circle" alt="User Image"/>

                                <p>
                                <p> {{ Sentinel::getUser()->first_name . ' ' . Sentinel::getUser()->last_name }} - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">

                                </div>
                                <div class="col-xs-4 text-center">

                                </div>
                                <div class="col-xs-4 text-center">

                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url(getLang() . '/admin/user/' . Sentinel::getUser()->id) }}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Sign out</a></div>

                            </li>
                        </ul>
                     </li>
                  </ul>
            </div>
        </nav>
    </header>

@include('backend/layout/menu')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
{{--     <button class="btn btn-default" data-toggle="control-sidebar">Toggle Right Sidebar</button> --}}


@yield('content', '<span style="background:red">MISSING CONTENT</span>')


</div><!-- /.content-wrapper -->





@include('backend/layout/footer')

    <!-- The Right Sidebar -->
<aside class="control-sidebar control-sidebar-light">
  <!-- Content of the sidebar goes here -->
  so add some content
</aside>
<!-- The sidebars background -->
<!-- This div must placed right after the sidebar for it to work-->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>