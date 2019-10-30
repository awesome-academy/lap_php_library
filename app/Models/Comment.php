<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'book_id',
        'parent_id',
        'status',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
