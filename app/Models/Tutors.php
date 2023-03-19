<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutors extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'community_id',
        'name_of_tutor',
        'phone',
        'links',
        'adress_of_tutors',
        'location_x',
        'location_y',
        'more_details',
        'offer',
        'time_of_offer',
        'title_offer'

    ];
}