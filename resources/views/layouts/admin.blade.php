<!-- Layouts for back-end and admin pages -->
<!DOCTYPE html>
<html lang="en"> <!-- Specifiying the language of the element's content to English -->
<head>
    <meta charset="utf-8"> <!-- UTF-8 character encoding -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- To display content in the highest mode available in your browser -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Sets the width of the page to follow the screen-width of the device -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />  <!-- To provides simple, convenient CSRF protection -->

    <!-- Title for admin pages -->
    <title>Let's Donate</title>

    <!-- Linkinng fonts url and css file -->
    <link href="{{ url('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Linking bootstrap and css files to style the page -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/sweetalert.css')}}" rel="stylesheet">

    <!-- Some css to style admin pages -->
    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
        .border-fix {
            border-radius: 0px;
        }
    </style>
</head>

<body id="app-layout">
    <nav class="navbar navbar-inverse border-fix">
        <div class="container">
            <div class="navbar-header">
                <!-- For Responsive navBar -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{-- Admin Navbar --}}
                <a class="navbar-brand" href="{{ url('/admin') }}"> Admin Dashbord </a>  {{-- link to the admin home page --}}
            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Visit Front End</a></li>
                    {{-- link to visit front-end from admin back-end --}}
                </ul>

                <!-- Right Side Of Navbar of the admin -->
                <ul class="nav navbar-nav navbar-right"> {{-- link to all the admin pages --}}
                    <li><a href="{{ url('/admin') }}">Users</a></li> {{-- link to admin user page --}}
                    <li><a href="{{ url('/admin/blood_center') }}">Blood Centers</a></li> {{-- link to admin blood center page --}}
                    <li><a href="{{ url('/admin/camp') }}">Camps</a></li> {{-- link to admin camp page --}}
                    <li><a href="{{ url('/admin/blood_request') }}">Blood Requests</a></li> {{-- link to admin blood requests page --}}
                    <li><a href="{{ url('/admin/announcement') }}">Announcements</a></li> {{-- link to admin announcement page --}}
                    <li><a href="{{ url('/admin/support') }}">Admin Support</a></li> {{-- link to admin support page --}}
                    <li><a href="{{ url('/logout') }}">Log Out</a></li> {{-- link to log out page --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        {{-- admin content loads here --}}
        @yield('content')
    </div>

    <!-- JavaScript Links -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/sweetalert.min.js') }}"></script>

    <!-- PHP packages -->
    @include('Partials.sweetalert')
    @include('flashy::message')
</body>
</html>
