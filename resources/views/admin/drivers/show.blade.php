<x-admin.master-layout>
    <x-slot name="pageTitle">
        Driver Details
    </x-slot>
    <x-slot name="pageSubTitle">
        Driver Details
    </x-slot>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">Driver Details</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">
                        <table class="table mb-0 table-borderless table-rounded text-capitalize">
                            <tbody>
                                <tr>
                                    <th scope="row">ID</th>
                                    <td>{{ $driver->id ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Owner</th>
                                    <td>{{ $vehicle->user->first_name ?? ''}} {{$vehicle->user->last_name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">DL Number</th>
                                    <td>{{ $vehicle->dl_number ?? ''}}</td>
                                </tr>
                              
                                <tr>
                                    <th scope="row">DL Picture</th>
                                    <td>{{ $vehicle->dl_image ?? ''}}</td>
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
