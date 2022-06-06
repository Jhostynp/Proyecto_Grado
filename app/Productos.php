<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    public $timestamps=false;
    protected $table='productos';
<<<<<<< HEAD
    protected $primaryKey='prod_id';
=======

    protected $primaryKey='prod_id';

>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
    protected $fillable = ['cat_id','prov_id','pro_nombre','pro_descripcion','prod_stock','prod_precio','prod_fecha'];
}
