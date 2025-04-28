<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Membership extends Model
{
    use HasFactory;
    protected $fillable = ['reader_id', 'book_club_id'];

    public function reader(): BelongsTo
    {
        return $this->belongsTo(Reader::class);
    }

    public function bookClub(): BelongsTo
    {
        return $this->belongsTo(BookClub::class);
    }
}
