<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profesores extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','fecha_nacimiento', 'edad', 'genero', 'nivelacademico', 'email',
        'telefono', 'localidad', 'domicilio', 'tipo_profesor',  'curso_id', 'foto_profesor'
    ];

    protected $table = "profesores";
    protected $primaryKey = "id";



    public function cargas(): HasMany
    {
        return $this->hasMany(Cargas::class);
    }

    public function getTipoAttribute()
    {
        $val = "-";
        if($this->tipo_profesor== 1)
            $val = "Asignatura";
        else
            $val = "Tiempo completo";
        return $val;
    }

    public function getNivelAttribute()
    {
        $val = "-";
        if($this->nivelacademico== 1)
            $val = "Licenciatura";
        else if($this->nivelacademico== 2)
            $val = "Maestría";
        else
            $val = "Doctorado";
        return $val;
    }

}
