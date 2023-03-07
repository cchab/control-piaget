<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivelacademico extends Model
{
    use HasFactory;
    protected $table = "nivelacademico";
    protected $primaryKey = "id";

    protected $fillable = ['nombre'];
}
