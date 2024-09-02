<x-admin.master-layout pageTitle="Permission" pageSubTitle="All Permission">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <h4 class="card-title mb-0">All Permission</h4>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roleAssignModal" data-bs-whatever="@mdo">New Role</button>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">
                    <h1>User Roles</h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                    <div class="table-responsive table-responsive--dynamic">
                        <table class="table mb-0 table-borderless table-rounded">
                        <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->full_name }}</td>
                                        <td>
                                            @foreach($user->roles as $role)
                                                <span class="badge bg-primary">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <x-action-btns>
                                                <x-edit-btn-action route="admin.plans.edit" :id="$user->id"/>
                                                <x-delete-btn-action route="admin.plans.destroy" :id="$user->id"/>
                                            </x-action-btns>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
  
   


    <div class="modal fade" id="roleAssignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
             <form action="{{ route('assign.role') }}" method="POST">
                @csrf
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Assign Role</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">User:</label>
                  <select id="user_id" name="user_id" class="form-control" required>
                        <option value="">Select a user</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Role:</label>
                 <select id="role_id" name="role_id" class="form-control" required>
                        <option value="">Select a role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
              </div>
       
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send message</button>
          </div>
        </form>
        </div>
      </div>
    </div>

</x-admin.master-layout>
