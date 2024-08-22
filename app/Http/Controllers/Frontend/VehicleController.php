<?php

namespace App\Http\Controllers\Frontend;
use App\Services\VehicleTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;
use Auth;
use App\Http\Requests\User\VehicleRequestStore;
use App\Http\Requests\User\StoreVehicleImageRequest;
use App\Models\ImageVehicle;
use App\Models\Vehicle;

class VehicleController extends Controller
{

    protected $vehicleTable;

    // Constructor Injection
    public function __construct(VehicleTable $vehicleTable)
    {
        $this->vehicleTable = $vehicleTable;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        // $vehicles = $this->vehicleTable->getVehicles();
        // dd($vehicles);

            $vehicles = Vehicle::query();
            $vehicles = $this->vehicleTable->filter($request, $vehicles);
            $vehicles = $vehicles->latest()->paginate(2);
    
            if ($request->ajax()) {
                return response()->json([
                    'jobsHtml' => view('frontend.ride.rc-list', compact('vehicles'))->render(),
                    'paginationHtml' => view('frontend.ride.pagination', compact('vehicles'))->render(),
                    'hasMorePages' => $vehicles->hasMorePages(),
                    'currentPage' => $vehicles->currentPage(),
                    'lastPage' => $vehicles->lastPage(),
                ]);
            }
    
            return view('frontend.ride.vehicle-list', compact('vehicles'));
    }
    

        // return view('frontend.ride.vehicle-list');
    

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
      
        $user_id = Auth::check() ? ['user_id'=> Auth::id()] : 2;
       
       if ($vehiclerequeststore['vehicle_image'] != "") {
        $filePaths = [];
        $files = $vehiclerequeststore['rc_image_front']  ? $vehiclerequeststore['rc_image_front']  :'';
        foreach ($files as $key => $file) {
            if ($file->isValid()) {
                $fileName = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('public/images', $fileName); // Store in storage/app/public/uploads
                $filePaths[] =  $fileName;
            }   
            Vehicle::create([
                'user_id' => $user_id['user_id'],
                'vehicle_type_id' => 1,
                'vehicle_number' => '',
                'vehicle_model' => '',
                'rc_image_front' =>  $fileName, 
                'rc_number' => $vehiclerequeststore['rc_number'][$key]
            ]);
        }
    }

    if ($storevehicleimagerequest['vehicle_image'] !="") {
        $filePaths = [];
        $files = $storevehicleimagerequest['vehicle_image'] ? $storevehicleimagerequest['vehicle_image'] :'' ;
        foreach ($files as $key => $file) {
            if ($file->isValid()) {
                $fileName = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('public/images', $fileName); // Store in storage/app/public/uploads
                $filePaths[] =  $fileName;
            }   
            ImageVehicle::create([
                'user_id' => $user_id['user_id'],
                'vehicle_image' =>  $fileName
            ]); 
        }
    }
        return redirect()->route('vehicle.index')->with('success', 'Vehicle Added Successfully!');
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
}
