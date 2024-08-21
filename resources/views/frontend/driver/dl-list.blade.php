<x-frontend.layout.master>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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
                                        <h6 class="user-profile-card-title">Driving License List</h6>
                                        <div class="user-profile-form p-4">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-end mb-2">
                                                    <a href="{{route('driving-license.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Vehicle</a>
                                                </div>
                                            </div>
                                            <table id="example" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>DL Number</th>     
                                                        <th>DL Image</th>                                                     <th>RC Image</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Table rows will be dynamically inserted here -->
                                                </tbody>
                                            </table>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Driving License</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <div class="container">
                            <form action="{{ route('driving-license.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>DL Number</label>
                                                <input type="text" class="form-control" id="rc_number"
                                                    name="dl_number" value=""
                                                    placeholder="Driving License Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>DL Image</label>
                                                <input type="file" class="form-control" id="rc_image"
                                                    name="dl_image"
                                                    placeholder="RC Number" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <br />
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
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // Sample data
            var data = [
                { "id": 1, "dl_number": "D123-4567-8901-2345", "dl_image": '<img src="{{asset('frontend-assets/img/download/dl_image.jpg')}}" width="80px" alt>', "action":'<a href="{{route('driving-license.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">  <i class="fas fa-edit"></i> </a>' },
                { "id": 2, "dl_number": "D234-5678-9012-3456", "dl_image": '<img src="{{asset('frontend-assets/img/download/dl_image.jpg')}}" width="80px" alt>', "action":'<a href="{{route('driving-license.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-edit"></i> </a>' },
                { "id": 3, "dl_number": "D345-6789-0123-4567", "dl_image": '<img src="{{asset('frontend-assets/img/download/dl_image.jpg')}}" width="80px" alt>', "action":'<a href="{{route('driving-license.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-edit"></i> </a>' }
                                // Add more data as needed
            ];

            // Initialize DataTable
            $('#example').DataTable({
                data: data,
                columns: [
                    { data: 'id', title: 'ID' },
                    { data: 'dl_number', title: 'DL Number' },
                    { data: 'dl_image', title: 'DL Image'},
                    { data: 'action', title: 'Action' }
                ]
            });
        });
        

    </script>
    </x-slot:js>
</x-frontend.layout.master>