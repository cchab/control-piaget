<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Pagos extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumno_id', 'curso_id', 'valor_curso', 'aporte', 'photo_pago'
    ];

    /* de 1 a muchos */
    public function curso(){
        return $this->belongsTo(Cursos::class);
    }

    /* de 1 a muchos */
    public function alumno(){
        return $this->belongsTo(Alumnos::class);
    }

    public function concepto(): BelongsToMany
    {
        return $this->belongsToMany(Conceptos::class,'concepto_pago', 'concepeto_id', 'pago_id');
    }

}

