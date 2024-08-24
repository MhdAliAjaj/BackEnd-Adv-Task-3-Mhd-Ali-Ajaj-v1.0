<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rating extends Model
{
    use HasFactory;
    protected $fillable =
        [
        'user_id', 'movie_id', 'rating', 'review',
    ];
//relation between user & rating  many to one
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    //relation between movie & rating  many to one
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }
}
