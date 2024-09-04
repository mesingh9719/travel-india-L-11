<div>
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
                        @elseif(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="save">
                            <div class="mb-3">
                                <label for="roleSelect" class="form-label">Role</label>
                                <select class="form-select" id="roleSelect" wire:model="selectedRole" wire:change="loadPermissionsForRole">
                                    <option value="">Select a role</option>
                                    @forelse ($roles as $role)
                                        <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                                    @empty
                                        <option value="">No items found</option>
                                    @endforelse
                                </select>
                                @error('selectedRole') 
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            @if(!empty($selectedRoleName))
                                <h5 class="mb-3">Permissions for {{ $selectedRoleName }}</h5>
                                <button type="button" class="btn {{ $this->areAllPermissionsSelected() ? 'btn-danger' : 'btn-secondary' }} mb-3" wire:click="toggleAllPermissions">
                                    {{ $this->areAllPermissionsSelected() ? 'Revoke All Permissions' : 'Grant All Permissions' }}
                                </button>
                            @endif

                            <table class="table table-bordered" id="permissions-table">
                                <thead>
                                    <tr>
                                        <th>Module</th>
                                        @foreach($abilities as $ability)
                                            <th>{{ $ability->title }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($modules as $module)
                                        <tr>
                                            <td>{{ $module->name }}</td>
                                            @foreach($abilities as $ability)
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" 
                                                               type="checkbox" 
                                                               wire:model="permissions.{{ $module->id }}.{{ $ability->id }}" 
                                                               value="1"
                                                               id="permission-{{ $module->id }}-{{ $ability->id }}">
                                                        <label class="form-check-label" 
                                                               for="permission-{{ $module->id }}-{{ $ability->id }}">
                                                            {{ $ability->name }}
                                                        </label>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="{{ count($abilities) + 1 }}">No items found</td>
                                        </tr>
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
</div>
