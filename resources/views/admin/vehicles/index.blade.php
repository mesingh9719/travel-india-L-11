<x-admin.master-layout pageTitle="Vehicles" pageSubTitle="All Vehicles">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">All Vehicles</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">
                        <table class="table mb-0 table-borderless table-rounded">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Number</th>
                                <th scope="col">Fuel Type</th>
                                <th scope="col">Seats</th>
                                <th scope="col">Verification</th>
                                <th scope="col">Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @include('admin.vehicles.vehicles-list')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>
