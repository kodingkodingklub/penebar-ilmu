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
                <li>
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li>
                    <a class="dropdown-trigger" data-target="dropdown2">Category<i
                            class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a href="#" style="font-size:14px;"><i class="tiny material-icons">language</i>Web</a></li>
                        <li><a href="#" style="font-size:13px;"><i
                                    class="tiny material-icons left">computer</i>Desktop</a></li>
                        <li><a href="#" style="font-size:14px;"><i
                                    class="small material-icons left">android</i>Mobile</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link">Store</a>
                </li>
                <li>
                    <a href="#" class="nav-link">About</a>
                </li>
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
                    <a class="nav-link dropdown-trigger" href="#" data-target="dropdown4" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    {{-- <ul class="dropdown-content" id="dropdown4">
                        <li class="dropdown-item">
                            <a href="/home" class="nav-link dropdown-item">Dashboard</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link red white-text" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="material-icons left"></i> {{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul> --}}
                </li>
                @endguest
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li>
                    <a href="#" class="nav-link"><i class="material-icons">home</i> Home</a>
                </li>
                <li>
                    <a class="nav-link dropdown-trigger" data-target="dropdown1"><i class="material-icons">list</i>
                        Category <i class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li class="dropdown-item"><a href="#" class="nav-link"><i class="material-icons">language</i>
                                Web Programming</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link"><i class="material-icons">computer</i>
                                Desktop Programming</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link"><i class="material-icons">android</i>
                                Mobile Programming</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="material-icons">store</i> Store</a>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="material-icons">info</i> About</a>
                </li>
                @guest
                <li>
                    <a class="nav-link" href="{{ route('login') }}"><i class="material-icons">input</i>
                        {{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a class="nav-link" href="{{ route('register') }}"><i class="material-icons">person_add</i>
                        {{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="dropdown">
                    <a class="nav-link dropdown-trigger" href="#" data-target="dropdown3" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                        <i class="material-icons">person</i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    {{-- <ul class="dropdown-content" id="dropdown3">
                        <li class="dropdown-item">
                            <a href="/home" class="nav-link dropdown-item"><i class="tiny material-icons">dashboard</i>
                                Dashboard</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link red white-text" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="material-icons left"></i> {{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul> --}}
                </li>
                @endguest
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @if (route('home'))
    <footer class="page-footer teal" style="margin-top:-35px;">
        <div class="footer-copyright">
            <div class="container center">
                Copyright <a class="brown-text text-lighten-3" href="#">&copy; 2019</a>
            </div>
        </div>
    </footer>
    @else
    <footer class="page-footer teal" style="margin-top:-50px;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like
                        it's our full time job. Any amount would help support and continue development on this project
                        and is greatly appreciated.</p>


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
    @endif

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
