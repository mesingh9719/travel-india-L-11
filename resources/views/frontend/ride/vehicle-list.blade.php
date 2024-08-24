<x-frontend.layout.master>
    <main class="main">
        <div class="user-profile mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <x-frontend.sidebar.sidebar/>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="card border-0 shadow mb-4">
                                <div class="card-header d-flex justify-content-between bg-white align-items-center">
                                    <h4>Vehicle List</h4>
                                    <a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal"
                                       data-bs-target="#exampleModal">+ Vehicle</a>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile-form p-4">
                                        <table id="example" class="display">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>RC Number</th>
                                                <th>RC Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- Table rows will be dynamically inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <x-frontend.add-vehicle-modal/>

    <x-slot:js>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                // Sample data
                var data = [
                    {
                        "id": 1,
                        "rc_number": "DL-05-AB1234",
                        "rc_image": '<img src="{{asset('frontend-assets/img/download/rc_image.jpg')}}" width="80px" alt>',
                        "action": '<a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">  <i class="fas fa-edit"></i> </a>'
                    },
                    {
                        "id": 2,
                        "rc_number": "KA-01-CD5678",
                        "rc_image": '<img src="{{asset('frontend-assets/img/download/rc_image.jpg')}}" width="80px" alt>',
                        "action": '<a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-edit"></i> </a>'
                    },
                    {
                        "id": 3,
                        "rc_number": "KA-01-CD5678",
                        "rc_image": '<img src="{{asset('frontend-assets/img/download/rc_image.jpg')}}" width="80px" alt>',
                        "action": '<a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-edit"></i> </a>'
                    }
                    // Add more data as needed
                ];

                // Initialize DataTable
                $('#example').DataTable({
                    data: data,
                    columns: [
                        {data: 'id', title: 'ID'},
                        {data: 'rc_number', title: 'RC Number'},
                        {data: 'rc_image', title: 'RC Image'},
                        {data: 'action', title: 'Action'}
                    ]
                });
            });


            var uploadedDocumentMap = {}
            Dropzone.options.documentDropzone = {
                url: '{{ route('vehicle.store') }}',
                maxFilesize: 2, // MB
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function (file, response) {
                    $('form').append('<input type="hidden" name="inside_pictures[]" value="' + response.name + '">')
                    uploadedDocumentMap[file.name] = response.name
                },
                removedfile: function (file) {
                    file.previewElement.remove()
                    var name = ''
                    if (typeof file.file_name !== 'undefined') {
                        name = file.file_name
                    } else {
                        name = uploadedDocumentMap[file.name]
                    }
                    $('form').find('input[name="inside_pictures[]"][value="' + name + '"]').remove()
                },
                init: function () {
                    @if(isset($project) && $project->document)
                    var files =
                        {!! json_encode($project->document) !!}
                        for(
                    var i
                in
                    files
                )
                    {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="inside_pictures[]" value="' + file.file_name + '">')
                    }
                    @endif
                }
            }

        </script>
    </x-slot:js>
</x-frontend.layout.master>
