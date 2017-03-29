<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table = "visitantes";
    public $incrementing=false;
    protected $primaryKey ='ci';
    protected $fillable =['ci','ex','nombre','paterno','materno','telefono','estado'];

    public function visitas()
    {
        return $this->hasMany('App\Visita');
    }
}
