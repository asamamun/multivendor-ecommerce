<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
class subcategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'category_id',
        'name',
        'slug',        
        'status',
    ];
    /**
     * Get the post that owns the comment.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(product::class);
    }
}
