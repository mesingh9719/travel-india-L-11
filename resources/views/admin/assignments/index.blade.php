<x-admin.master-layout pageTitle="Permission" pageSubTitle="All Permission">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">All Permissions</h4>
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
                        <form action="{{ route('admin.roles.assignments.show') }}" method="POST">
                       	@csrf
                
                        <div class="mb-3">
				            <label for="roleSelect" class="form-label">Role</label>

				            <select class="form-select" id="roleSelect" name="role_id">
				            	@forelse ($role as $item)
								    <option value="{{ $item->id}}">{{ $item->name }}</option>
								@empty
								    <!-- Handle empty state -->
								   <option value="">No items found</option>
								@endforelse
				            </select>
				        </div>
                        <table class="table table-bordered" id="permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                   @foreach($permissions as $permission)
                                    <th>{{$permission->title}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                            	@forelse ($module as $modules)
								    <tr>
                                    <td>{{ $modules->name }}<input type="hidden" name="module_id[]" value="{{$modules->id}}"></td>

                                    @foreach($permissions as $permission)
                                    <td>
									<div class="form-check">
							            <input class="form-check-input" type="checkbox" id="checkbox1" name="permissions_id[]" value="{{$permission->id}}" >
							            <label class="form-check-label" for="checkbox1">
							                {{ $permission->name }}
							            </label>
							        </div>
                                    </td>
                                    @endforeach

                                </tr>
								@empty
								    <!-- Handle empty state -->
								   <option value="1">No items found</option>
								@endforelse
                            	
                            </tbody>
                        </table>
							<div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Role Assignment Modal -->

<x-slot:js>


</x-slot:js>
</x-admin.master-layout>
