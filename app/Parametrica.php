<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametrica extends Model
{
    protected $table = "parametricas";
    //public $incrementing=false;
    protected $primaryKey ='id_parametrica';
    protected $fillable =['nombre_tabla','id','descripcion','estado','creado_por','modificado_por'];


 	public function creado()
    {
        return $this->belongsTo('App\Usuario','creado_por');
    }
    public function modificado()
    {
        return $this->belongsTo('App\Usuario','modificado_por');
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
