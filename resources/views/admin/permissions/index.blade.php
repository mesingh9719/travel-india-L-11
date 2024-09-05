<x-admin.master-layout pageTitle="Permission" pageSubTitle="All Permissions">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <h4 class="card-title mb-0">All Permissions</h4>
                        <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">Create New Permission</a>
                    </div>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="table-responsive table-responsive--dynamic">
                        <table class="table table-bordered" id="permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No permissions available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     <!-- Pagination Links -->
                    <div class="d-flex justify-content-end">
                    {{ $permissions->links('vendor.pagination.custom') }}
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Role Assignment Modal -->
</x-admin.master-layout>
