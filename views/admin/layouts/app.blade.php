<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}:@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>

    <!-- ckeditor CDN -->
    <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
    <script>
        let config = CKEDITOR.config;
        config.height = 75;
        config.basicEntities = false;
        config.widgets = 'image';
        config.removeButtons = 'Underline,JustifyCenter';
    </script>

    <!-- Styles -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/dashboard.css') }}" rel="stylesheet">

    @yield('page-css')

</head>
<body>
<div id="app">
    <header class="header">
        <!-- Sidebar navigation -->
        @guest

        @else
            <div id="slide-out" class="side-nav">
                <ul class="custom-scrollbar list-unstyled">
                    <li>
                        <div class="admin dropdown show">
                            <a class="dropdown-toggle" href="#" id="DropdownMenuLink1" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="admin-image" src="/images/man2.png" alt="">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu profile-dropdown" aria-labelledby="DropdownMenuLink1">
                                <a class="dropdown-item" href="/user_management/{{Auth::user()->user_id}}">Profile</a>

                                <a class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            </div>
                        </div>
                    </li>

                    <!-- Side navigation links -->
                    <li>
                        <ul class="list-unstyled dashboard-nav">
                            <li><a class="{{ Request::segment(1) === 'home' ? 'active' : null }}"
                                   href="{{ url('/home') }}">Dashboard</a></li>
                            <li><a class="{{ Request::segment(1) === 'organisation_management' ? 'active' : null}}"
                                   href="/organisation_management">Clients</a></li>
                            <li><a class="{{ Request::segment(1) === 'user_management' ? 'active' : null}}"
                                   href="/user_management">Users</a></li>
                            <li><a class="{{ Request::segment(1) === 'course_management' ? 'active' : null}}"
                                   href="/course_management">Courses</a></li>
                            <li><a class="{{ Request::segment(1) === 'bundle_management' ? 'active' : null}}"
                                   href="/bundle_management">Bundles</a></li>
                            <li><a class="{{ Request::segment(1) === 'console' ? 'active' : null}}"
                                   href="/console/news">News</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endguest

        <!-- main navigation -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a href="{{ url('/') }}"><img src="/images/logo-v2.png" class="img-fluid"></a>
            </div>
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><img class="admin-image" src="/images/man2.png"
                                                                           alt="">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown"
                             aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/user_management/{{Auth::user()->user_id}}">Profile</a>
                            <a class="dropdown-item"
                               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('departure') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>

    @yield('content')

</div>

<!-- Scripts -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/js/mdb.min.js') }}"></script>
<script src="{{ asset('admin/js/all.js') }}"></script>

@yield('page-script')

</body>
</html>
