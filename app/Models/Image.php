<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class image extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image',                 //field name
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class);
    }
 
    public function comments(): MorphMany
    {
        return $this->morphMany(comment::class, 'commentable');
    }
}
