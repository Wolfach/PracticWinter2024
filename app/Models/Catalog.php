<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Catalog extends Model
{
    use HasFactory;
    
    protected $table = 'anime';
    protected $fillable = [
        'RU_Title',
        'Romanji_Title',
        'Poster',
        'Description',
        'Status',
        'Type',
        'Year',
        'Age_limit',
        'Studio',
        'Genres',
        'Episodes',
        'Dubbers',
        'Timer',
    ];


    public function genres()
    {
        return $this->belongsToMany(Genres::class, 'animegenres', 'anime_id', 'genres_id');
    }
    public function videos()
    {
        return $this->belongsToMany(Videos::class, 'animevideos', 'anime_id', 'video_id');
    }
}
