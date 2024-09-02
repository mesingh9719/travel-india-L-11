<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ride;
use App\Models\VehicleType;
use App\Services\TripFilterService;
use App\Http\Requests\Api\Ride\RideRequestStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class TripController extends Controller
{
    protected TripFilterService $tripFilterService;

    public function __construct(TripFilterService $tripFilterService)
    {
        $this->tripFilterService = $tripFilterService;
    }

    public function findRide(Request $request){
        $trips = Ride::query();
        $trips = $this->tripFilterService->filter($trips, $request);
        $trips = $trips->paginate(10);
        if ($request->ajax()) {
            return view('frontend.trips.partials.trip-list', compact('trips'));
        }

        return view('frontend.trips.index', compact('trips'));
    }

    public function tripDetail($id){
        $trip = Ride::find($id);
        return view('frontend.trips.trip-detail',compact('trip'));
    }


    public function show(Request $request){
           $ride =  Ride::all();
           // dd($ride);

        //   if ($request->ajax()) {
        //     $data =Auth::user()->vehicles;
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function ($row) {
        //             return '
        //             <button type="button" class="btn btn-sm btn-default" onclick="customAction(' . $row->id . ')">In-prograss</button>
        //             <button class="btn btn-primary btn-sm selectDriveModal" onclick="assign_driver(id);" id="' . $row->id . '">Assign Driver</button>
        //             <button type="button" class="btn btn-sm btn-success" onclick="anotherAction(' . $row->id . ')">Edit</button>
        //             <button type="button" class="btn btn-sm btn-danger" onclick="deleteRow(' . $row->id . ')">Delete</button>';
        //         })
        //         ->rawColumns(['verification','action'])
        //         ->make(true);
        // }
        // $dlData = Auth::user()->dlVerifies;
        // return view('frontend.driver.ride-list', compact('dlData'));
    }


    public function addRide(RideRequestStore $request){
        DB::beginTransaction();
        try{
        $tripRequest =$request->validated();
        $user_id =['user_id'=>Auth::id(), 'vehicle_id'=>'1'];
        $tripDate =array_merge($tripRequest, $user_id);
        $trip = Ride::create($tripDate);
        DB::commit();
        return redirect()->route('dashboard.index')->with('success', 'Trip Added Successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Went Something wrong' . $e->getMessage());
        }
    }


}
