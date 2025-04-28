<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BookClub extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function memberships(): HasMany
    {
        return $this->hasMany(Membership::class);
    }

    public function readers(): BelongsToMany
    {
        return $this->belongsToMany(Reader::class, 'memberships');
    }
}
