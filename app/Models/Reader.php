<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function creations(): HasMany
    {
        return $this->hasMany(Creation::class);
    }

    public function memberships(): HasMany
    {
        return $this->hasMany(Membership::class);
    }

    public function bookClubs(): BelongsToMany
    {
        return $this->belongsToMany(BookClub::class, 'memberships');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
