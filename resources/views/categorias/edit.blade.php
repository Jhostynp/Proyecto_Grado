@extends('layouts.app')
@section('content')
<script src="{{asset('js/categorias.js')}}"></script>	
<div class="container col-md-4" >
<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center-left;"><img src="https://smpuigextraescolares.files.wordpress.com/2015/10/frustracion_videojuegos.png" width="100px"> Editar Categorias</h1>	 
<form action="{{route('categoria.uptade',$categoria->cat_id)}}" method="POST" onsubmit="return validar()">
	@csrf

				<div class="form-group">
                    
					<div></div>
					<label for="">Detalle Categoria:</label>
				    <input type="text" value="{{$categoria->cat_nombre}}" name="cat_nombre" id="cat_nombre" class="form-control" placeholder="Realice los cambio que desea">
  				</div>
  				
				<div class="form-group text-white">
					<button class="btn btn-info "> Registrar</button>
				</div>
		</form>
	</div>
</div>	
@endsection