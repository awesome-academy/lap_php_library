<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'publisher_id',
        'quantity',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function rateUser()
    {
        return $this->belongsToMany(User::class, 'rates', 'book_id', 'user_id');
    }

    public function likeUsers()
    {
        return $this->belongsToMany(User::class, 'likes', 'book_id', 'user_id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_book', 'book_id', 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'cate_id');
    }

    public function borrows()
    {
        return $this->belongsToMany(Borrow::class, 'borrow_book', 'book_id', 'borrow_id');
    }
}
