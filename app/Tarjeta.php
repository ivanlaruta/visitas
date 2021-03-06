<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = "tarjetas";
    public $incrementing=false;
    protected $primaryKey ='id_tarjeta';
    protected $fillable =['id_tarjeta','tipo_tarjeta','estado_prestamo','psw','id_ubicacion','ci_empleado','estado','creado_por','modificado_por','ci_visitante'];

    
    public function empleado()
    {
        return $this->belongsTo('App\Empleado','ci_empleado');
    }
     public function creado()
    {
        return $this->belongsTo('App\User','creado_por');
    }
    public function modificado()
    {
        return $this->belongsTo('App\User','modificado_por');
    }
    public function ubicacion()
    {
        return $this->belongsTo('App\Ubicacion','id_ubicacion');
    }
    public function visitante()
    {
        return $this->belongsTo('App\Visitante','ci_visitante');
    }

}
