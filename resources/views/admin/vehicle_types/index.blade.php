<x-admin.master-layout pageTitle="Vehicle Types" pageSubTitle="Vehicle Types">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div>
                                <h4 class="card-title mb-0">All Vehicle Types</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.plans.create') }}" class="btn btn-primary">Add New Type</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-responsive--dynamic">
                            <table class="table mb-0 table-borderless table-rounded">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($vehicleTypes as $vehicleType)
                                    <tr class="text-capitalize">
                                        <td>{{ $vehicleType->id }}</td>
                                        <td>{{ $vehicleType->name }}</td>
                                        <td>
                                            <x-action-btns>
                                                <x-edit-btn-action />
                                                <x-delete-btn-action />
                                            </x-action-btns>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-admin.master-layout>
