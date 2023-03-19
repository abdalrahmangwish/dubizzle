<?php

namespace App\Traits;

trait showElments
{
    public function getData($model)
    {
        return $model::all();
    }
}
