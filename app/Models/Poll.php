<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Poll extends Model
{
    use HasFactory, HasSlug;

    /**
     * Get the author of this poll.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get this poll's category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the comments that this poll has.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the hearts that this poll has.
     */
    public function hearts()
    {
        return $this->morphMany(Heart::class, 'heartable');
    }

    /**
     * Get this poll's options.
     */
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    /**
     * Get this poll's votes.
     */
    public function votes()
    {
        return $this->hasManyThrough(Vote::class, Option::class);
    }
}
