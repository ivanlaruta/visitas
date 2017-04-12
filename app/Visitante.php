<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table = "visitantes";
    public $incrementing=false;
    protected $primaryKey ='ci';
    protected $fillable =['ci','ex','nombre','paterno','materno','telefono','estado','creado_por','modificado_por'];

    public function visitas()
    {
        return $this->hasMany('App\Visita','ci');
    }
     public function creado()
    {
        return $this->belongsTo('App\User','creado_por');
    }
    public function modificado()
    {
        return $this->belongsTo('App\User','modificado_por');
    }
    public function scopeSearch($query,$ci)
    {
        return $query->where('ci','LIKE','%'.$ci.'%');
    }
}
