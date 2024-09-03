<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;

class RoleController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $roles = Bouncer::role()->get();
            return datatables()->of($roles)
                ->addColumn('action', function($role){
                    return '<a href="'.route('admin.roles.edit', $role->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('admin.roles.destroy', $role->id).'" method="POST" style="display:inline;">
                                '.csrf_field().method_field('DELETE').'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.roles.index');
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        Bouncer::role()->create(['name' => $request->name]);

        return redirect()->route('admin.roles.index');
    }

    public function edit($id)
    {
        $role = Bouncer::role()->find($id);
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $id,
        ]);

        $role = Bouncer::role()->find($id);
        $role->name = $request->name;
        $role->save();

        return redirect()->route('admin.roles.index');
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
