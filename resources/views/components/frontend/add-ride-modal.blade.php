<!-- Add New Ride Modal -->
<div class="modal fade" id="addRideModal" tabindex="-1" aria-labelledby="addRideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRideModalLabel">Add New Ride</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="pickup">Pickup Location</label>
                                <input type="text" class="form-control" id="pickup" name="pickup" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="drop">Drop Location</label>
                                <input type="text" class="form-control" id="drop" name="drop" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="vehicle">Vehicle</label>
                                <select name="vehicle" id="vehicle" class="form-control" required>
                                    <option value="">Select Vehicle</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
