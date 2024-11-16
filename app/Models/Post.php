<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id',
        'image' // Tambahkan ini
    ];

    /**
     * Relation: A Post belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation: A Post belongs to a Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}