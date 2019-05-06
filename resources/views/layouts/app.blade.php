<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Penebar Ilmu</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.7.2-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-5.7.2-web/css/brands.css')}}">

    <link rel="shortcut icon" href="{{url('img/logo-penebarilmu-sementara-baru.png')}}" type="image/x-icon">

    <!-- Materialize css -->
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('materialize/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('materialize/iconfont/material-icons.css')}}">
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container navbar-toggler-icon">
            <img src="{{url('img/logo-penebarilmu-sementara-baru.png')}}" width="50" height="60" alt="" srcset=""><a
                id="logo-container" href="/" class="brand-logo"
                style="font-family:Edwardian Script ITC;margin-left:10px;">Penebar Ilmu</a>
            <ul class="right hide-on-med-and-down">
                @guest
                <li>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>

            <ul id="nav-mobile" class="sidenav">
                @guest
                <li>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer teal" style="margin-top:-20px;">
            <div class="container">
            <div class="row">
                <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                </div>
                <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
                </div>
                <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
                </div>
            </div>
            </div>
            <div class="footer-copyright">
            <div class="container">
            Copyright <a class="brown-text text-lighten-3" href="#">&copy; 2019</a>
            </div>
            </div>
        </footer>
    <!-- Scripts -->
    <script src="{{asset('materialize/js/jquery.min.js') }}">
    </script>
    <script src="{{asset('materialize/js/materialize.js')}}">
    </script>
    <script src="{{asset('materialize/js/init.js')}}"></script>
<script src="{{asset('fontawesome-free-5.7.2-web/js/all.js')}}"></script>
<script src="{{asset('fontawesome-free-5.7.2-web/js/brands.js')}}"></script>
</body>

</html>
