<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classified_furniture extends Model
{
    protected $fillable = ['id', 'type_id', 'type_of_class', 'price', 'age', 'phone', 'descraption', 'location_x', 'location_y', 'offer', 'time_of_offer', 'title_of_offer'];
    use HasFactory;
}
