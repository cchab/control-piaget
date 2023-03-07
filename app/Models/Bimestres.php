<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimestres extends Model
{
    use HasFactory;

    protected $table = "bimestres";
    protected $primaryKey = "id";

    protected $fillable = ['numero'];
}
