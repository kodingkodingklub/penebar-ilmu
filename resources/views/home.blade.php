@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('inc.sidenav')
        <div class="col s12 l10">
            <h3 class="blue-grey-text text-darken-3">Dashboard</h3>
            <p>Hello {{Auth::user()->name}}! How are you?
                <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dicta doloribus dolorum sed itaque obcaecati libero expedita autem molestiae quo aliquam, voluptas unde dolor sit assumenda, suscipit magni aut blanditiis! </p>
        </div>
    </div>
</div>

@endsection
