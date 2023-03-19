<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable=['id','machine_id','state','location_x','location_y','type_of_motor','Num_of_cylinders','fuel_type','extres','transmission_type','year','color','kelometers','offer','time_of_offer','title_of_offer','photo'];
    use HasFactory;
}