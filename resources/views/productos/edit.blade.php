@extends('layouts.app')
@section('content')

<<<<<<< HEAD
<script src="{{asset('js/productos.js')}}"> </script>

<div class="container col-md-6" >
	<div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Editor de Productos</h3>

<form action="{{route('productos.update',$productos->prod_id)}}" method="POST" onsubmit="return validarprodu() ">
=======
<div class="container col-md-6" >
	<div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Productos</h3>

<form action="{{route('productos.update',$productos->prod_id)}}" method="POST" onsubmit="return valida() ">
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
	@csrf
				<div class="form-group">

	<label for="">Nombre Del VideoJuego:</label>
<<<<<<< HEAD
<input class="form-control" name="pro_nombre" value="{{$productos->pro_nombre}}" id="pro_nombre" placeholder="Escriba el nombre del producto" onkeypress="return soloLetras(event)">
=======
<input class="form-control" name="pro_nombre" value="{{$productos->pro_nombre}}" id="pro_nombre" placeholder="Escriba el nombre del producto">
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
 </div>

				<div class="form-group">
<label for="">Descripcion:</label>
<<<<<<< HEAD
	<input class="form-control" name="pro_descripcion" value="{{$productos->pro_descripcion}}" id="pro_descripcion" placeholder="Escriba la Descripcion" onkeypress="return soloLetras(event)">
=======
	<input class="form-control" name="pro_descripcion" value="{{$productos->pro_descripcion}}" id="pro_descripcion" placeholder="Escriba la Descripcion">
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
  				</div>

  							<div class="form-group">
<label for="">Stock:</label>
<<<<<<< HEAD
	<input class="form-control" name="prod_stock" value="{{$productos->prod_stock}}" id="prod_stock" placeholder="Escriba el stock del producto" onkeypress="return solonumeros(event)">
=======
	<input class="form-control" name="prod_stock" value="{{$productos->prod_stock}}" id="prod_stock" placeholder="Escriba el stock del producto">
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
  				</div>

  				  							<div class="form-group">
<label for="">Precio:</label>
<<<<<<< HEAD
	<input class="form-control" name="prod_precio" value="{{$productos->prod_precio}}" id="prod_precio" placeholder="Escriba el precio del producto" onkeypress="return solonumeros(event)">
=======
	<input class="form-control" name="prod_precio" value="{{$productos->prod_precio}}" id="prod_precio" placeholder="Escriba el precio del producto">
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
  				</div>



	  			<div class="form-group">
		<label for="">Fecha De Ingreso:</label>
	<input type="date" class="form-control" name="prod_fecha" value="{{$productos->prod_fecha}}" id="prod_fecha" placeholder="Ingrese la fecha donde entra el producto">
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
         
         @foreach($provedor as $p)

         <option value=" {{$p->prov_id}} "> {{$p->prov_nombre}} </option>

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
<<<<<<< HEAD


{{-- SOLO LETRAS --}}
<script>
  function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
</script>

{{-- SOLO NUMEROS --}}
<script>
    function solonumeros(e){
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key);
        numeros="0123456789";
        especiales="8-37-38-46";//array
        teclado_especial=false;
        for(var i in especiales){
            if (key==especiales[i]) {
                teclado_especial=true;
            }
        }
        if (numeros.indexOf(teclado)==-1 && !teclado_especial) {
            return false;
        }
    }
</script>



=======
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
@endsection