<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Videos extends Model
{
    use HasFactory;


    protected $table = 'videos';
    protected $fillable = [
         'video_name', 'video',
    ];

    public function videos()
    {
        return $this->belongsToMany(Catalog::class, 'animevideos', 'video_id', 'anime_id');
    }
}
