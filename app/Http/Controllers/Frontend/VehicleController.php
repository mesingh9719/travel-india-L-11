<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\VehicleRequestStore;
use App\Http\Requests\User\StoreVehicleImageRequest;
use App\Models\ImageVehicle;
use App\Models\Vehicle;
use App\Models\DLVerify;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class VehicleController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Vehicle::query();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button class="btn btn-primary selectDriveModal" onclick="assign_driver(id);" id="' . $row->id . '">Assign Driver</button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $dlData = DLVerify::all();

        return view('frontend.ride.vehicle-list', compact('dlData'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $images = [];

        return view('frontend.ride.add-vehicle', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleRequestStore $vehiclerequeststore, StoreVehicleImageRequest $storevehicleimagerequest)
    {
        DB::beginTransaction();
        try {
            $user_id = Auth::check() ? ['user_id' => Auth::id()] : ['user_id' => 2];
            if ($vehiclerequeststore['vehicle_image'] != "") {
                $filePaths = [];
                $files = $vehiclerequeststore['rc_image_front'] ? $vehiclerequeststore['rc_image_front'] : '';
                foreach ($files as $key => $img) {
                    if ($img->isValid()) {
                        $rcImage = CommonHelper::upload($img);
                    }
                    Vehicle::create([
                        'user_id' => $user_id['user_id'],
                        'vehicle_type_id' => 1,
                        'vehicle_number' => '',
                        'vehicle_model' => '',
                        'rc_image_front' => $rcImage,
                        'rc_number' => $vehiclerequeststore['rc_number'][$key]
                    ]);
                }
            }
            if ($storevehicleimagerequest['vehicle_image'] != "") {
                $filePaths = [];
                $files = $storevehicleimagerequest['vehicle_image'] ? $storevehicleimagerequest['vehicle_image'] : '';
                foreach ($files as $key => $img) {
                    if ($img->isValid()) {
                        $vehicleImage = CommonHelper::upload($img);
                    }
                    ImageVehicle::create([
                        'user_id' => $user_id['user_id'],
                        'vehicle_image' => $vehicleImage
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('vehicle.index')->with('success', 'Vehicle Added Successfully!');

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


    public function assignDriver()
    {

    }
}
