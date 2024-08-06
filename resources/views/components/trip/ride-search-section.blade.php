<div>
    <div>
        <h2 class="fw-7 text-white text-uppercase">Find A Ride</h2>
    </div>
    <form action="{{ route('trip') }}" class="mt-4 pickup-form mt-1">
        <div class="row">
            <div class="col-sm-4 mb-2">
                <label for="pickup" class="text-white">Pickup Location</label>
                <input name="pickup" type="text" id="pickup" placeholder="Enter Pickup Location"
                       class="form-control custom-input" value="{{ ucfirst($_GET['pickup']) ?? '' }}">
            </div>
            <div class="col-sm-4 mb-2">
                <label for="dropoff" class="text-white">Dropoff Location</label>
                <input name="dropoff" type="text" id="dropoff" placeholder="Enter Dropoff Location"
                       class="form-control custom-input" value="{{ ucfirst($_GET['dropoff']) ?? '' }}">
            </div>
            <div class="col-sm-4 mb-2">
                <label for="datetimepicker" class="text-white
            ">Date</label>
                <input name="date" id="datepicker" type="text" class="form-control custom-input"
                       placeholder="Select Date">
            </div>
            <div class="col-sm-4 mb-2">
                <label for="timepicker" class="text-white">Time</label>
                <input name="time" id="timepicker" type="text" class="form-control custom-input"
                       placeholder="Select Time" value="{{ request()->get('time', '') }}">


            </div>
            <div class="col-sm-4">
                <x-select-vehicle/>
            </div>
            <div class="col-sm-4 mb-2">
                <label for="seats" class="text-white">Seats</label>
                <input name="seats" type="number" id="seats" class="form-control custom-input"
                       placeholder="Enter Number of Seats" value="{{ request()->get('seats', 1) }}">
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <div>
                <button class="btn btn-primary">Find A Ride <i
                        class="fa fa-arrow-right"></i></button>
            </div>
        </div>
    </form>
</div>
