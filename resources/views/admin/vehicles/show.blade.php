<x-admin.master-layout>
    <x-slot name="pageTitle">
        Vehicle Details
    </x-slot>
    <x-slot name="pageSubTitle">
        Vehicle Details
    </x-slot>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">Vehicle Details</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">
                        <table class="table mb-0 table-borderless table-rounded text-capitalize">
                            <tbody>
                                <tr>
                                    <th scope="row">ID</th>
                                    <td>{{ $vehicle->id ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Owner</th>
                                    <td>{{ $vehicle->user->first_name ?? ''}} {{$vehicle->user->last_name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{ $vehicle->vehicle_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Type</th>
                                    <td>{{ $vehicle->vehicleType->name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Brand</th>
                                    <td>{{ $vehicle->brand ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Model</th>
                                    <td>{{ $vehicle->vehicle_model ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Number</th>
                                    <td>{{ $vehicle->vehicle_number ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fuel Type</th>
                                    <td>{{ $vehicle->fuel_type ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Seats</th>
                                    <td>{{ $vehicle->seat_capacity ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Verification</th>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">Created At</th>
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>
