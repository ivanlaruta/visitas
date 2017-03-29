<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $table = "visitas";
    protected $primaryKey ='id_visita';
    protected $fillable =['ci_visitante','tipo_doc','fecha','hora_entrada','hora_salida','id_motivo','ci_empleado','id_tarjeta','observaciones','estado_visita'];


    public function visitante()
    {
    	return $this->belongsTo('App\Cargo');
    }
    public function empleado()
    {
    	return $this->belongsTo('App\Ubicacion');
    }
    public function targeta()
    {
    	return $this->belongsTo('App\Cargo');
    }
    
}