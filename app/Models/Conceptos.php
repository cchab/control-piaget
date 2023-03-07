<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Conceptos extends Model
{
    use HasFactory;
    protected $table = 'Conceptos'; 
    protected $fillable = [
        'id','nombre', 'monto','fecha'
    ];

    public function pago(): BelongsToMany
    {
        return $this->belongsToMany(Pago::class,'concepto_pago', 'concepto_id', 'pago_id');
    }
}
