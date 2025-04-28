<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function books()
    {
        return $this->morphedByMany(Book::class, 'taggable');
    }

    public function reviews()
    {
        return $this->morphedByMany(Review::class, 'taggable');
    }

    public function creations()
    {
        return $this->morphedByMany(Creation::class, 'taggable');
    }
}
