<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class user extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $appends = ['nameemail'];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        // 'roles'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the phone associated with the user.
     */
    public function profile(): HasOne
    {
        return $this->hasOne(profile::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(comment::class);
    }

    /**
     * Interact with the user's  name.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
            set: fn (string $value) => strtolower($value),
        );
    }
    /**
     * Interact with the user's  name and email.
     */
    protected function getnameemailAttribute()
    {
        return $this->name . " ( " . $this->email. " ) ";

    }
}
