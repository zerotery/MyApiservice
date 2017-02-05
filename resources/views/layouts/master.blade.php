<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('theme-myapiservice/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('theme-myapiservice/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    {{--<link href="{{ URL::asset('theme-myapiservice/css/plugins/morris.css') }}" rel="stylesheet">--}}

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('theme-myapiservice/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">



    <!-- jQuery -->
    <script src="theme-myapiservice/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="theme-myapiservice/js/bootstrap.min.js"></script>

    {{--<!-- Morris Charts JavaScript -->--}}
    {{--<script src="theme-myapiservice/js/plugins/morris/raphael.min.js"></script>--}}
    {{--<script src="theme-myapiservice/js/plugins/morris/morris.min.js"></script>--}}
    {{--<script src="theme-myapiservice/js/plugins/morris/morris-data.js"></script>--}}

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="col-md-12"><br></div>
@yield('content')
</body>
</html>
<style>
    .vertical-center {
        min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
        min-height: 100vh; /* These two lines are counted as one :-)       */

        display: flex;
        align-items: center;
    }
</style>