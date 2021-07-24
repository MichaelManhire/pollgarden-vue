<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    /**
     * Get the poll that this option is associated with.
     */
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    /**
     * Get the votes that this option has.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
