<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostType extends Model
{
    use HasFactory;
    public function properties(): HasMany
    {
        return $this->hasMany(PostType::class, 'type_id', 'id');
    }
    public function communities(): HasMany
    {
        return $this->hasMany(PostType::class, 'type_id', 'id');
    }
    public function jobs(): HasMany
    {
        return $this->hasMany(PostType::class, 'type_id', 'id');
    }
    public function machines(): HasMany
    {
        return $this->hasMany(PostType::class, 'type_id', 'id');
    }
}
