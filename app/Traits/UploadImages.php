<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait UploadImages
{

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function uploadImagesOnServer($directory, $file, $disk = 'upload_images')
    {
        $names = [];

        if ($file) {
            $filename = $file->getClientOriginalName();
            // Store file on server
            $path = $file->storeAs($directory, $filename, $disk);
            $names[] = ['name' => $path];
        }

        return $names;
    }

    public function deleteImagesOnServer($directory, $file_name, $disk = 'upload_images')
    {
        //check if this category has image on server
        $exists = Storage::disk($disk)->exists($directory . '/' . $file_name);

        if ($exists) {
            //delete this imagr from sever
            $exists = Storage::disk($disk)->delete($directory . '/' . $file_name);
        }
    }


    public function uploadMultiImages($directory, $files, $disk = 'upload_images')
    {

        foreach ($files as $file) {
            if ($file) {
                // Store file on server
            return     $path = $file->storeAs($directory, $file, $disk);
            }
        }
    }
}
