<?php

use GuzzleHttp\Psr7\Request;

trait UploadImageTrait
{

    public function uploadImage(Request $request, $folderName )
    {

        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAS( $folderName, $image, 'offer');
        return $path;

    }
}