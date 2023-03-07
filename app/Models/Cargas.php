<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cargas extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo', 'grado', 'nivel', 'periodo', 'docente_id', 'asignatura_id', 'bimestre', 'alumno_id' ];


    protected $table = "cargas";
    protected $primaryKey = "id";


    public function profesores(): BelongsTo
    {
        return $this->belongsTo(Profesores::class, 'docente_id');
    }



    public function asignaturas(): BelongsTo
    {
        return $this->belongsTo(Asignaturas::class, 'asignatura_id');
    }



    public function alumnos(): BelongsTo
    {
        return $this->belongsTo(Alumnos::class, 'alumno_id');
    }



    public function periodos(): BelongsTo
    {
        return $this->belongsTo(Periodos::class, 'periodo');
    }



    public function niveles(): BelongsTo
    {
        return $this->belongsTo(Niveles::class, 'nivel');
    }



    public function grupos(): BelongsTo
    {
        return $this->belongsTo(Grupos::class, 'grupo');
    }



    public function grados(): BelongsTo
    {
        return $this->belongsTo(Grados::class, 'grado');
    }


    public function bimestres(): BelongsTo
    {
        return $this->belongsTo(Bimestres::class, 'bimestre');
    }
}
