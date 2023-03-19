<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'proprerty_id', 'state', 'room_features', 'price_x', 'price_y', 'video_of_property', 'photo_3d', 'more_details', 'location_x', 'location_y', 'offer', 'time_of_offer'];
    public function paids()
    {
        return $this->hasMany(Comment::class, 'room_id', 'id');
    }

}
