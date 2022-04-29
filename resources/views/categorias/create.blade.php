@extends('layouts.app')
@section('content')

<script src="{{asset('js/categorias.js')}}"> </script>

<div class="container col-md-6" >
	<div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Nueva Categoria</h1>	 
		<form action="{{route('categoria.store')}}" method="POST" onsubmit="return validar()">
			@csrf
				<div class="form-group">
                    
					<div></div>
					<label for="">Detalle Categoria:</label>
				    <input type="text" name="cat_nombre" id="cat_nombre" class="form-control" placeholder="Escriba la categoria que pertenece el videojuego">
  				</div>
				<div class="form-group">
					<button class="btn btn-dark">Guardar</button>
				</div>
		</form>
	</div>
</div>	
@endsection