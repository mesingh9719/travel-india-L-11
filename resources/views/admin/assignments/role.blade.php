<x-admin.master-layout pageTitle="Permission" pageSubTitle="Edit Permission">
    <div class="row">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
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
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                             <h1>Assign Permissions to Role: {{ $role->name }}</h1>
                            <form action="{{ route('roles.assignments.update', $role->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Permissions:</label>
                                    <div class="checkbox">
                                        @foreach($permissions as $permission)
                                            <label>
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" 
                                                    {{ in_array($permission->id, $assignedPermissions) ? 'checked' : '' }}>
                                                {{ $permission->name }}
                                            </label>
                                            <br>
                                        @endforeach
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Permissions</button>
                            </form>        
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>