<x-frontend.dashboard-layout>
    <div class="card border-0 shadow mb-4">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold">Vehicle List</h4>
                </div>
                <div>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addNewVehicleModal">Add New
                        Vehicle
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
                @endsession
                @session('error')
                <div class="alert alert-danger" role="alert">
                    {{ $value }}
                </div>
                @endsession
                <table class="table table-bordered dl-table responsive nowrap">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>RC Number</th>
                        <th>RC Image</th>
                        <th width="100px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="addNewVehicleModal" tabindex="-1" aria-labelledby="addNewVehicleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addNewVehicleModalLabel">Add Vehicle</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>RC Number</label>
                                        <input type="text" class="form-control" id="rc_number" name="rc_number[]"
                                               value="" placeholder="RC Number" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>RC Image</label>
                                        <input type="file" class="form-control" id="rc_image_front"
                                               name="rc_image_front[]" placeholder="RC " required>
                                    </div>
                                </div>
                                <div class="col-md-6" id="vehicle_1">
                                    <div class="form-group mb-3">
                                        <label>Vehicle Image -1</label>
                                        <input type="file" class="form-control" id="vehicle_image_1"
                                               name="vehicle_image[]" placeholder="RC Number">
                                    </div>
                                </div>
                                <div class="col-md-6" id="vehicle_2" style="display:none">
                                    <div class="form-group mb-3">
                                        <label>Vehicle Image -2</label>
                                        <input type="file" class="form-control" id="vehicle_image_2"
                                               name="vehicle_image[]" placeholder="RC Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6" id="vehicle_3" style="display:none">
                                    <div class="form-group mb-3">
                                        <label>Vehicle Image -3 </label>
                                        <input type="file" class="form-control" id="vehicle_image_3"
                                               name="vehicle_image[]" placeholder="RC Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6" id="vehicle_4" style="display:none">
                                    <div class="form-group mb-3">
                                        <label>Vehicle Image -4 </label>
                                        <input type="file" class="form-control" id="vehicle_image_4"
                                               name="vehicle_image[]" placeholder="RC Number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Save changes</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

    <div class="modal fade" id="selectDriveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Assign Driver</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="vehicleid" id="vehicleid">
                                    <div class="form-group">
                                        <label>Driver</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            @if(count($dlData) > 0)
                                                @foreach($dlData as $dl)
                                                    <option value="{{$dl->id}}">{{$dl->dl_number}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-warning">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <x-slot:jsScripts>
        <script>
            var baseUrl = "{{ asset('images/') }}";
        </script>
        <script src="{{ asset('frontend-assets/js/vehicleListDatatable.js') }}"></script>
    </x-slot:jsScripts>
</x-frontend.dashboard-layout>
