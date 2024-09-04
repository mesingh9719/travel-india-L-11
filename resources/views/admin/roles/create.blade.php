<x-admin.master-layout pageTitle="Role" pageSubTitle="Create New Roles">
    <div class="row">
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
                        <form action="{{ route('admin.roles.store') }}" method="POST">
                            @csrf
                            <div class="mb-2 col-lg-4">
                                <label for="name">Role Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Role</button>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>