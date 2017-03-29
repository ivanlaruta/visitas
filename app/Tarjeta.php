<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = "tarjetas";
    public $incrementing=false;
    protected $primaryKey ='id_tarjeta';
    protected $fillable =['id_tarjeta','descripcion','estado'];

    public function visitas()
    {
        return $this->hasMany('App\Visita');
    }

}
