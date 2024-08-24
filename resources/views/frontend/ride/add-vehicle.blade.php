<x-frontend.layout.master>
    <main class="main">
        <div class="user-profile mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <x-frontend.sidebar.sidebar />
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-profile-card">
                                        <h6 class="user-profile-card-title">Add Vehicle</h6>
                                        <div class="user-profile-form p-4">
                                            <form action="#">
                                                <div class="row">
                                                <div class="col-md-12 text-warning">
                                                    <h6 class="text-warning">Vehicle Details</h6>
                                                    <hr/>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="carMake" class="form-label">Vehicle Name</label>
                                                            <input type="text" class="form-control" id="vehicle_name"
                                                                name="vehicle_name" value="{{old('vehicle_name')}}"
                                                                placeholder="Vehicle Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="carMake" class="form-label">Vehicle
                                                                Number</label>
                                                            <input type="text" class="form-control" id="vehicle_number"
                                                                name="vehicle_number" value="{{old('vehicle_number')}}"
                                                                placeholder="Vehicle Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="carModel" class="form-label">Vehicle
                                                                Model</label>
                                                            <input type="text" class="form-control" id="vehicle_model"
                                                                name="vehicle_model" value="{{old('vehicle_model')}}"
                                                                placeholder="Vehicle Model" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Brand</label>
                                                            <input type="text" class="form-control" id="brand"
                                                                name="brand" value="{{old('brand')}}"
                                                                placeholder="Vehicle Brand" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="fuel_type" class="form-label">Fuel Type</label>
                                                            <select class="form-control form-select" id="fuel_type"
                                                                name="fuel_type" required>
                                                                <option value="" disabled selected>Select fuel type
                                                                </option>
                                                                <option value="petrol">Petrol</option>
                                                                <option value="diesel">Diesel</option>
                                                                <option value="electric">Electric</option>
                                                                <option value="hybrid">Hybrid</option>
                                                                <option value="gas">Gas</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>RC Number</label>
                                                            <input type="text" class="form-control" id="rc_number"
                                                                name="rc_number" value="{{old('rc_number')}}"
                                                                placeholder="RC Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>RC Image</label>
                                                            <input type="file" class="form-control" id="rc_image"
                                                                name="rc_image"
                                                                placeholder="RC Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Insurance Number</label>
                                                            <input type="text" class="form-control"
                                                                id="insurance_number" name="insurance_number"
                                                                value="{{old('insurance_number')}}"
                                                                placeholder="Insurance Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Insurance Image</label>
                                                            <input type="file" class="form-control" id="insurance_image"
                                                                name="insurance_image"
                                                                placeholder="Insurance Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Fitness Certificate Number</label>
                                                            <input type="text" class="form-control"
                                                                id="fitness_certificate_number"
                                                                name="fitness_certificate_number"
                                                                value="{{old('fitness_certificate_number')}}"
                                                                placeholder="Fitness Certificate Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Seat Capacity</label>
                                                            <input type="number" class="form-control" id="seat_capacity"
                                                                name="seat_capacity" value="{{old('seat_capacity')}}"
                                                                placeholder="Seat Capacity" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Vehicle Permit Number</label>
                                                            <input type="number" class="form-control"
                                                                id="vehicle_permit_number" name="vehicle_permit_number"
                                                                value="{{old('vehicle_permit_number')}}"
                                                                placeholder="Vehicle Permit Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Vehicle Permit Image</label>
                                                            <input type="file" class="form-control"
                                                                id="vehicle_permit_image" name="vehicle_permit_image"
                                                                placeholder="Vehicle Permit Image" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Vehicle Image</label>
                                                            <input type="file" class="form-control" id="vehicle_image"
                                                                name="vehicle_image[]"
                                                                placeholder="Vehicle Image" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-warning">
                                                    <h6 class="text-warning"> Driver Details</h6>
                                                    <hr/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>DL Number</label>
                                                            <input type="text" class="form-control"
                                                                id="dl_number" name="dl_number" value="{{old('dl_number')}}"
                                                                placeholder="DL Number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>DL Image</label>
                                                            <input type="file" class="form-control" id="vehicle_image"
                                                                name="dl_image"
                                                                placeholder="DL Image" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group my-3 mt-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-warning my-3">Save Changes <i class="fas fa-paper-plane"></i> </button>
                                                        </div>
                                                    </div>


                                            </form>
                                        </div>
                                        <h6 class="user-profile-card-title"></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</x-frontend.layout.master>
