<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Community extends Model
{
    protected $fillable = ['id', 'type_id'];
    use HasFactory;
    public function jobs(): HasMany
    {
        return $this->hasMany(PostType::class, 'type_id', 'id');
    }
}