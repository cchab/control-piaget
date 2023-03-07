<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grados extends Model
{
    use HasFactory;
    protected $table = "grados";
    protected $primaryKey = "id";

    protected $fillable = ['numero'];

  
}
