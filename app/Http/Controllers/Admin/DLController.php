<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DLVerify;
class DLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $dlVerify = DLVerify::paginate(10); 
           if ($request->ajax()) {

            $perPage = $request->input('dlEntriesPerPage'); 
            $query = DLVerify::query();
            $filter = $request->get('dl_filter');

             if ($filter) {
                $query->where('dl_number', 'like', "%$filter%");
            }
            $dlVerify =  $query->paginate($perPage);
            return response()->json([
                'html' => view('admin.drivers.dl-list', compact('dlVerify'))->render(),
            ]);
        }
        return view('admin.drivers.index', compact('dlVerify'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $dlVerify = DLVerify::findOrFail($id); // Find the dlVerify or throw a 404 error
        $dlVerify->delete(); // Delete the dlVerify
        return redirect()->back()->with('success', 'Driving Licence Deleted Successfully!');
    }


}
