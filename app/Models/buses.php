<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buses extends Model
{
    use HasFactory;
    protected $table= 'buses';
    public $timestamps =false;
     public $fillable = ['matricula','modelo','estado','capacidad','id_chofer','id_coop','id_ruta','numero'];
}
