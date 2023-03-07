<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    use HasFactory;
    protected $table = "periodos";
    protected $primaryKey = "id";

    protected $fillable = ['nombre', 'fecha_inicio','fecha_fin'];



}
