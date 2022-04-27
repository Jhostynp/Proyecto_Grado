<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    public $timestamps=false;
    protected $table='productos';
    protected $primaryKey='cli_id';
    protected $fillable = ['cat_id','prov_id','pro_nombre','pro_descripcion','prod_stock','prod_precio','prod_fecha'];
}
