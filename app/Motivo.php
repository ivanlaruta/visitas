<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    protected $table = "motivos";
   
    protected $primaryKey ='id_motivos';
    protected $fillable =['descripcion','estado','creado_por','modificado_por'];

    public function visitas()
    {
    	return $this->hasMany('App\Visita','id_motivo');
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
