<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    protected $fillable = ['id', 'type_id'];
    use HasFactory;
}
