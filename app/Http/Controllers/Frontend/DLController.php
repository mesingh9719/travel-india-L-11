<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreDLRequest;
use App\Models\DLVerify;
use Auth;
use App\Helpers\CommonHelper;
use DataTables;
use DB;
class DLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
           
        if ($request->ajax()) {
            $data = DLVerify::query();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('frontend.driver.dl-list');

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
    public function store(StoreDLRequest $storedlrequest)
    {
        DB::beginTransaction();
        try {
                $dlValidator = $storedlrequest->validated();
                $user_id = Auth::check() ? ['user_id'=> Auth::id()] : ['user_id'=> 2];
                $fileFields = ['dl_image'];
                $uploadedFiles = CommonHelper::handleFileUploads($storedlrequest, $fileFields);
                $dl =array_merge($dlValidator, $user_id, $uploadedFiles);
                DLVerify::create($dl);
                DB::commit();
                return redirect()->route('driving-license.index')->with('success', 'Driving Licence  Added Successfully!');
            } catch (\Exception $e) {
                DB::rollback();
                return back()->with('error', 'Went Something wrong' . $e->getMessage());
            }
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
        //
    }

    public function getData(Request $request)
    {
        
     
          
        // return view('frontend.driver.dl-list');
    }
}