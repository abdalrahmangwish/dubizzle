<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany as RelationsHasMany;

class Post extends Model
{
    protected $fillable = ['title'];
    use HasFactory;

    public function postType(): RelationsHasMany
    {
        return $this->hasMany(PostType::class, 'post_id', 'id');
    }
}
