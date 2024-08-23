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
                                        <h6 class="user-profile-card-title">Driving License List</h6>
                                        <div class="user-profile-form p-4">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-end mb-2">
                                                    <a href="{{route('driving-license.create')}}"
                                                        class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">+ Driving License</a>
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
                                                    <table class="table table-bordered dl-table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>DL Number</th>
                                                                <th>DL Image</th>
                                                                <th width="100px">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
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
                                        <input type="text" class="form-control" id="rc_number" name="dl_number" value=""
                                            placeholder="Driving License Number" maxlength="12" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>DL Image</label>
                                        <input type="file" class="form-control" id="rc_image" name="dl_image"
                                            placeholder="RC Number" required>
                                    </div>
                                </div>

                            </div>
                            <br />
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
    <x-slot:js>
        <script>
            $(document).ready(function() {
                var table = $('.dl-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('driving-license.index') }}",
                    columns: [
                        {data: 'id', name: 'id'},
                        { data: 'dl_number', name: 'dl_number' },
                        { data: 'dl_image', name: 'dl_image',
                            "render": function (data, type, full, meta) {
                                        var img ="images/";
                                        return '<img src="{{ asset('images/') }}/' + data + '" width="80" />';
                                    },
                        },
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
                    
            });
        </script>
    </x-slot:js>

</x-frontend.layout.master>