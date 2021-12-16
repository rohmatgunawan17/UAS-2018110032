<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | E-Tilang </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel='Shortcut icon' href='img/logo.png'>
</head>
<body>
{{-- <div class="app"> --}}
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <a href="{{ url('/') }}"><img src="img/logo.png" alt="Polri" class="navbar-brand" style="width: 18%; border-radius: 20%;">E-TILANG
        </a>
    </nav>
{{-- </div> --}}
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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
</div>
        <main class="py-4">
            @yield('content')
        </main>
</div>
<footer class="bg-white py-4 text-dark mt-4">
    <div class="container text-center">
        <h6 class="text-center"> Copyright © 2018110032 - <?php echo date("Y"); ?> - ROHMAT GUNAWAN </h6>
    </div>
</footer>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
{{-- <script src="{{ asset('style/js/jquery.min.js') }}"></script>
<script src="{{ asset('style/js/popper.js') }}"></script>
<script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('style/js/main.js') }}"></script> --}}
</html>
