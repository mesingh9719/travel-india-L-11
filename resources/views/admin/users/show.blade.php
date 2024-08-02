<x-admin.master-layout pageTitle="User Details" pageSubTitle="User Details">
    <div class="card">
        <div class="card-header text-white">
            <h6 class="m-0">User Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_type" class="col-sm-4 col-form-label font-weight-bold">User Type:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="user_type" value="{{ $user->userType->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="first_name" class="col-sm-4 col-form-label font-weight-bold">First Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="first_name" value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name" class="col-sm-4 col-form-label font-weight-bold">Last Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="last_name" value="{{ $user->last_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="father_name" class="col-sm-4 col-form-label font-weight-bold">Father Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="father_name" value="{{ $user->father_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dob" class="col-sm-4 col-form-label font-weight-bold">Date of Birth:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="dob" value="{{ $user->dob }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-4 col-form-label font-weight-bold">Gender:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="gender" value="{{ $user->gender }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label font-weight-bold">Email:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label font-weight-bold">Phone:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="phone" value="{{ $user->mobile }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="whatsapp_number" class="col-sm-4 col-form-label font-weight-bold">WhatsApp:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="whatsapp_number" value="{{ $user->whatsapp_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dl_number" class="col-sm-4 col-form-label font-weight-bold">DL Number:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="dl_number" value="{{ $user->dl_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gst_number" class="col-sm-4 col-form-label font-weight-bold">GST Number:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="gst_number" value="{{ $user->gst_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pan_number" class="col-sm-4 col-form-label font-weight-bold">PAN Number:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="pan_number" value="{{ $user->pan_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="aadhar_number" class="col-sm-4 col-form-label font-weight-bold">Aadhar Number:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="aadhar_number" value="{{ $user->aadhar_number }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-4 col-form-label font-weight-bold">Address:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="address" value="{{ $user->address }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="profile_picture" class="col-sm-4 col-form-label font-weight-bold">Profile Picture:</label>
                                <div class="col-sm-8">
                                    <img src="{{ asset('images/'.$user->profile_image) }}" alt="Profile Picture" class="img-thumbnail" width="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="created_at" class="col-sm-4 col-form-label font-weight-bold">Created At:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="created_at" value="{{ $user->created_at->diffForHumans() }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="updated_at" class="col-sm-4 col-form-label font-weight-bold">Updated At:</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="updated_at" value="{{ $user->updated_at->diffForHumans() }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h6 class="mt-4 mb-3">Vehicles</h6>
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Vehicle Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Number</th>
                        <th scope="col">Fuel Type</th>
                        <th scope="col">Seats</th>
                        <th scope="col">Verification</th>
                        <th scope="col">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->id ?? '' }}</td>
                            <td>{{ $vehicle->vehicle_name }}</td>
                            <td>{{ $vehicle->brand }}</td>
                            <td>{{ $vehicle->vehicle_model }}</td>
                            <td>{{ $vehicle->vehicle_number ?? '' }}</td>
                            <td>{{ $vehicle->fuel_type ?? '' }}</td>
                            <td>{{ $vehicle->seat_capacity ?? '' }}</td>
                            <td>
                                @if($vehicle->is_verified)
                                    <span class="badge badge-round badge-success">Verified</span>
                                @else
                                    <span class="badge badge-round badge-warning">Pending</span>
                                @endif
                            </td>
                            <td>{{ $vehicle->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.master-layout>
