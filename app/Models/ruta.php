<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    use HasFactory;
    protected $table= 'rutas';
    public $timestamps =false;
     public $fillable = ['nom_ruta','inicio','fin','id_parada','estado'];
}
