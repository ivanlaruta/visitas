<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = "cargos";
   
    protected $primaryKey ='id_cargo';
    protected $fillable =['descripcion','estado','creado_por','modificado_por'];

    public function empleados()
    {
    	return $this->hasMany('App\Empleado','id_cargo');
    }

    public function creado()
    {
        return $this->belongsTo('App\User','creado_por');
    }
    public function modificado()
    {
        return $this->belongsTo('App\User','modificado_por');
    }


    // public function creado()
    // {
    //     return $this->belongsTo('App\Usuario','creado_por');
    // }
    // public function modificado()
    // {
    //     return $this->belongsTo('App\Usuario','modificado_por');
    // }
}
