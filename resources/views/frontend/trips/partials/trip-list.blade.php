@if($trips->isEmpty())
    <div class="bg-warning pt-2 pb-2" role="alert">
        <h3>No rides available with the selected criteria.</h3>
    </div>
@endif
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
                <a href="{{ route('trip.detail',$trip->id) }}" class="btn btn-primary bg-primary">Ride Details</a>
            </div>
        </div>
    </article>
@endforeach
