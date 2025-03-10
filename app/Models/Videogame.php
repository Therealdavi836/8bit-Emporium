<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'suppliers_id', 'developers_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'suppliers_id');
    }

    public function developer() 
    {
        return $this->belongsTo(Developer::class, 'developers_id');
    }

    // Definir la relación videogames
    public function videogames()
    {
        return $this->hasMany(Videogame::class);
    }
}
