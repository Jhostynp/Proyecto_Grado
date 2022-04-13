@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12 text-light">
	<h1 style="font-family:algeria">
		Lista De Usuarios
	<a href="{{route('usuarios.create')}}" class="btn btn-success text-light">Crear </a></h1>
	
	<table class="table table-striped table-success table-sm table-bordered table-hover  ">
		  <thead class="thead-dark">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombres</th>
		<th style="text-align:center;">Email</th>
		<th style="text-align:center;">Cedula</th>
		<th style="text-align:center;">Estado</th>
		<th class="align-text-bottom"></th>

		@foreach($users as $u)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>

				<td style="text-align:center;">{{$u->usu_name}}</td>

			    <td style="text-align:center;">{{$u->email}}</td>

				<td style="text-align:center;">{{$u->usu_cedula}}</td>

				<td style="text-align:center;">{{$u->usu_estado}}</td>

				<td style="text-align:center;">

<div class="row"  >
					
<a href="{{route('usuarios.edit',$u->usu_id)}}" class="btn btn-success rounded float-right">

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="10px"> <path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>
	</a> 
 &nbsp; &nbsp; &nbsp;
  <form action="{{route('usuario.destroy',$u->usu_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf

  	<button class="btn btn-danger ">  	<img src="https://cdn-icons-png.flaticon.com/512/58/58326.png" width="15px"></button>
  </form>
 </div>

				


	
			</tr>
		</thead>
		@endforeach
	</table>
	</div>
</div>	
@endsection