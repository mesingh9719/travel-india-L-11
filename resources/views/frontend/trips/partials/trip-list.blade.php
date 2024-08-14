@if($trips->isEmpty())
    <div class="bg-warning pt-2 pb-2" role="alert">
        <h3>No rides available with the selected criteria.</h3>
    </div>
@endif
@foreach($trips as $trip)
    <div class="card mb-3 trip-container">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-2 text-center">
                    <img src="{{ asset('frontend-assets/img/taxi/car1.jpg') }}" alt="car"
                         class="img-fluid rounded-circle trip-listing-img">
                    <div class="mt-2">
                        <b class="text-capitalize">{{ $trip->vehicle->vehicle_name ?? '' }}</b>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-capitalize">
                    <h4 class="font-weight-bold mb-2 pickup_drop">{{ $trip->start_trip ?? '' }}
                        - {{ $trip->end_trip ?? '' }}</h4>
                    <div class="font-weight-700 font-size-14px mt-2">
                        <span>
                            <i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($trip->date)->format('d-m-Y') }}
                        </span>
                        <span class="ml-10-px">
                            <i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($trip->time)->format('h:i A') }}
                        </span>
                    </div>
                    <div class="mt-2">
                        <span
                            class="badge bg-primary badge-primary mr-10-px">Seats {{ $trip->vehicle->seat_capacity ?? '' }}</span>
                        <span class="badge bg-primary badge-primary">{{ $trip->vehicle->fuel_type ?? '' }}</span>
                        <span
                            class="badge bg-primary badge-primary ml-10-px">Make {{ $trip->vehicle->vehicle_model ?? '' }}</span>
                    </div>
                </div>
                <div class="col-lg-2 text-center driver_info" data-id="{{ $trip->user->id }}">
                    <img src="{{ asset('images/'.$trip->user->profile_image ?? '') }}" alt="car"
                         class="img-fluid rounded-circle trip-listing-img">
                    <div class="mt-2">
                        <b>{{ $trip->user->first_name ?? '' }}</b>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center">
                        <h3 class="font-weight-bold mb-0"> ₹ {{ $trip->price ?? '' }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer border-0">
            <div class="d-flex justify-content-between">
                <div>
                    <table>
                        <tr>
                            <td>
                                @if(!auth()->check())
                                    {{--                                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#loginModal">Negotiate Price</a>--}}
                                    <a href="#" class="btn btn-warning price_negotiate" data-id="{{ $trip->id }}">Negotiate
                                        Price</a>
                                @else
                                    <a href="#" class="btn btn-warning price_negotiate" data-id="{{ $trip->id }}">Negotiate
                                        Price</a>
                                @endif
                            </td>
                            <td class="price_input_container display-hide pl-10-px">
                                <input type="text" class="form-control price_input" data-id="{{ $trip->id }}"
                                       placeholder="Enter Price">
                            </td>
                            <td class="price_submit_container display-hide pl-10-px">
                                <button class="btn btn-success price_submit" data-id="{{ $trip->id }}">Submit</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <a href="{{ route('trip.show', $trip->id) }}" class="btn btn-primary book_now_btn"
                       data-id="{{ $trip->id }}">Book Now</a>
                </div>
            </div>
        </div>
    </div>
@endforeach



