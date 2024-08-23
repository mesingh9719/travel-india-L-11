<x-frontend.layout.master>

<main class="main">
        <x-frontend.banner.banner />
        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
                    <x-frontend.sidebar.sidebar />
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-profile-card">
                                        <h6 class="user-profile-card-title">Vehicle List</h6>
                                        <div class="user-profile-form p-4">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-end mb-2">
                                                    <a href="{{route('vehicle.create')}}" class="btn btn-warning"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">+
                                                        Vehicle</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
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


                                            <div id="pagination-links">
                                                <!-- Pagination links will be inserted here via AJAX -->
                                            </div>
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

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Vehicle</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RC Number</label>
                                        <input type="text" class="form-control" id="rc_number" name="rc_number[]"
                                            value="" placeholder="RC Number" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RC Image</label>
                                        <input type="file" class="form-control" id="rc_image_front"
                                            name="rc_image_front[]" placeholder="RC " required>
                                    </div>
                                </div>
                                <div class="col-md-12" id="vehicle_1">
                                    <div class="form-group">
                                        <label>Vehicle Image -1</label>
                                        <input type="file" class="form-control" id="vehicle_image_1"
                                            name="vehicle_image[]" placeholder="RC Number">
                                    </div>
                                </div>
                                <div class="col-md-12" id="vehicle_2" style="display:none">
                                    <div class="form-group">
                                        <label>Vehicle Image -2</label>
                                        <input type="file" class="form-control" id="vehicle_image_2"
                                            name="vehicle_image[]" placeholder="RC Number" required>
                                    </div>
                                </div>
                                <div class="col-md-12" id="vehicle_3" style="display:none">
                                    <div class="form-group">
                                        <label>Vehicle Image -3 </label>
                                        <input type="file" class="form-control" id="vehicle_image_3"
                                            name="vehicle_image[]" placeholder="RC Number" required>
                                    </div>
                                </div>
                                <div class="col-md-12" id="vehicle_4" style="display:none">
                                    <div class="form-group">
                                        <label>Vehicle Image -4 </label>
                                        <input type="file" class="form-control" id="vehicle_image_4"
                                            name="vehicle_image[]" placeholder="RC Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


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
    </div>
    <x-slot:js>
        <script>
            $(document).ready(function() {
                    var table = $('.dl-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('vehicle.index') }}",
                        columns: [
                            {data: 'id', name: 'id'},
                            { data: 'rc_number', name: 'rc_number' },
                            { data: 'rc_image_front', name: 'rc_image_front',
                                "render": function (data, type, full, meta) {
                                    var img ="images/";
                                    return '<img src="{{ asset('images/') }}/' + data + '" width="80" />';
                                },
                            
                            },
                            {data: 'action', name: 'action', orderable: false, searchable: false},
                        ],
                        
                        responsive: true,  // Enable responsive feature
                        pagingType: 'simple_numbers'  // Customize pagination style if needed
                    });
                        
                });
                function assign_driver(id){
                var vehicleid =document.getElementById("vehicleid");
                vehicleid.value = id;
                if(id !=""){
                    $("#selectDriveModal").modal("toggle");
                }
                
                }
            // Array of file input IDs and corresponding elements to show/hide
            const fileInputIds = [
                { fileInputId: 'vehicle_image_1', targetId: 'vehicle_2' },
                { fileInputId: 'vehicle_image_2', targetId: 'vehicle_3' },
                { fileInputId: 'vehicle_image_3', targetId: 'vehicle_4' }
            ];

            // Function to handle showing and hiding elements based on file input
            function handleFileChange(event, targetId) {
                const files = event.target.files;
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.style.display = files.length > 0 ? 'block' : 'none';
                } else {
                    console.error(`Element with ID ${targetId} not found.`);
                }
            }

            // Attach event listeners to each file input
            fileInputIds.forEach(({ fileInputId, targetId }) => {
                const fileInput = document.getElementById(fileInputId);
                if (fileInput) {
                    fileInput.addEventListener('change', function(event) {
                        handleFileChange(event, targetId);
                    });
                } else {
                    console.error(`File input with ID ${fileInputId} not found.`);
                }
            });
        </script>
    </x-slot:js>
</x-frontend.layout.master>