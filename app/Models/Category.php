<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'status'];

    /**
     * Get the comments for the blog post.
     */
    public function subcategories(): HasMany
    {
        return $this->hasMany(subcategory::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(product::class);
    }
    public function Images()
    {
        return $this->hasManyThrough(image::class, product::class);
    }
}
