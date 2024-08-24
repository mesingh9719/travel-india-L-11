<div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold">Current Ride</h4>
                </div>
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRideModal">Add New Ride</button>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="border p-4">
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <img src="{{ asset('frontend-assets/img/taxi/car1.jpg') }}" alt="car" class="img-fluid rounded-circle trip-listing-img">
                        <div class="mt-2">
                            <b class="text-capitalize">Car Name</b>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-capitalize col-md-6 col-sm-6">
                        <h4 class="font-weight-bold mb-2 pickup_drop">Mumbai - Pune</h4>
                        <div class="font-weight-700 font-size-14px mt-2">
                        <span>
                            <i class="far fa-calendar-alt"></i> 21-08-2024
                        </span>
                            <span class="ml-10-px">
                            <i class="far fa-clock"></i> 09:00 AM
                        </span>
                        </div>
                        <div class="mt-2">
                        <span
                                class="badge bg-primary badge-primary mr-10-px text-white">Seats 4</span>
                            <span class="badge bg-primary badge-primary text-white">petrol</span>
                            <span
                                    class="badge bg-primary badge-primary ml-10-px text-white">Make 2018</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <h3 class="font-weight-bold mb-0"> ₹ 2,500</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mt-2 mb-2">
                        <h5 class="text-muted">Passenger Info</h5>
                    </div>
                    <div class="passenger-details" style="border:1px solid #ddd; padding: 10px; border-radius: 10px; margin-bottom: 20px;">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="pr-3">
                                <img src="{{ asset('frontend-assets/img/account/user.jpg') }}" alt="Passenger" class="img-fluid rounded-circle passenger-img" style="width: 60px; height: 60px;">
                            </div>
                            <div>
                                <h5 class="font-weight-bold mb-1">John Doe</h5>
                                <p class="mb-0">
                                    <i class="far fa-phone"></i> 98******
                                </p>
                            </div>
                            <div>
                                <h4 class="text-success font-weight-bold">₹ 2,000</h4>
                                <p class="font-weight-bold text-secondary mb-1 font-size-14px font-weight-700">Negotiated Amount</p>
                            </div>
                            <div>
                                <button class="btn btn-warning mr-2">Negotiate</button>
                                <button class="btn btn-success mr-2">Accept</button>
                                <button class="btn btn-outline-danger">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
