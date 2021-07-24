<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get the polls that belong to this category.
     */
    public function polls()
    {
        return $this->hasMany(Poll::class);
    }
}
