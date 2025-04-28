<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['bio', 'address'];

    public function reader(): BelongsTo
    {
        return $this->belongsTo(Reader::class);
    }
}
