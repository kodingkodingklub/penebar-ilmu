<div class="col s12 l2">
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background brown">

                </div>
                <a href="#user"><img src="{{url('img/IMG-20170825-WA0008.jpg')}}" class="circle" alt=""></a>
                <a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
                <a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
            </div>
        </li>
        <li>
            <a href="#" class="waves-effect"><i class="material-icons">dashboard</i> Dashboard</a>
        </li>
        <li>
            <a href="#" class="waves-effect"><i class="material-icons">book</i> Post</a>
        </li>
        <li>
            <a href="#" class="waves-effect"><i class="material-icons">store</i> Store</a>
        </li>
        <li>
            <a href="#" class="waves-effect"><i class="material-icons">person</i> Profile</a>
        </li>
        <li style="margin-top:200px;">
            <a class="nav-link red white-text" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left white-text">input</i> {{ __('Logout') }}
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>
    <a href="#" data-target="slide-out" class="white-text sidenav-trigger btn waves-effect"><i
            class="material-icons">menu</i></a>
</div>
