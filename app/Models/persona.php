<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table= 'personas';
    public $timestamps =false;
     public $fillable = ['nom','ape','CI','telf','estado','id_tipo'];
}
