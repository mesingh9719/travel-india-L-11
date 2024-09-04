<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;
use App\Models\Vehicle;
use DB;

class RolePermissionController extends Controller
{
    // List roles
    public function rolesIndex()
    {
        if (request()->ajax()) {
            $roles = Bouncer::role()->get();
            return datatables()->of($roles)
                ->addColumn('action', function($role){
                    return '<a href="'.route('admin.roles.edit', $role->id).'" class="btn btn-primary btn-sm">Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.roles.index');
    }

    // Show form to create a new role
    public function rolesCreate()
    {
        
        return view('admin.roles.create');
    }

    // Store a new role
    public function rolesStore(Request $request)
    {
        $request->validate(['name' => 'required|unique:roles,name']);
        Bouncer::role()->create(['name' => $request->name, 'scope'=> $request->module_id]);
        return redirect()->route('admin.roles.index');
    }

    // Show form to edit a role
    public function rolesEdit($id)
    {
        $role = Bouncer::role()->find($id);
        return view('admin.roles.edit', compact('role'));
    }

    // Update a role
    public function rolesUpdate(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:roles,name,' . $id]);
        $role = Bouncer::role()->find($id);
        $role->name = $request->name;
        $role->save();
        return redirect()->route('admin.roles.index');
    }

    // Delete a role
    public function rolesDestroy($id)
    {
        Bouncer::role()->find($id)->delete();
        return redirect()->route('admin.roles.index');
    }

    // List permissions
    public function permissionsIndex()
    {
        if (request()->ajax()) {
            $permissions = Bouncer::ability()->get();
            return datatables()->of($permissions)
                ->addColumn('action', function($permission){
                    return '<a href="'.route('admin.permissions.edit', $permission->id).'" class="btn btn-primary btn-sm">Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.permissions.index');
    }

    // Show form to create a new permission
    public function permissionsCreate()
    {
        $module =\App\Models\Module::all();
        return view('admin.permissions.create', compact('module'));
    }

    // Store a new permission
    public function permissionsStore(Request $request)
    {
        $request->validate(['name' => 'required|unique:abilities,name', 'module_id'=>'required']);
        Bouncer::ability()->create(['name' => $request->name, 'scope'=>$request->module_id]);
        return redirect()->route('admin.permissions.index');
    }

    // Show form to edit a permission
    public function permissionsEdit($id)
    {
        $permission = Bouncer::ability()->find($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    // Update a permission
    public function permissionsUpdate(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:abilities,name,' . $id]);
        $permission = Bouncer::ability()->find($id);
        $permission->name = $request->name;
        $permission->save();
        return redirect()->route('admin.permissions.index');
    }

    // Delete a permission
    public function permissionsDestroy($id)
    {
        Bouncer::ability()->find($id)->delete();
        return redirect()->route('admin.permissions.index');
    }

     // Assign permissions to a role
    public function assign()
    {
        $role = Bouncer::role()->get();
        $module =\App\Models\Module::all();
        $ability = Bouncer::ability()->get();
        $permissionsSelected = \DB::table('permissions')->join('modules', 'modules.id', '=', 'permissions.module_id')->get()->toArray();

       
        return view('admin.assignments.index', compact('role', 'ability', 'module', 'permissionsSelected'));
    }

    // Assign permissions to a role
    public function assignPermissionsToRole(Request $request)
    {
// Validate the incoming request
    $request->validate([
        'role_id' => 'required|exists:roles,id',
        'permissions_id' => 'required|array',
        'permissions_id.*' => 'exists:abilities,id',
        'module_id' => 'required|array',
        'module_id.*' => 'string' // Adjust validation rules as needed
    ]);

      \DB::beginTransaction();

    try {

    // Fetch the role using the provided role ID
    $role = Bouncer::role()->find($request->role_id);

    if (!$role) {
        return response()->json(['message' => 'Role not found.'], 404);
    }

    // Fetch permissions based on the provided IDs
    $permissions = Bouncer::ability()->whereIn('id', $request->permissions_id)->get();
    // Loop through each module_id
    foreach ($request->module_id as $module_id) {
        // Loop through each permission to assign
        foreach ($request->permissions_id as $permissionId) {
            $permission = Bouncer::ability()->find($permissionId);

            if ($permission) {
                // Assign permission to the role
                // $role->allow($permission, $module_id);

                // Update the permissions table with the module_id
                \DB::table('permissions')->updateOrInsert(
                    [
                        'entity_id' => $role->id,
                        'ability_id' => $permission->id,
                        'entity_type' => 'roles',
                        'scope' => $module_id
                    ],
                    [
                        'module_id' => $module_id
                    ]
                );
            }
        }
    }
         DB::commit();
        return redirect()->back()->with('success', 'Permission Added Successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Went Something wrong' . $e->getMessage());
        }

    return response()->json(['message' => 'Permissions assigned and updated successfully.']);

   
        return redirect()->back()->with(compact('role', 'permissions', 'assignedPermissions'));
    }

    public function updateRolePermissions(Request $request, $roleId)
    {
        $role = Bouncer::role()->find($roleId);
        $permissions = $request->input('permissions', []);
        Bouncer::sync($role)->abilities($permissions);
        return redirect()->route('admin.roles.index')->with('success', 'Permissions updated successfully.');
    }
}
