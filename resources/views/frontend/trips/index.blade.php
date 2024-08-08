<x-frontend.layout.master>

    <div class="site-breadcrumb" style="background: url('{{ asset('frontend-assets/img/breadcrumb/01.jpg') }}')">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $_GET['pickup'] ?? '' }} - {{ $_GET['dropoff'] ?? '' }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li><span>Finding Rides</span></li>
            </ul>
        </div>
    </div>

    <section class="promo-sec" style="background: url('{{ asset('frontend-assets/images/promo-bg.jpg') }}')no-repeat center center / cover;">
        <div class="container">
            <x-trip.ride-search-section/>
        </div>
    </section>


    <main class="main sec-padding">
        <div class="container">
            <div>
                <h2 class="sub-title border-bottom pb-4">Available Rides </h2>
                <p class="text-muted">{{ $trips->count() }} rides available with the selected criteria.</p>
                <h4 class="text-muted text-capitalize">{{ $_GET['pickup'] ?? '' }} - {{ $_GET['dropoff'] ?? '' }}</h4>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="car-listings">
                        @include('frontend.trips.partials.trip-list')
                        <div class="pager mt-5">
                            <a href="#" class="prev-page"><i class="fa fa-angle-left"></i></a>
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next-page"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <aside class="sidebar">

                        <div class="widget">
                            <h3 class="widget-title">Service Category</h3>
                            <ul>
                                <li><a href="#">ride sharing</a></li>
                                <li><a href="#">Family Trip</a></li>
                                <li><a href="#">shuttle trip</a></li>
                                <li><a href="#">Intercity service</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>


</x-frontend.layout.master>
