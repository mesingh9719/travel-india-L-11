<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;

class PermissionController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $abilities = Bouncer::ability()->get();
            return datatables()->of($abilities)
                ->addColumn('action', function($ability){
                    return '<a href="'.route('admin.permissions.edit', $ability->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('admin.permissions.destroy', $ability->id).'" method="POST" style="display:inline;">
                                '.csrf_field().method_field('DELETE').'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.permissions.index');
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:abilities,name',
        ]);

        Bouncer::ability()->create(['name' => $request->name]);

        return redirect()->route('admin.permissions.index');
    }

    public function edit($id)
    {
        $ability = Bouncer::ability()->find($id);
        return view('admin.permissions.edit', compact('ability'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:abilities,name,' . $id,
        ]);

        $ability = Bouncer::ability()->find($id);
        $ability->name = $request->name;
        $ability->save();

        return redirect()->route('admin.permissions.index');
    }

    public function destroy($id)
    {
        Bouncer::ability()->find($id)->delete();
        return redirect()->route('admin.permissions.index');
    }
}
