<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = "visitas";
    protected $primaryKey ='id_visita';
    protected $fillable =['id_visita','ci_visitante','tipo_doc','fecha_entrada','fecha_salida','hora_entrada','hora_salida','id_motivo','ci_empleado','id_tarjeta','id_ubicacion','observaciones','estado_visita','creado_por','modificado_por'];


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
        return $this->belongsTo('App\Motivo','id_motivo');
    }
    public function tarjeta()
    {
    	return $this->belongsTo('App\Tarjeta','id_tarjeta');
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
    public function scopeSearch($query,$ci)
    {
        return $query->where('ci_visitante','LIKE','%'.$ci.'%');
    }
    
    
}