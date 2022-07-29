<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;
    protected $table= 'horarios';
    public $timestamps =false;
     public $fillable = ['frecuencia','id_bus','id_parada'];
}
