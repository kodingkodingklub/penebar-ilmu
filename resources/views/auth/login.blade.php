@extends('layouts.app')

@section('content')
<div class="container">
     
    <div class="row">
        <div class="carousel" id="carousel">
        <a class="carousel-item" href="#one!"><img src="{{url('img/background1.jpg')}}"></a>
        <a class="carousel-item" href="#two!"><img src="{{url('img/background2.jpg')}}"></a>
        <a class="carousel-item" href="#three!"><img src="{{url('img/background3.jpg')}}"></a>
    </div>
        <div class="col s12">
            <div class="col s12">
                <div class="card" style="margin-top: 80px;">
                    <div class="card-panel">
                        <div class="card-title">
                        <h5>Login</h5>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
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
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col right">
                                        <input type="submit" value="Login" class="btn btn-block">
                                    </div>
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
