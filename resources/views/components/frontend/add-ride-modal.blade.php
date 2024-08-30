<!-- Add New Ride Modal -->
<div class="modal fade" id="addRideModal" tabindex="-1" aria-labelledby="addRideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{route('add.trip')}}" method="post">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRideModalLabel">Add New Ride</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group required mb-3">
                                <label for="pickup_location" class="form-label">Pickup
                                    Location </label>
                                <input type="text" class="form-control" id="pickup_location"
                                       name="pickup_location" placeholder="Enter pickup location"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group required mb-3">
                                <label for="drop_location" class="form-label">Drop
                                    Location </label>
                                <input type="text" class="form-control" id="drop_location"
                                       name="drop_location" placeholder="Enter drop location"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group required mb-3">
                                <label>Date </label>
                                <input type="date"
                                       class="form-control date-picker hasDatepicker"
                                       placeholder="MM/DD/YY" name="date" id="date" name="date"
                                       value="{{old('date')}}" placeholder="Enter trip Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group required mb-3">
                                <label>Time </label>
                                <input type="time" class="form-control" id="date"
                                       name="time" value="{{old('time')}}"
                                       placeholder="Enter trip Time" required>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group required mb-0">
                                <label for="vehicle_id" class="form-label">Amount </label>
                                <input type="text" class="form-control" id="price"
                                       name="price" placeholder="Enter Amount"
                                       required>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
    </div>
</div>
