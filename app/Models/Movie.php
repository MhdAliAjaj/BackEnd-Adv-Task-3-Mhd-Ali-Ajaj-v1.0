<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Movie extends Model
{
    use HasFactory;

    protected $fillable = 
    ['title', 'director', 'genre', 'release_year', 'description'
];
//relation between movie & rating  one to many
public function rates(): HasMany

{
    return $this->hasMany(Rating::class);

}
}
