<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Propuesta extends Model
{
    use HasFactory;

    protected $table = 'propuestas';

    public function estudiantes():BelongsToMany{
        return $this->belongsToMany(Estudiante::class);
    }

    public function profesores():hasMany{
        return $this->hasMany(Profesor::class);
    }
    
    public function profesoresConPivot():hasMany{
        return $this->hasMany(Profesor::class)->withPivot(['fecha','hora','text']);
    }
}
