<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commercial extends Model
{
    protected $fillable = ['id', 'proprerty_id', 'price_x', 'price_y', 'area_x', 'area_y', 'furnished', 'state', 'type_of_commercial', 'keyword', 'phone', 'linke', 'more_details', 'location_x', 'location_y', 'offer', 'time_of_offer', 'title_of_offer'];
    use HasFactory;
}
