<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BankDetail;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\User\RegistrationRequest;
use App\Http\Requests\User\VehicleRequestStore;
use App\Http\Requests\BankDetailsRequestStore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Helpers\CommonHelper;
class RegistrationController extends Controller
{
  

    // Dependency Injection via Constructor
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('frontend.auth.register'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleRequestStore $vehiclerequeststore, BankDetailsRequestStore $bankdetailsrequeststore,RegistrationRequest $request)
    {   
 
        
        $userValidator = $request->validated();
        $bankdetailValidator =$bankdetailsrequeststore->validated();
        $vehicleValidstor  = $vehiclerequeststore->validated();
        $userValidator['password'] = bcrypt(Str::random(8));
        $fileFields = ['pan_image', 'aadhar_image_front','aadhar_image_back', 'dl_image', 'profile_image'];
        $uploadedFiles = CommonHelper::handleFileUploads($request, $fileFields);
        $userData = array_merge($userValidator, $uploadedFiles);
        // \DB::connection()->enableQueryLog();
        $user = User::create($userData);
        $bank =['user_id' => $user->id];
        $bankdetails = array_merge($bankdetailValidator, $bank);
        $user = BankDetail::create($bankdetails);
        $queries = \DB::getQueryLog();
        // dd($queries);
        return back()->with('success', 'User created successfully.');

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
