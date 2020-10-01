<!-- Layouts for frond-end pages -->
<!DOCTYPE html>
<html lang="en"> <!-- Specifiying the language of the element's content to English -->
<head>
    <meta charset="utf-8"> <!-- UTF-8 character encoding -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- To display content in the highest mode available in your browser -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Sets the width of the page to follow the screen-width of the device -->

    <!-- Title for viewer pages -->
    <title> Let's Donate </title>

    <!-- Linkinng fonts url and css file -->
    <link href="{{ url('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Linking bootstrap and css files to style the page -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/hint.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Some css for navigation bar -->
    <style>
        .nav-style {
            border-right: 0px;
             border-left: 0px;
             border-top: 0px;
         }
    </style>
</head>

<body id="app-layout">
    <div class="container border" >
    <nav class="header-nav navbar navbar-default nav-style">
        <div class="navbar-header">
            <!-- For Responsive navBar -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image- left side of navbar -->
            <a class="navbar-brand" href="{{ url('/') }}">
              <img class="logo" src="{{ url('images/letsdonatelogo.png') }}"> {{-- display logo of the website --}}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="spark-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right"> {{-- Link to all the guest pages --}}
                <li><a href="{{ url('/') }}">Home</a></li> {{-- link to home page --}}
                <li><a href="{{ url('/donors') }}">Donors</a></li> {{-- link to donors page --}}
                <li><a href="{{ url('/camps') }}">Camps</a></li> {{-- link to camps page --}}
                <li><a href="{{ url('/blood_center') }}">Blood Centers</a></li> {{-- link to blood donors page --}}
                <li><a href="{{ url('/request_blood') }}">Request Blood</a></li> {{-- link to request blood page --}}
                <li><a href="{{ url('/blood_requests') }}">Blood Requests</a></li> {{-- link to blood requests page --}}
                <li><a href="{{ url('/supports') }}">Contact</a></li> {{-- link to contact page --}}
                 <!-- Checking Authentication -->
                @if (Auth::guest()) {{-- if not logged in --}}
                    <li><a href="{{ url('/login') }}">Login</a></li> {{-- link to login page --}}
                    <li><a href="{{ url('/register') }}">Register</a></li> {{-- link to register page --}}
                @else {{-- if logged in --}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ ucwords(Auth::user()->name) }} <span class="caret"></span> {{-- shows name when logged in and default drop down --}}
                        </a>
                        <ul class="dropdown-menu" role="menu"> {{-- drop down menu for the more pages --}}
                            @if (Auth::user()->is_admin == 1) {{-- if the user is admin, only shows link to admin panel --}}
                             <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-user-secret"></i> Admin Panel</a></li>
                            @endif
                            <li><a href="{{ url('/user_home') }}"><i class="fa fa-btn fa-envelope"></i>Messages</a></li> {{-- link to user-home page --}}
                            <li><a href="{{ url('/password_change') }}"><i class="fa fa-btn fa-asterisk"></i>Change Password</a></li> {{-- link to password change page --}}
                            <li><a href="{{ url('/user_profile') }}"><i class="fa fa-btn fa-user "></i>User Profile</a></li> {{-- link to user profile page --}}
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li> {{-- link to log out --}}
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    </div>

    <div class="background">
        <div class="container content-min">
            {{-- all the content loads here in the layout except admin pages content --}}
            @yield('content')
            <hr>
             <div class="pull-right footer-nav"> {{-- footer of the layout --}}
                <a href="{{ url('') }}" class="footer-nav-item">Home</a> {{-- link to home page --}}
                <a href="{{ url('api') }}" class="footer-nav-item">API</a> {{-- link to API page --}}
                <a href="{{ url('supports') }}" class="footer-nav-item">Contact</a> {{-- link to contact page --}}
            </div>
        </div>
    </div>

    <!-- JavaScript Links -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/sweetalert.min.js') }}"></script>
    <script src="{{ url('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>

    <!-- PHP packages -->
    @include('Partials.sweetalert')
    @include('flashy::message')
</body>
</html>

