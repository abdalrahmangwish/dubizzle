<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = ['id', 'machine_id', 'state', 'location_x', 'location_y', 'type_of_car', 'extra', 'kelometers', 'color', 'year', 'offer', 'time_of_offer', 'title_of_offer'];
    use HasFactory;
}
