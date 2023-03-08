<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Cargas extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo_id', 'grado', 'nivel_id', 'periodo', 'docente_id', 'asignatura_id',
        'bimestre', 'alumno_id' ];


    protected $table = "cargas";
    protected $primaryKey = "id";


    public function profesores(): BelongsTo
    {
        return $this->belongsTo(Profesores::class, 'docente_id');
    }



    public function asignaturas(): BelongsToMany
    {
        return $this->belongsToMany(Asignaturas::class,'asignaturas_cargas', 'carga_id', 'asignatura_id');
    }

    public function alumnos(): BelongsToMany
    {
        return $this->belongsToMany(Alumnos::class, 'alumnos_cargas','carga_id','alumno_id');
    }



    public function periodos(): BelongsTo
    {
        return $this->belongsTo(Periodos::class, 'periodo');
    }



    public function niveles(): BelongsTo
    {
        return $this->belongsTo(Niveles::class, 'nivel_id');
    }



    public function grupos(): BelongsTo
    {
        return $this->belongsTo(Grupos::class, 'grupo_id');
    }



    public function grados(): BelongsTo
    {
        return $this->belongsTo(Grados::class, 'grado');
    }


    public function bimestres(): BelongsTo
    {
        return $this->belongsTo(Bimestres::class, 'bimestre');
    }

    public function getMateriasAttribute()
    {
        $val = "";
        foreach ($this->asignaturas as $asig){
            $val = $val.', '. $asig->nombre;
        }
        return substr($val,1,null);
    }

    public function getAlumnadoAttribute()
    {
        $val = "";
        foreach ($this->alumnos as $alumno){
            $val = $val.', '. $alumno->nombre;
        }
        return substr($val,1,null);
    }

}
