<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileLaptop extends Model
{
    protected $fillable = ['id', 'type_id', 'type_of_mobile', 'type_of_table', 'production_date', 'features', 'state', 'phone', 'linke', 'more_details', 'offer', 'time_of_offer', 'title_of_offer', 'photos'];
    use HasFactory;
}
