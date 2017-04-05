<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = "ubicaciones";
    public $incrementing=false;
    protected $primaryKey ='id_ubicacion';
    protected $fillable =['id_ubicacion','nombre','ciudad','estado','creado_por','modificado_por'];

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
