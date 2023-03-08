<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Horarios extends Model
{
    use HasFactory;

        protected $fillable = [
       'aula', 'dia', 'hora', 'grupo_id', 'grado_id', 'docente_id','hora_fin'
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


    public function asignaturas(): BelongsToMany
    {
        return $this->belongsToMany(Asignaturas::class, 'asignaturas_horarios','horario_id','asignatura_id');
    }

    public function profesores(): BelongsTo
    {
        return $this->belongsTo(Profesores::class, 'docente_id');
    }

    public function getDiaSAttribute()
    {
        $val = "-";
        //dd($this->dia);
        if($this->dia==1)
            $val ="Lunes";
        else if($this->dia==2)
            $val ="Martes";
        else if($this->dia==3)
            $val ="Miércoles";
        else if($this->dia==4)
            $val ="Jueves";
        else if($this->dia==5)
            $val ="Viernes";
        else
            $val ="Sábado";

        return $val;
    }

    public function getMateriasAttribute()
    {
        $val = "";
        foreach ($this->asignaturas as $asig){
            $val = $val.', '. $asig->nombre;
        }
        return substr($val,1,null);
    }

}
