@if($trips->isEmpty())
    <div class="bg-warning pt-2 pb-2" role="alert">
        <h3>No rides available with the selected criteria.</h3>
    </div>
@endif
@foreach($trips as $trip)
    <div class="card shadow border-0 mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="car-img">
                    <img src="{{ asset('frontend-assets-11/images/car1.jpg') }}" alt="car">
                </div>
                <div class="flex-grow-1 pl-10 pr-10 text-center">
                    <h3 class="text-capitalize">{{ $trip->start_trip ?? ''}} - {{ $trip->end_trip ?? '' }}</h3>
                    <div class="vehicle-info">
                        
                    </div>
                </div>
                <div>
                    <h3 class="text-capitalize">{{ $trip->price ?? '' }}</h3>
                </div>
            </div>
        </div>
    </div>
@endforeach
