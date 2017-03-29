<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	protected $table = "empleados";
    public $incrementing=false;
    protected $primaryKey ='ci';
    protected $fillable =['ci','ex','nombre','paterno','materno','email','id_cargo','id_ubicacion','telefono','estado','creado_por','modificado_por'];

    public function cargo()
    {
    	return $this->belongsTo('App\Cargo','id_cargo');
    }
    public function ubicacion()
    {
    	return $this->belongsTo('App\Ubicacion','id_ubicacion');
    }
   
    public function creado()
    {
        return $this->belongsTo('App\Usuario','creado_por');
    }
    public function modificado()
    {
        return $this->belongsTo('App\Usuario','modificado_por');
    }


    public function usuarios()
    {
        return $this->hasMany('App\Usuario','ci');
    }
    public function visitas()
    {
        return $this->hasMany('App\Visita','ci');
    }
}
