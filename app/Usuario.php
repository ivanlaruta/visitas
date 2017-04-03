<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    public $incrementing=false;
    protected $primaryKey ='usuario';
    protected $fillable =['usuario','password','ci_empleado','id_rol'];

    public function empleado()
    {
    	return $this->belongsTo('App\Empleado','ci_empleado');
    }

    public function empleados()
    {
        return $this->hasMany('App\Empleado','usuario');
    }
     public function cargos()
    {
        return $this->hasMany('App\Cargo','usuario');
    }
     public function motivos()
    {
        return $this->hasMany('App\Motivo','usuario');
    }
     public function parametricas()
    {
        return $this->hasMany('App\Parametrica','usuario');
    }
     public function tarjetas()
    {
        return $this->hasMany('App\Tarjeta','usuario');
    }
     public function ubicaciones()
    {
        return $this->hasMany('App\Ubicacion','usuario');
    }
     public function visitas()
    {
        return $this->hasMany('App\Visita','usuario');
    }
     public function visitantes()
    {
        return $this->hasMany('App\Visitante','usuario');
    } 


    /*public function visitas()
    {
        return $this->hasMany('App\Visita','usuario');
    }*/
}
