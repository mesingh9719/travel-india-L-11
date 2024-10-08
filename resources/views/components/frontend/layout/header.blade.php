<div class="preloader">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<header class="header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{ route('index') }}"> 
                    <img src="{{asset('images/'.$basicInfo['site_logo'] ?? '')}}" alt="logo">
                </a>
            
                <div class="mobile-menu-right">
                @if(auth()->check())
                <a class="navbar-brand" href="#">
                {{auth()->user()->name}}
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="theme-btn">Logout</button>
                </form>
                </a>
                @else
                    <a href="#" class="theme-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    <a href="{{url('register/create')}}" class="theme-btn">Register</a>
                @endif
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contact/create')}}">Contact</a></li>
                    </ul>
                    <div class="nav-right">
                       @if(auth()->check())
                           <a href="#" class="nav-link">{{auth()->user()->name}}</a>
                            <div class="nav-right-btn mt-2">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="theme-btn">Logout</button>
                                </form>
                            </div>
                       @else
                            <div class="nav-right-btn mt-2">
                                <a href="#" class="theme-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                            </div>
                            <div class="nav-right-btn mt-2">
                                <a href="{{url('register/create')}}" class="theme-btn">Register</a>
                            </div>
                       @endif
                    </div>
                </div>

            </div>
        </nav>
    </div>
</header>
@if(!auth()->check())
    <x-login-modal/>
@endif
