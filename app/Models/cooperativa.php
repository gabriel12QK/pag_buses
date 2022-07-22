<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cooperativa extends Model
{
    use HasFactory;
    protected $table= 'cooperativas';
    public $timestamps =false;
     public $fillable = ['nom_coop','estado','id_dueño'];
}
