<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid extends Model
{
    protected $fillable=['id','residentail_id','commercial_id','land_id','room_id','yearly','quarterly','bi_yearly','monthly'];
    use HasFactory;
}
