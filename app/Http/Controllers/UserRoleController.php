<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Silber\Bouncer\BouncerFacade as Bouncer;

class UserRoleController extends Controller
{
    // Show the list of users and their roles
    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Bouncer::role()->get();
        return view('admin.role_permission.index', compact('users', 'roles'));
    }

    // Handle role assignment
    public function assignRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($request->input('user_id'));
        $role = Bouncer::role()->findOrFail($request->input('role_id'));

        Bouncer::assign($role)->to($user);

        return redirect()->route('user.roles.index')->with('success', 'Role assigned successfully!');
    }
}

