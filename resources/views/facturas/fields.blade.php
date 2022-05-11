@extends('layouts.app')
@section('content')
 

<div class="row" >
    <div class="col-md-5">
<div class=" text-white text-white " style="margin-top: 1%;background:#251D3A;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Facturas</h3>


<?php


if (isset($facturas)) {
    //
 $fac_id=$facturas->fac_id;
 $cli_id=$facturas->cli_id;
 $fac_no=$facturas->fac_no;
 $fac_fecha=$facturas->fac_fecha;
 $fac_total=$facturas->fac_total;
 $fac_iva=$facturas->fac_iva;
 $fac_descuento=$facturas->fac_descuento;
 $fac_observaciones=$facturas->fac_observaciones;
 $fac_estado=$facturas->fac_estado; 

}else{
 $fac_id="";
 $cli_id="";
 $fac_no="";
 $fac_fecha=date('Y-m-d');
 $fac_total=0;
 $fac_iva=0;
 $fac_descuento=0;
 $fac_observaciones="";
 $fac_estado="";


}




?>

<form action="{{route('facturas.store')}}" method="POST">



@csrf
 <div class="col-md-7">
<label for="">Clientes</label>
<select name="cli_id" id="cli_id" class="form-control">
@foreach($clientes as $c)

@if($c->cli_id==$cli_id)
<option selected value="{{$c->cli_id}}">{{$c->cli_name}}</option>
@else
<option value="{{$c->cli_id}}">{{$c->cli_name}}</option>
@endif

@endforeach
</select>


</div>   

                <div class="col-md-7">

                    <label for="">Numero De Factura:</label>
                    <input type="string" name="fac_no" id="fac_no" value="{{$fac_no}}" class="form-control" placeholder="Escriba el numero de su factura">
                </div>               


                 <div class="col-md-7">

                    <label for="">Fecha De Factura:</label>
                    <input type="date" name="fac_fecha" id="fac_fecha" value="{{$fac_fecha}}" class="form-control" placeholder="Escriba su nombre">
                </div>                
           



                <div class="col-md-7">

                    <label for="">Descuento:</label>
                    <input type="text" name="fac_descuento" id="fac_descuento" value="{{$fac_descuento}}" class="form-control" placeholder="Escriba su nombre">
                </div>


                <div class="col-md-7">

                    <label for="">IVA:</label>
                    <input type="text" readonly name="fac_iva" id="fac_iva" value="0" value="{{$fac_iva}}" class="form-control" placeholder="Escriba su nombre">
                </div>     


              <div class="col-md-7">

                    <label for="fac_total">Total:</label>
                    <input type="text" readonly name="fac_total" id="fac_total" value="{{$fac_total}}" class="form-control" value="0" placeholder="Escriba su Total">
                </div>                



         <div class="col-md-7">

                    <label for="">Observaciones De Factura:</label>
                    <input type="text" name="fac_observaciones" id="fac_observaciones"  value="{{$fac_observaciones}}" class="form-control" placeholder="Escriba sus Observaciones">
                </div>               


<div class="col-md-8" style="margin-top: 1%;background:#251D3A;"> 
					<button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x">Guardar</button>

</div>

</form>

</div>
</div>


               


<form action="{{route('facturas.detalle')}}" method="POST">
@csrf
    <div class="col-sm-4 ">                
<table class="table table-striped table-success table-sm table-bordered table-hover table align-middle " style="margin-top: 1%;">
                     <thead class="thead-dark">
                     <th>Cantidad</th>
                       <th>Producto</th>
                       <th>Valor U.</th>
                       <th>Valor T.</th>
                       <th>     </th>
                      
                       <tr>
 <td>
                    
<input type="hidden" name="fac_id" id="fac_id "  value="{{$fac_id}}">
<input type="text" name="fad_cantidad" id="fad_cantidad" style="width:50px;" class="form-control">

</td>

 <td>
<select name="prod_id" id="prod_id" style="width: 200px;" class="form-control">
  <option selected disabled>Productos</option>
  @foreach($productos as $p)
  <option value="{{$p->prod_id}}">{{$p->pro_nombre}}</option>
  @endforeach
</select>
 </td>

<td>
                    
<input type="number"  name="fad_vu" id="fad_vu"  style="width:100px;" class="form-control">

</td>


<td>
                    
<input type="number"  name="fad_vt" id="fad_vt"  style="width:100px;" class="form-control">

</td>

<td>
    <button class="btn btn-success" name="btn_detalle" value="btn_detalle">+</button>
</td>

                       <tr>
</thead>

@foreach($detalle as $dt)
<tr>

        <td>{{$dt->fad_cantidad}}</td>
    <td>{{$dt->pro_nombre}}</td>

    <td>{{$dt->fad_vu}}</td>
    <td>{{$dt->fad_vt}}</td>
</tr>
@endforeach

                   </table>
</tr>
</tr>
</thead>
</table>

</div>
</form>
 @endsection