<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoned extends Model
{
    protected $fillable = ['id', 'name','land_id'];
    use HasFactory;
}