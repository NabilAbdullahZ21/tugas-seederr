<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['body', 'reader_id'];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function reader(): BelongsTo
    {
        return $this->belongsTo(Reader::class);
    }
}
