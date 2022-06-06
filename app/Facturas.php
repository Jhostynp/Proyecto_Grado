<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    //
    public $timestamps=false;

<<<<<<< HEAD
    protected $table='facturas';
=======
    protected $table='factura';
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701

    protected $primaryKey='fac_id';

    protected $fillable = ['cli_id','fac_no','fac_fecha','fac_total','fac_iva','fac_descuento','fac_observaciones','fac_estado'];
<<<<<<< HEAD
    
=======
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
}