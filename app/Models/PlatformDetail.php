<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatformDetail extends Model
{
    use HasFactory;

    public function platform()
    {
        return $this->belongsTo(Platform::class, 'platforms_id');
    }

    public function videogame()
    {
        return $this->belongsTo(Videogame::class, 'videogames_id');
    }
}
