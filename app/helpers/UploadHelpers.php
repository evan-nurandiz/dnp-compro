<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class UploadHelpers {
    public function uploadSingleImage($file, $field) {
        $filenameWithExt = $file->file($field)->getClientOriginalName ();
        // Get Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just Extension
        $extension = $file->file($field)->getClientOriginalExtension();
        // Filename To store
        $fileNameToStore = $filename. '_'. time().'.'.$extension;
        $file->file($field)->storeAs('public/images', $fileNameToStore);

        return $fileNameToStore;
    }

    public function uploadImageFromDropzone($file) {
        $filenameWithExt = $file->getClientOriginalName();
        // Get Filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just Extension
        $extension = $file->getClientOriginalExtension();
        // Filename To store
        $fileNameToStore = $filename. '_'. time().'.'.$extension;
        $file->storeAs('public/images', $fileNameToStore);

        return $fileNameToStore;
    }

    public function deleteSingleImage($imageName) {
        if (in_array($imageName, Config::get('constant.whiteListImage'))){
            return null;
        } else {
            return Storage::disk('public')->delete('images/'.$imageName);
        }
    }

    public function deleteMultipleImage($imagesNames) {
        foreach ($imagesNames as $name) {
            if (in_array($name, Config::get('constant.whiteListImage'))){
                return null;
            } else {
                return Storage::disk('public')->delete('images/'.$name);
            }
        };
    }
}

?>