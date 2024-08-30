<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BankDetail;
use App\Http\Requests\User\RegistrationRequest;
use App\Http\Requests\User\VehicleRequestStore;
use App\Http\Requests\BankDetailsRequestStore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\File;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('frontend.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleRequestStore $vehiclerequeststore, BankDetailsRequestStore $bankdetailsrequeststore, RegistrationRequest $request)
    {
        DB::beginTransaction();
        try {
            $userValidator = $request->validated();
            $bankdetailValidator = $bankdetailsrequeststore->validated();
            $vehicleValidstor = $vehiclerequeststore->validated();
            $userValidator['password'] = bcrypt(Str::random(8));
            $fileFields = ['pan_image', 'aadhar_image_front', 'aadhar_image_back', 'dl_image', 'profile_image'];
            $uploadedFiles = CommonHelper::handleFileUploads($request, $fileFields);
            $imageData =$userValidator['selfie_image'];
            $profileImage = CommonHelper::profileImage($imageData);
            $profileData =['selfie_image' => $profileImage];
            $userData = array_merge($userValidator, $uploadedFiles, $profileData);
            $user = User::create($userData);
            $user_id = ['user_id' => $user->id];
            $bankdetails = array_merge($bankdetailValidator, $user_id);
            $bankdetails = BankDetail::create($bankdetails);
            CommonHelper::multipleUpload($vehiclerequeststore, $user_id);
            DB::commit();
            Auth::login($user);
            return redirect()->route('dashboard.index')->with('success', 'Registration Successful');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Went Something wrong' . $e->getMessage());
        }
    }
}
