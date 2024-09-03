<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;
use App\Models\Role;
use App\Models\User;

class AssignmentController extends Controller
{
    // Assign permissions to a role
    public function showRoleAssignments($roleId)
    {
        $role = Bouncer::role()->find($roleId);
        $permissions = Bouncer::ability()->get();
        $assignedPermissions = $role->abilities->pluck('id')->toArray();

        return view('assignments.role', compact('role', 'permissions', 'assignedPermissions'));
    }

    public function updateRoleAssignments(Request $request, $roleId)
    {
        $role = Bouncer::role()->find($roleId);
        $permissions = $request->input('permissions', []);

        // Sync the permissions with the role
        Bouncer::sync($role)->abilities($permissions);

        return redirect()->route('roles.index')->with('success', 'Permissions updated successfully.');
    }

    // Assign roles to a user
    public function showUserAssignments($userId)
    {
        $user = User::findOrFail($userId);
        $roles = Bouncer::role()->get();
        $assignedRoles = $user->roles->pluck('id')->toArray();

        return view('assignments.user', compact('user', 'roles', 'assignedRoles'));
    }

    public function updateUserAssignments(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $roles = $request->input('roles', []);

        // Sync the roles with the user
        Bouncer::sync($user)->roles($roles);

        return redirect()->route('users.index')->with('success', 'Roles updated successfully.');
    }
}

