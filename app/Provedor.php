<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    //
    public $timestamps=false;
    protected $table='provedor';
    protected $primaryKey='prov_id';
    protected $fillable = ['prov_nombre','prov_ruc','prov_telefono','prov_fecha'];
}
