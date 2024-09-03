<x-admin.master-layout pageTitle="Permission" pageSubTitle="All Permission">
    <div class="row">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">All Permissions</h4>
                        </div>
                        <div>
                            <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">Create New Permission</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                       
                        <table class="table table-bordered" id="permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Role Assignment Modal -->

<x-slot:js>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#permissions-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.permissions.index') }}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>

</x-slot:js>
</x-admin.master-layout>
