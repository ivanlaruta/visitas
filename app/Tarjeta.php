<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = "tarjetas";
    public $incrementing=false;
    protected $primaryKey ='id_tarjeta';
    protected $fillable =['id_tarjeta','tipo_tarjeta','psw','ci_empleado','estado','creado_por','modificado_por'];

    public function visitas()
    {
        return $this->hasMany('App\Visita','id_tarjeta');
    }
    public function empleado()
    {
        return $this->belongsTo('App\Empleado','ci_empleado');
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
