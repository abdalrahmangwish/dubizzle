<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    // public function uploadPhoto(Request $request)
    // {
    //     $photo = new photo();
    //     if ($request->has('image_upload')) {
    //         $path_name = $request->file('photo')->store('user', 'offer');
    //         $photo->image = $path_name;
    //     } else {
    //         $photo->image = $request->image;
    //     }
    // }

    // public function uploadPhoto(Request $request)
    // {
    //     $path = $this->uploadPhoto($request, 'user');
    //     photo::create(
    //         [
    //             'path' => $path,
    //         ]
    //     );
    //     return 'its ok';
    // }
}
