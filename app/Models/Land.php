<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = ['id', 'proprerty_id', 'land_type', 'keyword', 'price_x', 'price_y', 'area_x', 'area_y', 'location_x', 'location_y', 'more_details', 'phone', 'links', 'title_of_offer', 'offer', 'time_of_offer','state'];
    use HasFactory;
}
