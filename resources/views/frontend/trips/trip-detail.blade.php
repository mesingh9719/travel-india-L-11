<x-frontend.layout.master>

    <section class="promo-sec" style="background: url('{{ asset('frontend-assets/images/promo-bg.jpg') }}')no-repeat center center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap text-center">
                        <h2 class="fw-bold text-white text-uppercase">Ride Details</h2>
                        <nav aria-label="breadcrumb w-75 mx-auto">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">All Rides</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $trip->start_trip }} - {{ $trip->end_trip }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main class="main sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <article class="single-car">
                        <img src="{{ asset('frontend-assets/images/car-lg.jpg') }}" alt="Car">
                        <div class="car-header mt-5">
                            <h2 class="fw-bold text-no-wrap">{{ $trip->start_trip }} - {{ $trip->end_trip }}</h2>
                            <div class="d-sm-flex justify-content-between align-items-center my-5">
                                <div class="rider-info d-sm-flex">
                                    <div class="d-flex">
                                        <div class="avatar position-relative">
                                            <img src="{{ $trip->user->profile_image ? asset('images/'.$trip->user->profile_image) : asset('frontend-assets/images/rider-sm.png') }}" class="rounded-circle" alt>
                                            <div class="verified position-absolute"><i class="fa-solid fa-circle-check"></i></div>
                                        </div>
                                        <div class="avatar-info ms-3">
                                            <h4 class="fw-bold mb-0 h5">{{ $trip->user->first_name.' '.$trip->user->last_name }}</h4>
                                            <span class="text-mute"> {{ str_replace(' ago', '', $trip->user->created_at->diffForHumans()) }} with Travel India</span>
                                        </div>
                                    </div>
                                    <div class="ratings ms-sm-5">
                                        <h4 class="fw-bold mb-0 h5">Price: {{ $trip->price ?? '' }}</h4>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary align-self-start">Confirm Ride</a>
                            </div>
                        </div>
                        <h3>specification</h3>
                        <div class="spec-list mt-4">
                            <ul class="car-specfication">
                                <li><span>Brand</span>{{ $trip->vehicle->brand ?? '' }}</li>
                                <li><span>year</span>{{ $trip->vehicle->vehicle_model ?? '' }}</li>
                                <li><span>Seat</span>{{ $trip->vehicle->seat_capacity ?? '' }}</li>
                                <li><span>Type</span>{{ $trip->vehicle->vehicleType->name ?? '' }}</li>
                                <li><span>fuel</span>{{ $trip->vehicle->fuel_type ?? '' }}</li>
                                <li><span>color</span>{{ $trip->vehicle->vehicle_color ?? '' }}</li>
                            </ul>
                        </div>
                        <div class="my-5">
                            <h3>car features</h3>
                            <div class="features mt-4">
                                <ul class="d-flex g-3 justify-conetent-between list-unstyled">
                                    <li>air consitioning</li>
                                    <li>gPS navigation</li>
                                    <li>cruise control</li>
                                    <li>keyless entry</li>
                                    <li>Bluetooth connectivity</li>
                                    <li>child safety locks</li>
                                    <li>rearview camera</li>
                                    <li>adjustable seats</li>
                                    <li>aM/PM radio</li>
                                    <li>power windows</li>
                                    <li>automatic transmission</li>
                                    <li>heated seats</li>
                                </ul>
                            </div>
                        </div>
                    </article>
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
