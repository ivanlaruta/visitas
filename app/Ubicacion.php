<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = "ubicaciones";
    public $incrementing=false;
    protected $primaryKey ='id_ubicacion';
    protected $fillable =['id_ubicacion','nombre','ciudad','estado'];
}
