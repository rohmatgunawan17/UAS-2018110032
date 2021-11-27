<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Sensus Public System </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel='Shortcut icon' href='img/Header.png'>
</head>
<style>
#sidebar-container{
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
    background-color: #333;
    padding: 0;

}
#sidebar-container .profil_image{
	width: 100px;
	height: 100px;
	margin-bottom: 5px;
    margin-top: 20px;
}

#sidebar-container h4{
    margin-left: 10px;
    margin-right: 10px;
	color: #ccc;
	margin-top: 0;
	margin-bottom: 30px;
    position: relative;
}

#sidebar-container a{
	color: #fff;
	display: block;
	width: 100%;
	line-height: 60px;
	text-decoration: none;
	padding-left: 10px;
	box-sizing: border-box;
	transition: 0.5s;
	transition-property: background;
}

#sidebar-container a:hover{
	background: #8ba8ad;
}

#sidebar-container i{
	padding-right: 10px;

}
</style>
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
                        @guest
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
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div class="row" id="body-row">
        {{-- Sidebar --}}
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            {{-- Menu List--}}
            <ul class="list-group">
                <center>
                    <img src="img/Profil.png" class="profil_image" alt="">
                    <h4>Administrator</h4>
                </center>
                <a href="/home"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                <a href="/daftar"><i class="fas fa-th"></i><span>Pendaftaran</span></a>
                <a href="#"><i class="fas fa-cogs"></i><span>Component</span></a>
                <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
                <a href="#"><i class="fas fa-info-circle"></i><span>Informasi</span></a>
                <a href="#"><i class="fas fa-cogs"></i><span>Setting</span></a>
            </ul>
        </div>

        {{-- Sidebar END --}}
        {{-- Content --}}
    <div class="col p-4">
        <div class="row gy-4">
            @yield('content')
        </div>
        {{-- Content END --}}
        <footer class="bg-white py-4 text-dark mt-4">
            <div class="container">
                <h6 class="text-center"> Copyright © 2018110032 - <?php echo date("Y"); ?> - ROHMAT GUNAWAN </h6>
            </div>
        </footer>
    </div>
</div>

</body>
</html>
