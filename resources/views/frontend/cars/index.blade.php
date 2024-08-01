
<x-frontend.layout.master>

<section class="banner" style="background-image: url('frontend-assets/images/taxi-banner.jpg');">
<div class="container">
<div class="row">
<div class="col-lg-8 mx-auto">
<div class="banner-txt text-center">
<p class="lead text-info">Book your rider Today! Got <sup class="bg-primary text-info p-2 rounded-3  ">10% off</sup></p>
<h1 class="text-info mt-4">Looking for new Destination? Get a Lift or find a Seat.</h1>
<form action="#" class="mt-4 pickup-form mt-5">
<div class="d-sm-flex align-items-center justify-content-between">
<div class="pickup-lc form-group">
<input type="search" placeholder="Pickup location">
</div>
<div class="drop-lc form-group">
<input type="search" placeholder="Drop location">
</div>
<a href="{{url('/car-list')}}" class="btn btn-primary rounded-2">Find a Taxi <i class="fa fa-arrow-right"></i></a>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<section class="how-start how-start-3 sec-padding">
<div class="container">
<div class="row">
<div class="col-xl-5 col-sm-9 mx-auto mb-5">
<div class="sec-intro text-center">
<h2 class="sec-title">how to get started</h2>
<p>Suspendisse ultrice gravida dictum fusce placerat ultricies fusce integer quis auctor elit sed
vulputate mi sit.</p>
</div>
</div>
</div>
<div class="row mt-5 start-wrap">
<div class="col-lg-3 col-sm-6">
<div class="step-card text-center">
<div class="card-icon">
<img class="img-fluid" src="{{asset('frontend-assets/images/icons/user.png')}}" alt="user">
</div>
<h3 class="h5 text-capitalize">create your account</h3>
<p>Suspendisse ultrice
gravida fusce placerat
ultricies integer quis.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="step-card text-center">
<div class="card-icon">
<img class="img-fluid" src="{{asset('frontend-assets/images/icons/taxi3.png')}}" alt="user">
</div>
<h3 class="h5 text-capitalize">Find a Taxi</h3>
<p>Suspendisse ultrice
gravida fusce placerat
ultricies integer quis.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="step-card text-center">
<div class="card-icon">
<img class="img-fluid" src="{{asset('frontend-assets/images/icons/driver2.png')}}" alt="user">
</div>
<h3 class="h5 text-capitalize">meet your driver</h3>
<p>Suspendisse ultrice
gravida fusce placerat
ultricies integer quis.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="step-card text-center">
<div class="card-icon">
<img class="img-fluid" src="{{asset('frontend-assets/images/icons/trip.png')}}" alt="user">
</div>
<h3 class="h5 text-capitalize">enjoy your trip</h3>
<p>Suspendisse ultrice
gravida fusce placerat
ultricies integer quis.</p>
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
<img class="rounded-4 img-fluid" src="{{asset('frontend-assets/images/choose-s3.png')}}" alt="Car">
<div class="popup-box">
<a class="venobox" data-vbtype="video" href="https://www.youtube.com/watch?v=Wpz5fhDz5aY"><i class="fa-solid fa-play"></i></a>
</div>
</div>
</div>
<div class="col-lg-7">
<div class="choose-txt ps-lg-5 ms-xl-4 mt-5 mt-lg-0">
<h2 class="sec-title mb-4">Why choose us?</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
commodo consequat aute
irure dolor in reprehenderit.</p>
<div class="d-sm-flex mt-5">
<div class="choose-info">
<h4 class="text-uppercase">OUR MISSION:</h4>
<p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed
vulputate mi sit.</p>
</div>
<div class="choose-info">
<h4 class="text-uppercase">OUR vision:</h4>
<p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed
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
<h2 class="sec-title">our popular services</h2>
<p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed vulputate mi
sit.</p>
</div>
<div class="col-xl-7 text-end col-sm-4">
<a href="#" class="btn btn-dark">All Services <i class="fa fa-arrow-right ms-2"></i></a>
</div>
</div>
<div class="row pt-2 mt-5">
<div class="col-lg-3 col-sm-6">
<div class="service-card rounded-3 text-center">
<div class="icon icon-sm"><img src="{{asset('frontend-assets/images/icons/ride-w.svg')}}" alt></div>
<h3>Ride Sharing</h3>
<p>In pellentesque massa vida placerat duis. Cursus sit amet dictum sit amet.</p>
<a href="#" class="btn btn-dark mt-3">View Details <i class="fa fa-arrow-right ms-2"></i></a>
</div>
</div> 
<div class="col-lg-3 col-sm-6">
<div class="service-card rounded-3 text-center">
<div class="icon icon-sm"><img src="{{asset('frontend-assets/images/icons/taxi-r-w.png')}}" alt></div>
<h3>taxi reserve</h3>
<p>In pellentesque massa vida placerat duis. Cursus sit amet dictum sit amet.</p>
<a href="#" class="btn btn-dark mt-3">View Details <i class="fa fa-arrow-right ms-2"></i></a>
</div>
</div> 
<div class="col-lg-3 col-sm-6">
<div class="service-card rounded-3 text-center">
<div class="icon icon-sm"><img src="{{asset('frontend-assets/images/icons/taxi-w.png')}}" alt></div>
<h3>taxi reserve</h3>
<p>In pellentesque massa vida placerat duis. Cursus sit amet dictum sit amet.</p>
<a href="#" class="btn btn-dark mt-3">View Details <i class="fa fa-arrow-right ms-2"></i></a>
</div>
</div> 
<div class="col-lg-3 col-sm-6">
<div class="service-card rounded-3 text-center">
<div class="icon icon-sm"><img src="{{asset('frontend-assets/images/icons/intercity-w.png')}}" alt></div>
<h3>intercity service</h3>
<p>In pellentesque massa vida placerat duis. Cursus sit amet dictum sit amet.</p>
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
<img class="img-fluid" src="{{asset('frontend-assets/images/choose-s4.png')}}" alt="Feature">
</div>
</div>
<div class="col-lg-6 order-lg-1 order-2">
<div class="feat-txt pe-lg-5 me-lg-3">
<h2 class="sec-title mb-4">elevate your taxi experience <span class="highlighted">with
ride</span>-sharing.</h2>
<p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed vulputate
mi sit. Auctor eu
augue ut lectus arcu bibendum at varius vel.</p>
<div class="row mt-5">
<div class="col-lg-6 col-sm-6">
<div class="card bg-light rounded-3">
<h4><i class="fa-solid fa-circle-check fa-lg text-primary me-3"></i>safety first</h4>
<p class="text-xs mb-0">Gravida dictum fusce placerat ultricies integer quis auctor elit.</p>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="card bg-light rounded-3">
<h4><i class="fa-solid fa-circle-check fa-lg text-primary me-3"></i>affordable prices</h4>
<p class="text-xs mb-0">Gravida dictum fusce placerat ultricies integer quis auctor elit.</p>
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
<div class="fact-icon rounded-circle"><img src="{{asset('frontend-assets/images/icons/rating.png')}}" alt="Rating"></div>
<div class="fact-txt ms-4">
<div class="count-box">
<span data-purecounter-start="0" data-purecounter-end="530" class="purecounter">10</span> +
</div>
<p>Happy Raider</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="d-flex align-items-center fact-card">
<div class="fact-icon rounded-circle"><img src="{{asset('frontend-assets/images/icons/car-award.png')}}" alt="Rating"></div>
<div class="fact-txt ms-4">
<div class="count-box">
<span data-purecounter-start="0" data-purecounter-end="10" class="purecounter">10</span> +
</div>
<p>riding award</p>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="d-flex align-items-center fact-card">
<div class="fact-icon rounded-circle"><img src="{{asset('frontend-assets/images/icons/taxi-r2.png')}}" alt="Rating"></div>
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
<div class="fact-icon rounded-circle"><img src="{{asset('frontend-assets/images/icons/rating.png')}}" alt="Rating"></div>
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
</section>

</x-frontend.layout.master>
