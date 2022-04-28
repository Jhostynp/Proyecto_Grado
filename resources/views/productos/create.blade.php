@extends('layouts.app')
@section('content')

<div class="container col-md-4" >
	<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 1%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Movimientos</h3>

<form action="{{route('productos.store')}}" method="POST" onsubmit="return valida() ">
	@csrf
				<div class="form-group">

	<label for="">Nombre Del Producto:</label>
	<input class="form-control" name="pro_nombre" id="pro_nombre">
  				</div>

				<div class="form-group">
<label for="">Descripcion:</label>
	<input class="form-control" name="pro_descripcion" id="pro_descripcion">
  				</div>

  							<div class="form-group">
<label for="">Stock:</label>
	<input class="form-control" name="prod_stock" id="prod_stock">
  				</div>

  				  							<div class="form-group">
<label for="">Precio:</label>
	<input class="form-control" name="prod_precio" id="prod_precio">
  				</div>



	  			<div class="form-group">
		<label for="">Fecha</label>
	<input type="date" class="form-control" name="prod_fecha" id="prod_fecha">
	  			</div>

<div class="form-group">

	<label for="">Categoria:</label>

	<select name="cat_id" id="cat_id" class="form-control">

<option  disabled>Elija una opcion</option>
         
         @foreach($categorias as $c)

         <option value=" {{$c->cat_id}} "> {{$c->cat_nombre}} </option>

         @endforeach

		</select>
</div>

<div class="form-group">

	<label for="">Provedor:</label>

	<select name="prov_id" id="prov_id" class="form-control">
		
<option  disabled>Elija una opcion</option>
         
         @foreach($categorias as $c)

         <option value=" {{$c->prov_id}} "> {{$c->prov_nombre}} </option>

         @endforeach

		</select>
</div>


				<div class="form-group">
					<button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x">Guardar</button>
</form>
				</div>
		</form> 
	</div>
</div>	
@endsection