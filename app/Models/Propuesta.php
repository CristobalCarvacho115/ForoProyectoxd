<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Propuesta extends Model
{
    use HasFactory;

    protected $table = 'propuestas';
    public $timestamps = false;

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
