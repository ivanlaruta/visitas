<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = "cargos";
   
    protected $primaryKey ='id_cargo';
    protected $fillable =['descripcion','estado'];
}
