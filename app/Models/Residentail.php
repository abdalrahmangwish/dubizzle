<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residentail extends Model
{
    protected $fillable = ['id','proprerty_id','residerntail_type','price_y','price_y','number_of_badroom','number_of_bathroom','area_x','area_y','furnished','more_details','keyword','location_x','location_y','state','offer','time_of_offer'];
    use HasFactory;
    public function paids(): HasMany
    {
        return $this->hasMany(PostType::class, 'residentail_id', 'id');
    }
}