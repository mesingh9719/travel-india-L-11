<?php

namespace App\Livewire\Admin\Permissions;

use App\Models\Module;
use App\Models\Permission;
use Livewire\Component;
use Silber\Bouncer\Database\Ability;
use Silber\Bouncer\Database\Role;
use Illuminate\Support\Facades\Session;

class CreateAndUpdate extends Component
{
    public $selectedRole;
    public $permissions = [];
    public $selectedRoleName;

    public function render()
    {
        $roles = Role::all();
        $abilities = Ability::all();
        $modules = Module::all();
        return view('livewire.admin.permissions.create-and-update', compact('roles', 'abilities', 'modules'));
    }


    public function save()
    {
        $this->validate([
            'selectedRole' => 'required',
        ], [
            'selectedRole.required' => 'Please select a role before submitting.',
        ]);
        
        if (!empty($this->selectedRole) && !empty($this->permissions)) {
            $role = Role::find($this->selectedRole);
            if ($role) {
                try {
                    foreach ($this->permissions as $moduleId => $permissionData) {
                        $module = Module::find($moduleId);
                        if ($module) {
                            foreach ($permissionData as $permissionId => $value) {
                                $ability = Ability::find($permissionId);
                                if ($ability) {
                                    if ($value) {
                                        // Create or update a record in the RoleModuleAbility pivot table
                                        Permission::updateOrCreate([
                                            'entity_id' => $role->id,
                                            'module_id' => $module->id,
                                            'ability_id' => $ability->id,
                                        ]);
                                    } else {
                                        // Remove a record from the RoleModuleAbility pivot table
                                        Permission::where([
                                            'entity_id' => $role->id,
                                            'module_id' => $module->id,
                                            'ability_id' => $ability->id,
                                        ])->delete();
                                    }
                                }
                            }
                        }
                    }

                    // Flash a success message
                    Session::flash('success', 'Permissions updated successfully');
                } catch (\Exception $e) {
                    // Flash an error message in case of an exception
                    Session::flash('error', 'An error occurred while updating permissions'. $e->getMessage());
                }
            }
        }

        $this->selectedRole = null;
        $this->permissions = [];
    }

    public function loadPermissionsForRole()
    {
        if (!empty($this->selectedRole)) {
            $this->permissions = []; // Clear existing permissions

            // Load existing permissions for the selected role from the pivot table
            $rolePermissions = Permission::where('entity_id', $this->selectedRole)->get();

            foreach ($rolePermissions as $permission) {
                $this->permissions[$permission->module_id][$permission->ability_id] = true;
            }

            $this->selectedRoleName = Role::find($this->selectedRole)->name;
        }
    }

    public function toggleAllPermissions()
{
    $modules = Module::all(); // Fetch all modules
    $allPermissions = Ability::all(); // Fetch all abilities

    $allSelected = $this->areAllPermissionsSelected();

    foreach ($modules as $module) {
        foreach ($allPermissions as $permission) {
            $this->permissions[$module->id][$permission->id] = !$allSelected;
        }
    }
}

public function areAllPermissionsSelected()
{
    $modules = Module::all();
    $allPermissions = Ability::all();

    foreach ($modules as $module) {
        foreach ($allPermissions as $permission) {
            if (empty($this->permissions[$module->id][$permission->id])) {
                return false;
            }
        }
    }

    return true;
}

}
