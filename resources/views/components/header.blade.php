<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo-hosting.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#overviews">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Hosting </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="#">Web Hosting </a>
                            <a class="dropdown-item" href="#">WordPress Hosting </a>
                            <a class="dropdown-item" href="#">Cloud Server </a>
                            <a class="dropdown-item" href="#">Reseller Package </a>
                            <a class="dropdown-item" href="#">Dedicated Hosting </a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Domain</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    @can('admin', App\User::class)  
                        <li class="nav-item"><a class="nav-link" href="{{route('backoffice')}}">Back Office</a></li>
                    @endcan
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li class="nav-item"><a class="btn btn-primary log" href="{{route('login')}}"><span>Login</span></a>
                    </li>
                    @else
                    <li class="nav-item"><a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
