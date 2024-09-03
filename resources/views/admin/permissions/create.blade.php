<x-admin.master-layout pageTitle="Permissions" pageSubTitle="Create New Permissions">
    <div class="row">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
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
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            
                            <form action="{{ route('admin.permissions.store') }}" method="POST">
                                @csrf
                            <div class="row">
                            <div class="mb-3 col-lg-6">
                            <label for="roleSelect" class="form-label">Module</label>

                            <select class="form-select" id="roleSelect" name="module_id">
                                @forelse ($module as $item)
                                    <option value="{{ $item->id}}">{{ $item->name }}</option>
                                @empty
                                    <!-- Handle empty state -->
                                   <option value="">No items found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="mt-1 col-lg-6">
                                <label for="name">Permission Name:</label>
                                <input type="text" id="name" name="name"  class="form-control" required>
                        </div>
                                <button type="submit" class="btn btn-primary">Create Permission</button>
                        </div>
                            </form>                   
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.master-layout>