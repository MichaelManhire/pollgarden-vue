<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    /**
     * Get the user who cast this vote.
     */
    public function caster()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the option that this vote was cast for.
     */
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
