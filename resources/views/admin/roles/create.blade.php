<x-admin.master-layout pageTitle="Role" pageSubTitle="Create New Roles">
    <div class="row">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">Create Role</h4>
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
                            <form action="{{ route('admin.roles.store') }}" method="POST">
                                @csrf

                         
                                <label for="name">Role Name:</label>
                                <input type="text" id="name" name="name" required>
                                <button type="submit" class="btn btn-primary">Create Role</button>
                            </form>                    
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>