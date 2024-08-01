<?php

namespace App\Http\Controllers\Api;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\VehicleRequestStore;
use App\Http\Resources\VehicleResource;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return VehicleResource::collection($vehicles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleRequestStore $vehicleRequestStore)
    {
        $validated = $vehicleRequestStore->validated();

        $fileFields = [
            'rc_image_front',
            'rc_image_back',
            'insurance_image',
            'vehicle_permit_image'
        ];

        DB::beginTransaction();

        try {
            $uploadedFiles = CommonHelper::handleFileUploads($vehicleRequestStore, $fileFields);

            $vehicleData = array_merge($validated, $uploadedFiles);

            $vehicle = Vehicle::create($vehicleData);

            DB::commit();

            return (new VehicleResource($vehicle))->additional(['message' => 'Vehicle added successfully.']);

        }catch (\Exception $e) {
            DB::rollback();

            return response()->json([
                'error' => 'Something went wrong!'.$e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return new VehicleResource($vehicle);
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
