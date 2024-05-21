<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; 

class Secteur extends Model
{
    use HasFactory;

    public function metiers(): HasMany
    {
        return $this->hasMany(Metier::class);
    }
}
