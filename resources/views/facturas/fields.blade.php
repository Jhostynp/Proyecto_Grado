@extends('layouts.app')
@section('content')
 
<script src="{{asset('js/facturas.js')}}"> </script>

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

<form action="{{route('facturas.store')}}" method="POST" onsubmit="return validarfact()">



@csrf
 <div class="col-md-7">
<label for="" required>Clientes</label>
<select name="cli_id" id="cli_id" class="form-control" required>
@foreach($clientes as $c)

@if($c->cli_id==$cli_id)
<option selected value="{{$c->cli_id}}" required>{{$c->cli_name}}</option>
@else
<option value="{{$c->cli_id}}" required>{{$c->cli_name}}</option>
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
                    <input type="text" readonly name="fac_iva" id="fac_iva" value="12" value="{{$fac_iva}}" class="form-control" placeholder="Escriba su nombre">
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


<script src="{{asset('js/detalle.js')}}"> </script>               


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
                    
<input type="hidden" name="fac_id" id="fac_id " value="{{$fac_id}}">

<input type="number" name="fad_cantidad" id="fad_cantidad" style="width:80px;" class="form-control" required>

</td>

<!--  -->







 <td>
<select name="prod_id" required id="prod_id" style="width: 200px;" class="form-control" required>

      @foreach($productos as $p)
  <option value="{{$p->prod_id}}">{{$p->pro_nombre}}</option>
  @endforeach
</select>
 </td>













<td>
                    
<input type="number"  name="fad_vu" id="fad_vu"  style="width:100px;" class="form-control" required>

</td>


<td>
                    
<input  type="number" name="fad_vt" id="fad_vt"  style="width:100px;" class="form-control">

</td>

<td>
    <button class="btn btn-success" name="btn_detalle" value="btn_detalle">+</button>
</td>
</form>

<form>
                       <tr>
</thead>
         @isset($detalle)         
<?php 
          $subt=0;
       ?>
             @foreach($detalle as $dt)
             <?php $subt+=$dt->fad_vt;?>
<tr>



                    <td>{{$dt->fad_cantidad}}</td>
                    <td>{{$dt->pro_nombre}}</td>
                    <td class="text-right">{{number_format($dt->fad_vu,2)}}$</td>
                    <td class="text-right">{{number_format($dt->fad_vt,2)}}$</td>
                    <td>
                        <button class="btn btn-danger btn-sm" name="btn_eliminar" value="{{$dt->fad_id}}">Del</button>
                    </td>
                </tr>
</form>
 @endforeach
             <?php 
                $vt=($subt-$fac_descuento)+$fac_iva;
             ?>
             <tr>
                    <td colspan="4" class="text-right">Subt:</td>
                    <td class="text-right">{{number_format($subt,2)}}$</td>
             </tr> 

                         <tr>
                    <td colspan="4" class="text-right">Subt:</td>
                    <td class="text-right">{{number_format($subt,2)}}$</td>
             </tr>
             <tr>
                    <td colspan="4" class="text-right">Desc:</td>
                    <td class="text-right">{{number_format($fac_descuento,2)}}$</td>
             </tr>
             <tr>
                    <td colspan="4" class="text-right">IVA:</td>
                    <td class="text-right">{{number_format($fac_iva,2)}}$</td>
             </tr>
             <tr>
                    <td colspan="4" class="text-right">VT:</td>
                    <td class="text-right">{{number_format($vt,2)}}$</td>
             </tr>
        @else
        <tr><th colspan="5" class="alert alert-warning">No existen datos</th></tr>
        @endisset

                   </table>
</tr>
</tr>
</thead>
</table>
<script>
window.onload = function(){
   const obj_cant=document.querySelector("#fad_cantidad");
   const obj_vu=document.querySelector("#fad_vu");
   obj_cant.addEventListener("change",()=>{
calculos();
   });

   obj_vu.addEventListener("change",()=>{
calculos();
   });

}

const calculos=()=>{
    const vc=document.querySelector("#fad_cantidad");
    const vu=document.querySelector("#fad_vu");
    const vt=vc.value*vu.value;
document.querySelector("#fad_vt").value=vt;
}


    
    </script>
</div>
</form>
 @endsection