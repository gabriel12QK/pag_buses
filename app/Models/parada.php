<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parada extends Model
{
    use HasFactory;
    protected $table= 'paradas';
    public $timestamps =false;
     public $fillable = ['nom_parada','estado'];
}
