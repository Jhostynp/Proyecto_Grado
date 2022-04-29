@extends('layouts.app')
@section('content')

<<<<<<< HEAD
<<<<<<< HEAD
<div class="container col-md-6" >
	<div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Productos</h3>
=======
<div class="container col-md-4" >
	<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 1%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Movimientos</h3>
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
=======

<div class="container col-md-6" >
	<div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Productos</h3>


>>>>>>> 5967af7 (Avances  Factura)

<form action="{{route('productos.store')}}" method="POST" onsubmit="return valida() ">
	@csrf
				<div class="form-group">

<<<<<<< HEAD
<<<<<<< HEAD
	<label for="">Nombre Del VideoJuego:</label>
<input class="form-control" name="pro_nombre" id="pro_nombre" placeholder="Escriba el nombre del producto">
 </div>

				<div class="form-group">
<label for="">Descripcion:</label>
	<input class="form-control" name="pro_descripcion" id="pro_descripcion" placeholder="Escriba la Descripcion">
=======
	<label for="">Nombre Del Producto:</label>
	<input class="form-control" name="pro_nombre" id="pro_nombre">
  				</div>

				<div class="form-group">
<label for="">Descripcion:</label>
	<input class="form-control" name="pro_descripcion" id="pro_descripcion">
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
=======

	<label for="">Nombre Del VideoJuego:</label>
<input class="form-control" name="pro_nombre" id="pro_nombre" placeholder="Escriba el nombre del producto">
 </div>

				<div class="form-group">
<label for="">Descripcion:</label>
	<input class="form-control" name="pro_descripcion" id="pro_descripcion" placeholder="Escriba la Descripcion">


>>>>>>> 5967af7 (Avances  Factura)
  				</div>

				

  							<div class="form-group">
<label for="">Stock:</label>
<<<<<<< HEAD
<<<<<<< HEAD
	<input class="form-control" name="prod_stock" id="prod_stock" placeholder="Escriba el stock del producto">
=======
	<input class="form-control" name="prod_stock" id="prod_stock">
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
=======

	<input class="form-control" name="prod_stock" id="prod_stock" placeholder="Escriba el stock del producto">



>>>>>>> 5967af7 (Avances  Factura)
  				</div>

  				  							<div class="form-group">
<label for="">Precio:</label>
<<<<<<< HEAD
<<<<<<< HEAD
	<input class="form-control" name="prod_precio" id="prod_precio" placeholder="Escriba el precio del producto">
=======
	<input class="form-control" name="prod_precio" id="prod_precio">
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
=======

	<input class="form-control" name="prod_precio" id="prod_precio" placeholder="Escriba el precio del producto">



>>>>>>> 5967af7 (Avances  Factura)
  				</div>



	  			<div class="form-group">
<<<<<<< HEAD
<<<<<<< HEAD
		<label for="">Fecha De Ingreso:</label>
	<input type="date" class="form-control" name="prod_fecha" id="prod_fecha" placeholder="Ingrese la fecha donde entra el producto">
=======
		<label for="">Fecha</label>
	<input type="date" class="form-control" name="prod_fecha" id="prod_fecha">
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
=======

		<label for="">Fecha De Ingreso:</label>
	<input type="date" class="form-control" name="prod_fecha" id="prod_fecha" placeholder="Ingrese la fecha donde entra el producto">

	

>>>>>>> 5967af7 (Avances  Factura)
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
<<<<<<< HEAD
         
<<<<<<< HEAD
         @foreach($provedor as $p)

         <option value=" {{$p->prov_id}} "> {{$p->prov_nombre}} </option>
=======
         @foreach($categorias as $c)

         <option value=" {{$c->prov_id}} "> {{$c->prov_nombre}} </option>
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
=======

         @foreach($provedor as $p)

         <option value=" {{$p->prov_id}} "> {{$p->prov_nombre}} </option>


>>>>>>> 5967af7 (Avances  Factura)

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