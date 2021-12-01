<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Sensus Public System </title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    <link rel='Shortcut icon' href='img/Header.png'>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <a href="{{ url('/home') }}"><img src="img/logo.png" alt="" >
            </a>
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Public System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        {{-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}
                    </ul>
                </div>
            </div>
        </nav>
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                        <div class="custom-menu">
                            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    </button>
                </div>
                    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                        <div class="user-logo">
                            <div class="img" style="background-image: url(images/logo.jpg);"></div>
                            <h3>{{ Auth::user()->name }}</h3>
                        </div>
                    </div>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="/home"><span class="fa fa-home mr-2"></span> Home</a>
                    </li>
                    <li>
                        {{-- adan Notif --}}
                        {{-- <a href="/pendaftaran"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a> --}}
                    </li>
                    <li>
                        <a href="/daftar"><span class="fa fa-table mr-2"></span> Pendaftaran</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-trophy mr-2"></span> Top Review</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-info-circle mr-2"></span> Informasi</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cog mr-2"></span> Settings</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" {{ __('Logout') }}>
                        <span class="fa fa-sign-out mr-2"></span>Sign Out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
                @yield('content')

                {{-- Content END --}}
                <footer class="badge-dark py-4 mt-4">
                    <div class="container">
                        <h6 class="text-center"> Copyright © 2018110032 - <?php echo date("Y"); ?> - ROHMAT GUNAWAN </h6>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('style/js/jquery.min.js') }}"></script>
<script src="{{ asset('style/js/popper.js') }}"></script>
<script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('style/js/main.js') }}"></script>
</html>

