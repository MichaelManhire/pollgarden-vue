<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heart extends Model
{
    use HasFactory;

    /**
     * Get the parent heartable model (poll or comment).
     */
    public function heartable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user who sent this heart.
     */
    public function lover()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
