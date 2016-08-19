<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'new_id',
        'content',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'new_id', 'id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
