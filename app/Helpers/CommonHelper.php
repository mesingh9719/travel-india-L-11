<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
}
