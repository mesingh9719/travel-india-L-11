<x-frontend.layout.master>
    <x-ride-search/>
    <section class="how-start how-start-3 sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-sm-9 mx-auto mb-5">
                    <div class="sec-intro text-center">
                        <h2 class="sec-title">How to Get Started</h2>
                        <p>Follow these simple steps to book your ride and enjoy a seamless travel experience with our service.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 start-wrap">
                <div class="col-lg-3 col-sm-6">
                    <div class="step-card text-center">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{ asset('frontend-assets/images/icons/user.png') }}" alt="Create Account">
                        </div>
                        <h3 class="h5 text-capitalize">Create Your Account</h3>
                        <p>Sign up on our platform to get started. It's quick and easy!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="step-card text-center">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{ asset('frontend-assets/images/icons/taxi3.png') }}" alt="Find a Ride">
                        </div>
                        <h3 class="h5 text-capitalize">Find a Ride</h3>
                        <p>Enter your pickup and dropoff locations, date, and time to see available rides.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="step-card text-center">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{ asset('frontend-assets/images/icons/driver2.png') }}" alt="Contact Driver">
                        </div>
                        <h3 class="h5 text-capitalize">Contact the Driver</h3>
                        <p>Get in touch with the driver directly to finalize the details of your ride.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="step-card text-center">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{ asset('frontend-assets/images/icons/trip.png') }}" alt="Enjoy Trip">
                        </div>
                        <h3 class="h5 text-capitalize">Enjoy Your Trip</h3>
                        <p>Sit back, relax, and enjoy your journey with our reliable service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="choose-3 bg-light sec-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-10">
                    <div class="choose-media position-relative">
                        <img class="rounded-4 img-fluid" src="{{asset('frontend-assets/images/choose-s3.png')}}"
                             alt="Car">
                        <div class="popup-box">
                            <a class="venobox" data-vbtype="video" href="https://www.youtube.com/watch?v=Wpz5fhDz5aY"><i
                                    class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="choose-txt ps-lg-5 ms-xl-4 mt-5 mt-lg-0">
                        <h2 class="sec-title mb-4">Why choose us?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea
                            commodo consequat aute
                            irure dolor in reprehenderit.</p>
                        <div class="d-sm-flex mt-5">
                            <div class="choose-info">
                                <h4 class="text-uppercase">OUR MISSION:</h4>
                                <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit
                                    sed
                                    vulputate mi sit.</p>
                            </div>
                            <div class="choose-info">
                                <h4 class="text-uppercase">OUR vision:</h4>
                                <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit
                                    sed
                                    vulputate mi sit.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-5">
                            <a href="#" class="btn btn-primary me-5">Learn more <i class="fa fa-arrow-right"></i></a>
                            <span><img src="{{asset('frontend-assets/images/right-arrow.png')}}" alt></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-sec3 sec-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-sm-8">
                    <h2 class="sec-title">Our Popular Services</h2>
                    <p>Discover our top-rated services designed to meet all your long-distance travel and transportation needs.</p>
                </div>
                <div class="col-xl-7 text-end col-sm-4">
                    <a href="#" class="btn btn-dark">All Services <i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="row pt-2 mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card rounded-3 text-center">
                        <div class="icon icon-sm">
                            <img src="{{ asset('frontend-assets/images/icons/taxi-r-w.png') }}" alt="Outstation Taxi">
                        </div>
                        <h3>Outstation Taxi</h3>
                        <p>Book reliable and comfortable taxis for your long-distance travel needs.</p>
                        <a href="#" class="btn btn-dark mt-3">View Details <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card rounded-3 text-center">
                        <div class="icon icon-sm">
                            <img src="{{ asset('frontend-assets/images/icons/taxi-w.png') }}" alt="Cab Booking">
                        </div>
                        <h3>Cab Booking</h3>
                        <p>Find and book cabs for long-distance travel at competitive prices.</p>
                        <a href="#" class="btn btn-dark mt-3">View Details <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card rounded-3 text-center">
                        <div class="icon icon-sm">
                            <img src="{{ asset('frontend-assets/images/icons/intercity-w.png') }}" alt="Intercity Service">
                        </div>
                        <h3>Intercity Service</h3>
                        <p>Enjoy hassle-free travel between cities with our long-distance intercity cab services.</p>
                        <a href="#" class="btn btn-dark mt-3">View Details <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card rounded-3 text-center">
                        <div class="icon icon-sm">
                            <img src="{{ asset('frontend-assets/images/truck.png') }}" alt="Truck Booking">
                        </div>
                        <h3>Truck Booking</h3>
                        <p>Book trucks for long-distance goods transportation with ease and reliability.</p>
                        <a href="#" class="btn btn-dark mt-3">View Details <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="feature-sec sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 order-1 col-sm-9">
                    <div class="feat-img">
                        <img class="img-fluid" src="{{ asset('frontend-assets/images/choose-s4.png') }}" alt="Feature">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="feat-txt pe-lg-5 me-lg-3">
                        <h2 class="sec-title mb-4">Elevate Your Travel Experience with <br/>Travel India</h2>
                        <p>Experience unparalleled comfort and convenience with Travel India's long-distance travel services. We prioritize your safety and satisfaction, ensuring a smooth journey every time.</p>
                        <div class="row mt-5">
                            <div class="col-lg-6 col-sm-6">
                                <div class="card bg-light rounded-3">
                                    <h4><i class="fa-solid fa-circle-check fa-lg text-primary me-3"></i>Safety First</h4>
                                    <p class="text-xs mb-0">Your safety is our top priority. Travel with peace of mind knowing you're in good hands.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card bg-light rounded-3">
                                    <h4><i class="fa-solid fa-circle-check fa-lg text-primary me-3"></i>Affordable Prices</h4>
                                    <p class="text-xs mb-0">Enjoy competitive pricing for all our long-distance travel services without compromising on quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="fact-sec fact-sec2 mb-3">
        <div class="container">
            <div class="row fact-bg rounded-4" style="background-image: url('images/world.png');">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon rounded-circle"><img
                                src="{{asset('frontend-assets/images/icons/rating.png')}}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="530"
                                      class="purecounter">10</span> +
                            </div>
                            <p>Happy Raider</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon rounded-circle"><img
                                src="{{asset('frontend-assets/images/icons/car-award.png')}}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="10" class="purecounter">10</span>
                                +
                            </div>
                            <p>riding award</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon rounded-circle"><img
                                src="{{asset('frontend-assets/images/icons/taxi-r2.png')}}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="5230"
                                      class="purecounter">10</span> +
                            </div>
                            <p>Total Cars</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon rounded-circle"><img
                                src="{{asset('frontend-assets/images/icons/rating.png')}}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="2220"
                                      class="purecounter">10</span> +
                            </div>
                            <p>5 star reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.layout.master>
