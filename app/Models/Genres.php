<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genres extends Model
{
    use HasFactory;

    protected $table = 'genres';
    protected $fillable = [
         'Genre',
    ];

    public function anime()
    {
        return $this->belongsToMany(Catalog::class, 'animegenres', 'genres_id', 'anime_id');
    }
}
