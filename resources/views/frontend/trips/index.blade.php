<x-frontend.layout.master>

    <section class="promo-sec" style="background: url('{{ asset('frontend-assets/images/promo-bg.jpg') }}')no-repeat center center / cover;">
        <div class="container">
            <x-trip.ride-search-section/>
        </div>
    </section>


    <main class="main sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="car-listings">
                        @foreach($trips as $trip)
                            <article class="car-entry d-md-flex border p-3">
                                <a href="#" class="car-media bg-cover" style="background-image: url('{{ asset('frontend-assets/images/car1.jpg') }}');"> </a>
                                <div class="car-content">
                                    <h3 class="car-title text-no-wrap fw-bold"><a href="#">{{ $trip->start_trip }} - {{ $trip->end_trip }}</a></h3>
                                    <ul class="car-specfication">
                                        <li><span>Brand</span>{{ $trip->vehicle->brand ?? '' }}</li>
                                        <li><span>year</span>{{ $trip->vehicle->vehicle_model ?? '' }}</li>
                                        <li><span>Seat</span>{{ $trip->vehicle->seat_capacity ?? '' }}</li>
                                        <li><span>Type</span>{{ $trip->vehicle->vehicleType->name ?? '' }}</li>
                                        <li><span>fuel</span>{{ $trip->vehicle->fuel_type ?? '' }}</li>
                                        <li><span>color</span>{{ $trip->vehicle->vehicle_color ?? '' }}</li>
                                    </ul>
                                    <div class="rider-info d-sm-flex my-4">
                                        <div class="d-flex">
                                            <div class="avatar position-relative">
                                                <img src="{{ $trip->user->profile_image ? asset('images/'.$trip->user->profile_image) : asset('frontend-assets/images/rider-sm.png') }}" class="rounded-circle" alt>
                                                <div class="verified position-absolute"><i class="fa-solid fa-circle-check"></i></div>
                                            </div>
                                            <div class="avatar-info ms-3">
                                                <h4 class="fw-bold mb-0 h5">{{ $trip->user->first_name.' '.$trip->user->last_name }}</h4>
                                                <span class="text-mute">
                                                    {{ str_replace(' ago', '', $trip->user->created_at->diffForHumans()) }} with Travel India
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ratings ms-sm-5">
                                            <h4 class="fw-bold mb-0 h5">Price: {{ $trip->price ?? '' }}</h4>
                                        </div>
                                    </div>
                                    <div class="car-cta mt-3">
                                        <a href="single-car.html" class="btn">
                                            Taxi Details
                                        </a>
                                        <a href="book-ride.html" class="btn btn-primary">Confirm Ride</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
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
                        <div class="widget search-widget">
                            <form action="#" class="position-relative">
                                <input type="search" placeholder="Search here..">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
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
