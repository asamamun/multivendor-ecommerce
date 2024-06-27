<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'user_id',
        'brand_id',
        'product_name',
        'product_code',
        'product_quantity',
        'product_details',
        'product_color',
        'product_size',
        'selling_price',
        'discount_price',
        'video_link',
        'main_slider',
        'hot_deal',
        'best_rated',
        'mid_slider',
        'hot_new',
        'trend',
        'status',
    ];

    public function Images(): HasMany
    {
        return $this->hasMany(image::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(subcategory::class);
    }
    /**
     * Get all of the post's comments.
     */
    public function comments(): MorphMany
    {
        return $this->morphMany(comment::class, 'commentable');
    }
}
