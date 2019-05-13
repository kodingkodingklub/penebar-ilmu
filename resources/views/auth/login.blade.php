@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="container-fluid col s12 l7 carousel carousel-slider center"
            style="background:url('img/1.jpg');background-size:cover;height:auto;height:81.3vh;">
            {{-- <div class="carousel carousel-slider center z-depth-3" style="height:87vh;"> --}}
            <div class="carousel-item white-text"
                style="background:url('img/4.jpg');background-repeat:no-repeat;background-size:cover;" href="#one!">
                <h2>First Slide</h2>
                <p class="white-text">This is your first slide</p>
            </div>
            <div class="carousel-item orange white-text"
                style="background:url('img/2.jpg');background-repeat:no-repeat;background-size:cover;" href="#two!">
                <h2>Second Slide</h2>
                <p class="white-text">This is your second slide</p>
            </div>
            <div class="carousel-item yellow white-text"
                style="background-image:url('img/5.jpg');background-repeat:no-repeat;background-size:cover;"
                href="#three!">
                <h2>Third Slide</h2>
                <p class="white-text">This is your third slide</p>
            </div>
            {{-- </div> --}}
        </div>

        <div class="col s12 l5">
            {{-- <h3 style="font-family:Buxton Sketch;text-align:center;" class="white-text">Come on! Join With Us!</h3> --}}
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="center card-title grey-text text-darken-1"><b>Login</b></span>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" name="email" class="validate">
                                        <label for="email">Email</label>

                                        @if ($errors->has('email'))
                                        <span class="" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" name="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <label for="remember">
                                            <input type="checkbox" class="filled-in" id="remember" name="remember"
                                                {{old('remember') ? 'checked' : ''}}>
                                            <span>Remember Me</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 center">
                                        <button type="submit" class="btn waves-effect blue">Login</button>
                                        @if (Route::has('password.request'))
                                        <a class="btn waves-effect" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-action center-align">
                            <a href="#" class="btn red"><i class="fas fa-android"></i> Login with google</a>
                            <br><br>
                            <a href="#" class="btn blue"><i class="material-icons"></i> Login with facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
