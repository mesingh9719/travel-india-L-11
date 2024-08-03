<div>
    <div>
        <h2 class="fw-7 text-white text-uppercase">Find A Ride</h2>
    </div>
    <form action="{{ route('trip') }}" class="mt-4 pickup-form mt-1">
        <div class="row">
            <div class="col-sm-3">
                <label for="pickup" class="text-white">Pickup Location</label>
                <input name="pickup" type="text" id="pickup" placeholder="Enter Pickup Location"
                       class="form-control custom-input" value="{{ ucfirst($_GET['pickup']) ?? '' }}">
            </div>
            <div class="col-sm-3">
                <label for="dropoff" class="text-white">Dropoff Location</label>
                <input name="dropoff" type="text" id="dropoff" placeholder="Enter Dropoff Location"
                       class="form-control custom-input" value="{{ ucfirst($_GET['dropoff']) ?? '' }}">
            </div>
            <div class="col-sm-3">
                <label for="datetimepicker" class="text-white
            ">Date</label>
                <input name="date" id="datetimepicker" type="text" class="form-control custom-input"
                       placeholder="Select Date">
            </div>
            <div class="col-sm-3">
                <x-select-vehicle/>
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
