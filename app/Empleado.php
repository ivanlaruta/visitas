<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	protected $table = "empleados";
    public $incrementing=false;
    protected $primaryKey ='ci';
    protected $fillable =['ci','ex','nombre','paterno','materno','email','id_cargo','id_ubicacion','telefono','estado'];
}
