<x-frontend.layout.master>

    <section class="promo-sec" style="background: url('{{ asset('frontend-assets/images/promo-bg.jpg') }}')no-repeat center center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap text-center">
                        <h2 class="fw-bold text-white text-uppercase">about us</h2>
                        <nav aria-label="breadcrumb w-75 mx-auto">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pe-xl-5 col-lg-5">
                    <div class="choose-media position-relative pe-sm-5">
                        <img class="img-fluid" src="{{ asset('frontend-assets/images/about.jpg') }}" alt="Car">
                        <div class="popup-box">
                            <a class="venobox" data-vbtype="video" href="https://www.youtube.com/watch?v=Lc0CXDwW2a0"><i class="fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="about-txt mt-5 mt-lg-0">
                        <span class="dot-title">ABOUT US</span>
                        <h2 class="text-uppercase sec-title mb-4">Providing Reliable Services</h2>
                        <p>Travel India is committed to offering top-notch long-distance travel solutions. Our focus is on delivering a safe, comfortable, and affordable journey for all our customers. Whether you need a taxi, cab, or truck, we ensure a seamless and satisfactory travel experience every time.</p>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <div class="card bg-white">
                                    <h5>OUR MISSION:</h5>
                                    <p>To offer exceptional long-distance travel services that prioritize safety, comfort, and affordability, ensuring our customers reach their destinations with ease and satisfaction.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card bg-white">
                                    <h5>OUR VISION:</h5>
                                    <p>To be the leading provider of long-distance travel solutions in India, continuously innovating and improving our services to meet the evolving needs of our customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row mt-5 pt-4">
                <div class="about-details">
                    <h2 class="sec-title text-uppercase mb-4">How We <span class="text-primary">Travel</span> Together</h2>
                    <p>At Travel India, we are dedicated to providing a seamless travel experience for your long-distance journeys. Our comprehensive services ensure that every aspect of your trip is handled with care and efficiency, from booking to arrival. Our goal is to make your travel as smooth and enjoyable as possible.</p>
                    <p>We take pride in our user-friendly platform that allows you to easily search for and book outstation cabs, taxis, and trucks. Our transparent pricing ensures you know exactly what to expect, and our direct contact feature connects you with drivers to address any needs or concerns you might have. <a href="#">Explore our services</a> to see how we can make your next trip exceptional. With Travel India, your long-distance travel is in good hands.</p>
                </div>
            </div>
        </div>
    </section>


    <div class="fact-sec about-fact mb-4">
        <div class="container">
            <div class="row fact-bg bg-primary">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon"><img src="{{ asset('frontend-assets/images/icons/like.png') }}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="530" class="purecounter">10</span> +
                            </div>
                            <p>5 star reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon"><img src="{{ asset('frontend-assets/images/icons/rider-b.png') }}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="10" class="purecounter">10</span> +
                            </div>
                            <p>happy rider</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon"><img src="{{ asset('frontend-assets/images/icons/car-b.png') }}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="5230" class="purecounter">10</span> +
                            </div>
                            <p>Total Cars</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center fact-card">
                        <div class="fact-icon"><img src="{{ asset('frontend-assets/images/icons/award-b.png') }}" alt="Rating"></div>
                        <div class="fact-txt ms-4">
                            <div class="count-box">
                                <span data-purecounter-start="0" data-purecounter-end="2220" class="purecounter">10</span> +
                            </div>
                            <p>5 star reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-frontend.layout.master>
