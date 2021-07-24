<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Get the author of this comment.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the parent commentable model (poll or comment).
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Get the replies that this comment has.
     */
    public function replies()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
