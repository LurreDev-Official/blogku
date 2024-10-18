<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Relation: A Category can have many Posts.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
