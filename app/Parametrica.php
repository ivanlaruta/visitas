<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametrica extends Model
{
    protected $table = "parametricas";
    //public $incrementing=false;
    protected $primaryKey ='id_parametrica';
    protected $fillable =['nombre_tabla','id','descripcion','estado'];
}
