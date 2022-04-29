<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    public $timestamps=false;
    protected $table='productos';
<<<<<<< HEAD
<<<<<<< HEAD
    protected $primaryKey='prod_id';
=======
    protected $primaryKey='cli_id';
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
=======

    protected $primaryKey='prod_id';

>>>>>>> 5967af7 (Avances  Factura)
    protected $fillable = ['cat_id','prov_id','pro_nombre','pro_descripcion','prod_stock','prod_precio','prod_fecha'];
}
