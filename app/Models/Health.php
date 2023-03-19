<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $fillable = ['id', 'community_id', 'name_of_center', 'phone', 'links', 'location_x', 'location_y', 'more_details'];
    use HasFactory;
}