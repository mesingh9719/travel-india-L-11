<section class="banner" style="background-image: url('{{ asset('frontend-assets/images/taxi-banner.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="banner-txt">
                    <div class="text-center">
                        {{--                        <p class="lead text-info">Book your ride today! Get <sup class="bg-primary text-info p-2 rounded-3">10% off</sup></p>--}}
                        <h1 class="text-info mt-4">Outstation Cab Booking at the Lowest Price</h1>
                    </div>
                    <form action="#" class="mt-4 pickup-form mt-5">
                        <div class="card p-2 border-0">
                            <div class="d-flex justify-content-between text-left mb-1">
                                <div class="flex-fill m-2">
                                    <label for="pickup" class="text-white">Pickup Location</label>
                                    <input type="text" id="pickup" placeholder="Enter Pickup Location"
                                           class="form-control custom-input">
                                </div>
                                <div class="flex-fill m-2">
                                    <label for="dropoff" class="text-white">Dropoff Location</label>
                                    <input type="text" id="dropoff" placeholder="Enter Dropoff Location"
                                           class="form-control custom-input">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="flex-fill m-2" style="width: 147px;">
                                    <label for="datetimepicker" class="text-white">Date</label>
                                    <input id="datetimepicker" type="text" class="form-control custom-input"
                                           placeholder="Select Date">
                                </div>
                                <div class="flex-fill m-2">
                                    <label for="select_vehicle" class="text-white">Select Vehicle</label>
                                    <select name="select_vehicle" id="select_vehicle" class="form-control custom-input">
                                        <option value="1">Select Vehicle</option>
                                        @foreach($vehicleTypes as $vehicleType)
                                            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="text-center p-2">
                                <a href="{{url('/car-list')}}" class="btn btn-warning rounded-2 w-100">Find A Ride <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
