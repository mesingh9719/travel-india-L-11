<x-frontend.dashboard-layout>
    <style>
        @charset "UTF-8";



.loader--spinner {
    display: inline-block;
    position: relative;
    color: official;
    height: 60px;
    width: 60px;
}

.loader--spinner div {
    animation: loader--spinner 1.2s linear infinite;
    transform-origin: 30px 30px;
}

.loader--spinner div:after {
    display: block;
    position: absolute;
    top: 3px;
    left: 27px;
    border-radius: 20%;
    content: " ";
    height: 10px;
    width: 5px;
}

.loader--spinner div:nth-child(1) {
    animation-delay: -1.1s;
    transform: rotate(0deg);
}

.loader--spinner div:nth-child(2) {
    animation-delay: -1s;
    transform: rotate(30deg);
}

.loader--spinner div:nth-child(3) {
    animation-delay: -0.9s;
    transform: rotate(60deg);
}

.loader--spinner div:nth-child(4) {
    animation-delay: -0.8s;
    transform: rotate(90deg);
}

.loader--spinner div:nth-child(5) {
    animation-delay: -0.7s;
    transform: rotate(120deg);
}

.loader--spinner div:nth-child(6) {
    animation-delay: -0.6s;
    transform: rotate(150deg);
}

.loader--spinner div:nth-child(7) {
    animation-delay: -0.5s;
    transform: rotate(180deg);
}

.loader--spinner div:nth-child(8) {
    animation-delay: -0.4s;
    transform: rotate(210deg);
}

.loader--spinner div:nth-child(9) {
    animation-delay: -0.3s;
    transform: rotate(240deg);
}

.loader--spinner div:nth-child(10) {
    animation-delay: -0.2s;
    transform: rotate(270deg);
}

.loader--spinner div:nth-child(11) {
    animation-delay: -0.1s;
    transform: rotate(300deg);
}

.loader--spinner div:nth-child(12) {
    animation-delay: 0s;
    transform: rotate(330deg);
}

@keyframes loader--spinner {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

    </style>
    <div class="card border-0 shadow mb-4">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold">Driving License List</h4>
                </div>
                <div>
                    <button class="btn btn-warning btn-responsive" data-bs-toggle="modal"
                        data-bs-target="#addnewDLModal">Add New Driving License

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

    <!-- Button trigger modal -->
    <!-- Modal -->
    <form action="{{ route('driving-license.store') }}" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="addnewDLModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Driving License</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
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

    <x-slot:jsScripts>
        <script>
        $(document).ready(function() {
            var table = $('.dl-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('driving-license.index') }}",
                    type: 'GET'
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'dl_number',
                        name: 'dl_number'
                    },
                    {
                        data: 'dlImage',
                        name: 'dlImage',
                        orderable: false, searchable: false 
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
        </script>
    </x-slot:jsScripts>
</x-frontend.dashboard-layout>