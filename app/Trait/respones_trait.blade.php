<?php
namespace App\Trait;


Trait Response_Trait
{
    public function get_response($data,$status,$msg)
    {

        $arr = [
            'data'=>$data,
            'status'=>$status,
            'message'=>$msg
        ];
        return response($arr);
    }

}


