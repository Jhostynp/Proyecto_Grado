@extends('layouts.app')
@section('content')


<div class="container col-md-6" >
<<<<<<< HEAD
	  <h3>Crear nueva factura</h3>
@include('facturas.fields')

 </div> 

=======
	<div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Facturas</h3>

<form action="{{route('facturas.store')}}" method="POST">
@csrf
<label for="">Clientes</label>
<select name="cli_id" id="cli_id" class="form-control">
@foreach($clientes as $c)

<option value="{{$c->cli_id}}">{{$c->cli_name}}</option>
@endforeach
</select>




                <div class="form-group">

                    <label for="">Numero De Factura:</label>
                    <input type="string" name="fac_no" id="fac_no" class="form-control" placeholder="Escriba el numero de su factura">
                </div>               


                 <div class="form-group">

                    <label for="">Fecha De Factura:</label>
                    <input type="date" name="fac_fecha" id="fac_fecha" class="form-control" placeholder="Escriba su nombre">
                </div>                
           



                <div class="form-group">

                    <label for="">Descuento:</label>
                    <input type="text" name="fac_descuento" id="fac_descuento" class="form-control" placeholder="Escriba su nombre">
                </div>


                <div class="form-group">

                    <label for="">IVA:</label>
                    <input type="text" readonly name="fac_iva" id="fac_iva" value="0" class="form-control" placeholder="Escriba su nombre">
                </div>     


                <div class="form-group">

                    <label for="fac_total">Total:</label>
                    <input type="text" readonly name="fac_total" id="fac_total" class="form-control" value="0" placeholder="Escriba su nombre">
                </div>                



                <div class="form-group">

                    <label for="">Observaciones De Factura:</label>
                    <input type="text" name="fac_observaciones" id="fac_observaciones" class="form-control" placeholder="Escriba su nombre">
                </div>               


<div class="form-group">
					<button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x">Guardar</button>


</div>
</form>
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701

@endsection