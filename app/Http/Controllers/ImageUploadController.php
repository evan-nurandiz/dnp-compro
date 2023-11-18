<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelpers;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    protected $uploadHelpers;

    public function __construct(UploadHelpers $uploadHelpers)
    {
        $this->uploadHelpers = $uploadHelpers;
    }
    
    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $fileName = $this->uploadHelpers->uploadSingleImage($request, 'upload');
            $url =  asset('storage/images/'.$fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

}
