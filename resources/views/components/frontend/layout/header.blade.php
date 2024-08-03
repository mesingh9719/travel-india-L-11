<header class="header header-default">
    <div class="top-bar bg-light">
        <div class="container">
            <div class="top-info d-lg-none">
                <div class="search-bar ms-lg-3">
                    <form class="form position-relative">
                        <span class="location-icon"><i class="fas fa-map-marker-alt text-primary"></i></span>
                        <input class="form-control" type="search" name="search-bar" placeholder="Your location"
                               id="search-bar" aria-label="search-bar">
                        <button class="btn-link" type="submit" aria-label="search-btn">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="top-info d-none d-lg-flex align-items-center justify-content-between row col-lg-8">
                <div class="top-meta col-lg-7 d-flex">
                    <div class="top-social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-skype"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <a href="tel:{{ $basicInfo['site_phone'] ?? '' }}"><i class="fa fa-phone-volume me-3"></i>{{ $basicInfo['site_phone'] ?? '' }}</a>
                </div>
                <div class="col-lg-5">
                    <div class="search-bar ms-lg-3">
                        <!-- Add search bar content here if needed -->
                    </div>
                </div>
            </div>
            <div class="top-connect d-flex align-items-center">
                <div class="language-select d-none d-sm-block">
                    <select id="select">
                        <option value="1">English</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container bg-info">
            <a class="navbar-brand" href="index.html"><img src="{{ $basicInfo['site_logo'] ? asset('images/'.$basicInfo['site_logo']) : asset('frontend-assets/images/logo.png') }}"
                                                           style="width: 150px;" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggle-inner"></span>
            </button>
            <div class="nav-cta d-none d-sm-block order-lg-3">
                <a href="{{url('/login')}}" class="btn btn-outline-dark">Book Now</a>
                <a href="{{url('/register')}}" class="btn btn-primary ms-2">Get Started</a>
            </div>
            <div class="collapse navbar-collapse oder-lg-2" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="services.html">All Services</a></li>
                            <li><a class="dropdown-item" href="single-service.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Car List</a>
                                <ul class="dropdown-menu">
                                    <li><a href="car-listing.html" class="dropdown-item">All Car Lists</a></li>
                                    <li><a class="dropdown-item" href="single-car.html">Car Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">All Riders</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="riders.html">All Riders</a></li>
                                    <li><a class="dropdown-item" href="single-rider.html">Rider Details</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                            <li><a class="dropdown-item" href="sign-up.html">Create Account</a></li>
                            <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                            <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                            <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog List</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-list-sidebar.html">Blog List with Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-list.html">Blog List no Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Grid</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-grid-sidebar.html">Blog Grid with Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-grid.html">Blog Grid no Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Details</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="single-post-sidebar.html">Article with Sidebar</a></li>
                                    <li><a class="dropdown-item" href="single-post.html">Article no Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
