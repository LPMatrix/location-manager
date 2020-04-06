<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Welcome </title>

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="assets/plugins/bootstrap/dist/css/bootstrap.css"
      rel="stylesheet"
    />

    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <link
      href="assets/plugins/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <link href="assets/plugins/iCheck/skins/flat/_all.css" rel="stylesheet" />

    <link href="assets/plugins/switchery/dist/switchery.css" rel="stylesheet" />

    <link href="assets/plugins/metisMenu/dist/metisMenu.css" rel="stylesheet" />

    <link
      href="assets/plugins/DataTables/media/css/dataTables.bootstrap.css"
      rel="stylesheet"
    />

    <link
      href="assets/plugins/pace/themes/white/pace-theme-flash.css"
      rel="stylesheet"
    />

    <link href="assets/css/style.css" rel="stylesheet" />

    <link href="assets/css/themes/allthemes.css" rel="stylesheet" />

    <link href="assets/css/demo/setting-box.css" rel="stylesheet" />
</head>
<body>
        <div class="all-content-wrapper">
      <header>
        <nav class="navbar navbar-default">
          <div class="search-bar">
            <div class="search-icon">
              <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="Start typing..." />
            <div class="close-search js-close-search">
              <i class="material-icons">close</i>
            </div>
          </div>

          <div class="container-fluid">
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#navbar-collapse"
              >
                <i class="material-icons">swap_vert</i>
              </button>
              <a
                href="javascript:void(0);"
                class="left-toggle-left-sidebar js-left-toggle-left-sidebar"
              >
                <i class="material-icons">menu</i>
              </a>

              <a class="navbar-brand" href="index.html">
                <span class="logo-minimized">LCT</span>
                <span class="logo">Location</span>
              </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li>
                  <a
                    href="javascript:void(0);"
                    class="toggle-left-sidebar js-toggle-left-sidebar"
                  >
                    <i class="material-icons">menu</i>
                  </a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <!-- <li>
                  <a
                    href="javascript:void(0);"
                    class="js-search"
                    data-close="true"
                  >
                    <i class="material-icons">search</i>
                  </a>
                </li> -->

                <li class="dropdown user-menu">
                  <a
                    href="javascript:void(0);"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                  >
                    <img
                      src="assets/images/avatars/face2.jpg"
                      alt="User Avatar"
                    />
                    @if (Auth::user())
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    @endif
                  </a>
                  <!-- <ul class="dropdown-menu">
                    <li class="header">
                      <img
                        src="assets/images/avatars/face2.jpg"
                        alt="User Avatar"
                      />
                      <div class="user">
                        Brandon Sanchez
                        <div class="title">Front-end Developer</div>
                      </div>
                    </li>
                    <li class="body">
                      <ul>
                        <li>
                          <a href="pages/miscellaneous/profile.html">
                            <i class="material-icons">account_circle</i> Profile
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0);">
                            <i class="material-icons">lock_open</i> Change
                            Password
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer">
                      <div class="row clearfix">
                        <div class="col-xs-5">
                          <a
                            href="pages/examples/locked-screen.html"
                            class="btn btn-default btn-sm btn-block"
                            >Log Off</a
                          >
                        </div>
                        <div class="col-xs-2"></div>
                        <div class="col-xs-5">
                          <a
                            href="javascript:void(0);"
                            class="btn btn-default btn-sm btn-block"
                            >Log Out</a
                          >
                        </div>
                      </div>
                    </li>
                  </ul> -->
                </li>

                <li class="pull-right">
                  <a
                    href="javascript:void(0);"
                    class="js-right-sidebar"
                    data-close="true"
                  >
                    <i class="material-icons">more_vert</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

       <aside class="sidebar">
        <nav class="sidebar-nav">
          <ul class="metismenu">
            <li class="title">
              MAIN NAVIGATION
            </li>
            <li class="active">
              <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">dashboard</i>
                <span class="nav-label">Dashboards</span>
              </a>
            </li>
            <li class="">
                <a href="{{route('add-location')}}">
                  <i class="material-icons">book</i>
                  <span class="nav-label">Add Location</span>
                </a>
              </li>
              <li>
                <a href="{{route('view-location')}}">
                  <i class="material-icons">book</i>
                  <span class="nav-label">View Location</span>
                </a>
              </li>
              <li>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                 
                 <i class="material-icons">book</i>
                  <span class="nav-label">Logout</span>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                </a>
              </li>
          </ul>
        </nav>
      </aside>

      @yield('content')


    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>

    <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>

    <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="assets/plugins/pace/pace.js"></script>

    <script src="assets/plugins/screenfull/src/screenfull.js"></script>

    <script src="assets/plugins/metisMenu/dist/metisMenu.js"></script>

    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script src="assets/plugins/switchery/dist/switchery.js"></script>

    <script src="assets/plugins/iCheck/icheck.js"></script>

    <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot-spline/js/jquery.flot.spline.js"></script>
    <script src="assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot/jquery.flot.categories.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>

    <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/export/buttons.print.min.js"></script>

    <script src="assets/plugins/peity/jquery.peity.js"></script>

    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/dashboard/dashboard.js"></script>

    <script src="assets/js/google-analytics.js"></script>

    <script src="assets/js/demo.js"></script>
</body>
</html>
