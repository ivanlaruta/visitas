<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $primaryKey ='id_usuario';
    protected $fillable =['ci_empleado','usuario','password','id_rol'];

    public function empleado()
    {
    	return $this->belongsTo('App\Empleado','ci_empleado');
    }

    public function empleados()
    {
        return $this->hasMany('App\Empleado','id_usuario');
    }
     public function cargos()
    {
        return $this->hasMany('App\Cargo','id_usuario');
    }
     public function motivos()
    {
        return $this->hasMany('App\Motivo','id_usuario');
    }
     public function parametricas()
    {
        return $this->hasMany('App\Parametrica','id_usuario');
    }
     public function tarjetas()
    {
        return $this->hasMany('App\Tarjeta','id_usuario');
    }
     public function ubicaciones()
    {
        return $this->hasMany('App\Ubicacion','id_usuario');
    }
     public function visitas()
    {
        return $this->hasMany('App\Visita','id_usuario');
    }
     public function visitantes()
    {
        return $this->hasMany('App\Visitante','id_usuario');
    }

    /*public function visitas()
    {
        return $this->hasMany('App\Visita','id_usuario');
    }*/
}
