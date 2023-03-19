<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = ['id', 'type_id', 'state', 'number_of_houres', 'location_y', 'location_x', 'job_cv', 'link', 'more_details'];
    use HasFactory;
}
