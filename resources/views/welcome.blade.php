<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Penebar Ilmu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{url('img/logo-penebarilmu-sementara-baru.png')}}" type="image/x-icon">

        <!-- Materialize css -->
        <link rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}">
        <link rel="stylesheet" href="{{asset('materialize/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('materialize/iconfont/material-icons.css')}}">
    </head>
    <body>
        <nav class="white" role="navigation">
            <div class="nav-wrapper container navbar-toggler-icon">
            <img src="{{url('img/logo-penebarilmu-sementara-baru.png')}}" width="50" height="60" alt="" srcset=""><a id="logo-container" href="/" class="brand-logo" style="font-family:Edwardian Script ITC;margin-left:10px;">Penebar Ilmu</a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li>
                    <a class="dropdown-trigger" data-target="dropdown2">Category<i class="material-icons right">arrow_drop_down</i></a>
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a href="#" style="font-size:14px;"><i class="tiny material-icons">language</i>Web</a></li>
                        <li><a href="#" style="font-size:13px;"><i class="tiny material-icons left">computer</i>Desktop</a></li>
                        <li><a href="#" style="font-size:14px;"><i class="small material-icons left">android</i>Mobile</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link">Store</a>
                </li>
                <li>
                    <a href="#" class="nav-link">About</a>
                </li>
                @if (Route::has('login'))
                <li>
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                <li>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                </li>
                @endif
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li>
                    <a href="#" class="nav-link"> <i class="material-icons">home</i> Home</a>
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
                    <a href="#" class="nav-link"><i class="material-icons">store</i>Store</a>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="material-icons">info</i> About</a>
                </li>
                @if (Route::has('login'))
                <li>
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link"><i class="material-icons">dashboard</i> Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link"><i class="material-icons">input</i> Login</a>
                </li>
                <li>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link"><i class="material-icons">person_add</i> Register</a>
                        @endif
                    @endauth
                </li>
                @endif
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center teal-text text-lighten-5" style="font-family:Edwardian Script ITC;">Penebar Ilmu</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                    <div class="row center">
                        <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Check Our Post</a>
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="parallax"><img src="{{url('img/background1.jpg')}}" alt="Unsplashed background img 1"></div>
        </div>

        <div class="container">
            <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">language</i></h2>
                    <h5 class="center">Web Programming</h5>

                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                </div>
                </div>

                <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">computer</i></h2>
                    <h5 class="center">Desktop Programming</h5>

                    <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                </div>
                </div>

                <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">android</i></h2>
                    <h5 class="center">Mobile Programming</h5>

                    <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                </div>
                </div>
            </div>

            </div>
        </div>

         <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
            </div>
            <div class="parallax"><img src="{{url('img/background2.jpg')}}" alt="Unsplashed background img 2"></div>
        </div>

        <div class="container">
            <div class="section">

            <div class="row">
                <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us</h4>
                <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>

            </div>
        </div>


        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
            </div>
            <div class="parallax"><img src="{{url('img/background3.jpg')}}" alt="Unsplashed background img 3"></div>
        </div>

        <footer class="page-footer teal">
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

        <!-- Material Javascript -->
        <script src="{{asset('materialize/js/jquery.min.js')}}"></script>
        <script src="{{asset('materialize/js/materialize.js')}}"></script>
        <script src="{{asset('materialize/js/init.js')}}"></script>
    </body>
</html>
