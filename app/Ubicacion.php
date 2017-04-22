<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = "ubicaciones";
    public $incrementing=false;
    protected $primaryKey ='id_ubicacion';
    protected $fillable =['id_ubicacion','nombre','ciudad','direccion','estado','creado_por','modificado_por'];

    public function tarjetas()
    {
        return $this->hasMany('App\Tarjeta','id_ubicacion');
    }
    public function empleados()
    {
    	return $this->hasMany('App\Empleado','id_ubicacion');
    }
    public function visitas()
    {
        return $this->hasMany('App\Visita','id_ubicacion');
    }

    public function creado()
    {
        return $this->belongsTo('App\User','creado_por');
    }
    public function modificado()
    {
        return $this->belongsTo('App\User','modificado_por');
    }
}
