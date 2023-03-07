<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumnos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'primer_apellido','segundo_apellido','sexo','fecha_nacimiento','curp','edad','tipo_sangre','nivel','grado','grupo','periodo','nombre_tutor','parentesco','tutor_principal','direccion','colonia','telefono_contacto','nombre_emergencia','parentesco2','tel1_autorizada','foto_estudiante','profesor_id'


    ];
    protected $table = "alumnos";
    protected $primaryKey = "id";

    public function Pagos()
    {
        return $this->hasMany('App\Pago');
    }

    
   
    public function grupos(): BelongsTo
    {
        return $this->belongsTo(Grupos::class, 'grupo');
    }



    public function grados(): BelongsTo
    {
        return $this->belongsTo(Grados::class, 'grado');
    }

    public function periodos(): BelongsTo
    {
        return $this->belongsTo(Periodos::class, 'periodo');
    }

    
    public function niveles(): BelongsTo
    {
        return $this->belongsTo(Niveles::class, 'nivel');
    }
    


}
