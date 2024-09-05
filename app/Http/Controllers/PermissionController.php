<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Illuminate\Support\Facades\DB;
class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Bouncer::ability()->paginate(10);
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
        $request->validate([
            'name' => 'required|unique:abilities,name',
        ]);
        Bouncer::ability()->create(['name' => $request->name]);
        DB::commit();
        return redirect()->route('admin.permissions.index')->with('success', 'Permissions Added Successfully!');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Went Something wrong' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $ability = Bouncer::ability()->find($id);
        return view('admin.permissions.edit', compact('ability'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
        $request->validate([
            'name' => 'required|unique:abilities,name,' . $id,
        ]);
        $ability = Bouncer::ability()->find($id);
        $ability->name = $request->name;
        $ability->save();
        DB::commit();
        return redirect()->route('admin.permissions.index')->with('success', 'Permissions Updated Successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Went Something wrong' . $e->getMessage());
        }
    }

    public function destroy($id)
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
        return view('admin.Assign_permission_to_role.index', compact('role', 'ability', 'module', 'permissionsSelected'));
    }

}
