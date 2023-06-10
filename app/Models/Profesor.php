<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesores';
    public $timestamps = false;

    public function propuestas():hasMany{
        return $this->hasMany(Propuesta::class);
    }
    
    public function propuestasConPivot():hasMany{
        return $this->hasMany(Propuesta::class)->withPivot(['fecha','hora','text']);
    }
}
