<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxioffice extends Model
{
    protected $fillable = [
        'id',
        'community_id',
        'name_of_office',
        'phone',
        'links',
        'name_of_address',
        'location_x',
        'location_y',
        'more_details',
        'offer',
        'title_of_offer',
        'time_of_offer',
    ];
    use HasFactory;
}