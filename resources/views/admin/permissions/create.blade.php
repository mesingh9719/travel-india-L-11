<x-admin.master-layout pageTitle="Permissions" pageSubTitle="Create New Permissions">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">Create Permissions</h4>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">  
                        <form action="{{ route('admin.permissions.store') }}" method="POST">
                            @csrf
                            <div class="mb-2 col-lg-4">
                                <label for="name">Permission Name:</label>
                                <input type="text" id="name" name="name"  class="form-control" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Create Permission</button>
                            </div>
                        </form>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>