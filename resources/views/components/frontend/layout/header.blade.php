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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                                href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                    <div class="nav-right">
                        <div class="nav-right-btn mt-2">
                            <a href="#" class="theme-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                        </div>
                        <div class="nav-right-btn mt-2">
                            <a href="{{url('register/create')}}" class="theme-btn">Register</a>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</header>
@if(!auth()->check())
    <x-login-modal/>
@endif
