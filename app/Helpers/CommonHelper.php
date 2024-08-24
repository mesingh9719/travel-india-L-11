<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\CommonHelper;
use App\Http\Requests\User\RegistrationRequest;
use App\Http\Resources\UserResource;
use App\Models\Vehicle;
use Auth;
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



    
      
}

