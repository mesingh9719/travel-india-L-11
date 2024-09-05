<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\CommonHelper;
use App\Http\Requests\User\RegistrationRequest;
use App\Http\Resources\UserResource;
use App\Models\Vehicle;
use Auth;
use Illuminate\Support\Facades\Http;
class CommonHelper
{
    public static function handleFileUploads(Request $request, array $fileFields): array
    {
        $uploadedFiles = [];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $uploadedFiles[$field] = self::upload($request->file($field));
                
            } else {
                $uploadedFiles[$field] = "";
            }
        }

        return $uploadedFiles;
    }

    public static function upload($img): string
    {
        $path = public_path('/images');
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
        $filename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $img->extension();
        $uniqueName = $filename.'_'.time().'.'.$extension;
        $img->move($path, $uniqueName);
        return $uniqueName;
    }



    public static function multipleUpload($request, $user_id){
        if ($request->hasFile('rc_image_front')) {
            $files = $request->file('rc_image_front');
            $filePaths = [];
            foreach ($files as $key => $file) {
                if ($file->isValid()) {
                    $fileName =self::upload($file);
                }
                   Vehicle::create([
                    'user_id' => $user_id['user_id'],
                    'vehicle_type_id' => 1,
                    'vehicle_number' => '',
                    'vehicle_model' => '',
                    'rc_image_front' =>  $fileName, 
                    'rc_number' => $request->rc_number[$key]// Ensure this value is appropriate
                ]);
            }
        }
    }

    public static function profileImage($profileImageData){
        $profileImageData = str_replace('data:image/png;base64,', '', $profileImageData);
        $profileImageData = str_replace(' ', '+', $profileImageData);
        $profileImage = base64_decode($profileImageData);
        $profileFileName = 'profile_image_' . time() . '.png';
        $path = public_path('images/' . $profileFileName);
        if (!File::exists(public_path('images'))) {
            File::makeDirectory(public_path('images'), 0755, true);
        }
        // Save the image to the public directory
        file_put_contents($path, $profileImage);
        return  $profileFileName;

    }



    public  static function rcApi($rcNumber ='GJ01JT0459'){

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'x-rapidapi-host' => 'rto-vehicle-information-verification-india.p.rapidapi.com',
            'x-rapidapi-key' => 'Sign Up for Key',
        ])->post('https://rto-vehicle-information-verification-india.p.rapidapi.com/api/v1/rc/vehicleinfo', [
            'reg_no' => $rcNumber,
            'consent' => 'Y',
            'consent_text' => 'I hear by declare my consent agreement for fetching my information via AITAN Labs API',
        ]);

        if ($response->failed()) {
            // Handle the error
            echo "HTTP Error: " . $response->status();
        } else {
            // Handle the response
            echo $response->body();
        }
    }

}

