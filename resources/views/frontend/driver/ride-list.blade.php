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
                                        <h6 class="user-profile-card-title">Trip List</h6>
                                        <div class="user-profile-form p-4">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex justify-content-end mb-2">
                                                     <div>
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRideModal">Add New Ride</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="example" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Pickup Location</th>
                                                        <th>Drop Location</th>
                                                        <th>Picup Date</th>
                                                        <th>Picup Time</th>
                                                        <th>Amount</th>
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
    <x-frontend.add-ride-modal/>
    <!-- Button trigger modal -->



    <x-slot:js>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
            var table = $('.dl-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('show.ride') }}",
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
    </x-slot:js>
</x-frontend.layout.master>