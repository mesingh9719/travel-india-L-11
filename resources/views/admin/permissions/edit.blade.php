<x-admin.master-layout pageTitle="Permission" pageSubTitle="Edit Permission">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">Edit Permission</h4>
                        </div>
                       
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">  
                        <form action="{{ route('admin.permissions.update', $permission->id) }}" method="POST">
                            @csrf
                            @method('PUT')  
                            <div class="mb-2 col-lg-4">
                                <label for="name">Permission Name:</label>
                                <input type="text" class="form-control" id="name"  name="name" value="{{ $permission->name }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Permission</button>
                        </form>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>