<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;
use DB;
class RoleController extends Controller
{
    public function index()
    {
       $roles = Bouncer::role()->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        Bouncer::role()->create(['name' => $request->name]);
            DB::commit();
            return redirect()->route('admin.roles.index')->with('success', 'Role Added Successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Went Something wrong' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $role = Bouncer::role()->find($id);
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try{
        $request->validate([
            'name' => 'required|unique:roles,name,' . $id,
        ]);

        $role = Bouncer::role()->find($id);
        $role->name = $request->name;
        $role->save();
            DB::commit();
        return redirect()->route('admin.roles.index')->with('success', 'Role updated Successfully!');
         } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Went Something wrong' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        Bouncer::role()->find($id)->delete();
        return redirect()->route('admin.roles.index');
    }

    public function attach(Request $request, $roleId)
    {
        $role = Bouncer::role()->find($roleId);
        $ability = Bouncer::ability()->find($request->input('ability_id'));
        Bouncer::allow($role)->to($ability);
        return redirect()->route('roles.index')->with('success', 'Ability assigned to role successfully.');
    }
}
