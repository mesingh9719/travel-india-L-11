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
                        <div class="search-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <div class="nav-right">
                            <div class="nav-right-btn mt-2">
                                <a href="#" class="theme-btn"><span class="fas fa-taxi"></span>Book A Taxi</a>
                            </div>
                            <div class="sidebar-btn">
                                <button type="button" class="nav-right-link"><i class="far fa-bars-filter"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="search-area">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type Keyword...">
                                <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
            </nav>
        </div>
    </header>
