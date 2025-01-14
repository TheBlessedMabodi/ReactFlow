<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'author_name',
        'author_email',
        'content',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
