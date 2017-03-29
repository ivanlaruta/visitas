<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = "visitas";
    protected $primaryKey ='id_visita';
    protected $fillable =['ci_visitante','tipo_doc','fecha','hora_entrada','hora_salida','id_motivo','ci_empleado','id_tarjeta','observaciones','estado_visita','creado_por','modificado_por'];


    public function visitante()
    {
    	return $this->belongsTo('App\Visitante','ci_visitante');
    }
    public function empleado()
    {
    	return $this->belongsTo('App\Empleado','ci_empleado');
    }
    public function motivo()
    {
        return $this->belongsTo('App\Empleado','id_motivo');
    }
    public function targeta()
    {
    	return $this->belongsTo('App\Tarjeta','id_tarjeta');
    }
    public function creado()
    {
        return $this->belongsTo('App\Usuario','creado_por');
    }
    public function modificado()
    {
        return $this->belongsTo('App\Usuario','modificado_por');
    }
}