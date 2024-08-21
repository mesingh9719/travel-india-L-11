<x-frontend.layout.master>
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <main class="main">
    <style>
        
        .dropzone .dz-preview .dz-image {
            border-radius: 20px;
            overflow: hidden;
            width: 100px !important;
            height: 100px !important;
            position: relative;
            display: block;
            z-index: 10;
        }
        .dropzone {
            min-height: 0px !important;
            border: 2px dashed rgba(0, 0, 0, 0.3);
            background: white;
            padding: 10px 10px;
        }
    </style>
  
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
                                                    <a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Vehicle</a>
                                                </div>
                                            </div>
                                            <table id="example" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>RC Number</th>                                                        <th>RC Image</th>
                                                        <th>Action</th>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Vehicle</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <div class="container">
                            <form action="{{ route("vehicle.store") }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>RC Number</label>
                                                <input type="text" class="form-control" id="rc_number"
                                                    name="rc_number" value=""
                                                    placeholder="RC Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>RC Image</label>
                                                <input type="file" class="form-control" id="rc_image"
                                                    name="rc_image"
                                                    placeholder="RC Number" required>
                                            </div>
                                        </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="document">Upload Vehicle Inside Pictures</label>
                                            <div class="needsclick dropzone" id="document-dropzone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <div class="form-group">
                                            <label for="document">Upload Vehicle Outside Pictures</label>
                                            <div class="needsclick dropzone" id="document-dropzone">
                                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // Sample data
            var data = [
                { "id": 1, "rc_number": "DL-05-AB1234", "rc_image": '<img src="{{asset('frontend-assets/img/download/rc_image.jpg')}}" width="80px" alt>', "action":'<a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">  <i class="fas fa-edit"></i> </a>' },
                { "id": 2, "rc_number": "KA-01-CD5678", "rc_image": '<img src="{{asset('frontend-assets/img/download/rc_image.jpg')}}" width="80px" alt>', "action":'<a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-edit"></i> </a>' },
                { "id": 3, "rc_number": "KA-01-CD5678", "rc_image": '<img src="{{asset('frontend-assets/img/download/rc_image.jpg')}}" width="80px" alt>', "action":'<a href="{{route('vehicle.create')}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fas fa-edit"></i> </a>' }
                                // Add more data as needed
            ];

            // Initialize DataTable
            $('#example').DataTable({
                data: data,
                columns: [
                    { data: 'id', title: 'ID' },
                    { data: 'rc_number', title: 'RC Number' },
                    { data: 'rc_image', title: 'RC Image'},
                    { data: 'action', title: 'Action' }
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
        for (var i in files) {
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