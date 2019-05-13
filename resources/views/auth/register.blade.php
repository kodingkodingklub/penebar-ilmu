@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col s12 l7 carousel carousel-slider center" style="height:93.5vh;">
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
            {{-- <h4 style="font-family:Buxton Sketch;text-align:center;" class="white-text">Dont have account? register
                here!</h4> --}}
            <div class="row">
                <div class="col s12 l12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title center grey-text text-darken-1"><b>Register</b></span>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="last_name" name="name" type="text"
                                            class="validate{{ $errors->has('name') ? ' is-invalid' : '' }}">
                                        <label for="last_name">Name</label>

                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" name="email" type="email"
                                            class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}">
                                        <label for="email">Email</label>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" name="password" type="password"
                                            class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                        <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="confirmpassword" type="password" class="validate">
                                        <label for="confirmpassword">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <label>
                                            <input type="checkbox" name="agreement" id="agreement" required
                                                class="filled-in">
                                            <span><b>I accept the agreement and terms</b></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row center-align">
                                    <button type="submit" class="btn blue waves-effect">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
