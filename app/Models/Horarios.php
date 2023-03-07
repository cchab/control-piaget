<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horarios extends Model
{
    use HasFactory;

        protected $fillable = [
       'nombre','aula', 'dia', 'hora', 'grupo_id', 'grado_id', 'docente_id', 'asignatura_id' 
    ];


    protected $table = "horarios";
    protected $primaryKey = "id";

    public function grupos(): BelongsTo
    {
        return $this->belongsTo(Grupos::class, 'grupo_id');
    }


    public function grados(): BelongsTo
    {
        return $this->belongsTo(Grados::class, 'grado_id');
    }


    public function asignaturas(): BelongsTo
    {
        return $this->belongsTo(Asignaturas::class, 'asignatura_id');
    }

    public function profesores(): BelongsTo
    {
        return $this->belongsTo(Profesores::class, 'docente_id');
    }

}
