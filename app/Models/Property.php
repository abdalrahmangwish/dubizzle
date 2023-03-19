<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=['id'];
    use HasFactory;
       public function residentails(): HasMany
    {
        return $this->hasMany(PostType::class, 'proprerty_id', 'id');
    }

       public function lands(): HasMany
    {
        return $this->hasMany(PostType::class, 'proprerty_id', 'id');
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(PostType::class, 'proprerty_id', 'id');
    }

    public function commercials(): HasMany
    {
        return $this->hasMany(PostType::class, 'proprerty_id', 'id');
    }

}
