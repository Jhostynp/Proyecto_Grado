@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12 text-light">
	<h1 style="font-family:algeria">
		<img src="https://alfabetajuega.com/hero/2022/01/personajes-populares-videojuegos.webp?width=480&aspect_ratio=19:10" width="150px">
		Lista De Provedores
<a href="{{route('provedor.create')}}" class="btn btn-success text-light">Crear </a></h1>
	
	<table class="table table-striped table-success table-sm table-bordered table-hover  ">
		  <thead class="thead-dark">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Nombres</th>
		<th style="text-align:center;">RUC</th>
		<th style="text-align:center;">Telefono</th>
		<th style="text-align:center;">Fecha de registro</th>
		<th style="text-align:center;" class="align-text-bottom"></th>

		@foreach($provedor as $pr)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>

				<td style="text-align:center;">{{$pr->prov_nombre}}</td>

			    <td style="text-align:center;">{{$pr->prov_ruc}}</td>

				<td style="text-align:center;">{{$pr->prov_telefono}}</td>

				<td style="text-align:center;">{{$pr->prov_fecha}}</td>

				<td style="text-align:center;"> <div class="row"  >
<ul></ul>
	
<a href="{{route('provedor.edit',$pr->prov_id)}}" class="btn btn-success rounded float-right">

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="19" height="19"><path fill-rule="evenodd" d="M5.962 2.513a.75.75 0 01-.475.949l-.816.272a.25.25 0 00-.171.237V21.25c0 .138.112.25.25.25h14.5a.25.25 0 00.25-.25V3.97a.25.25 0 00-.17-.236l-.817-.272a.75.75 0 01.474-1.424l.816.273A1.75 1.75 0 0121 3.97v17.28A1.75 1.75 0 0119.25 23H4.75A1.75 1.75 0 013 21.25V3.97a1.75 1.75 0 011.197-1.66l.816-.272a.75.75 0 01.949.475z"></path><path fill-rule="evenodd" d="M7 1.75C7 .784 7.784 0 8.75 0h6.5C16.216 0 17 .784 17 1.75v1.5A1.75 1.75 0 0115.25 5h-6.5A1.75 1.75 0 017 3.25v-1.5zm1.75-.25a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h6.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25h-6.5z"></path></svg>
	</a> 
 &nbsp; &nbsp; &nbsp;
  <form action="{{route('provedor.destroy',$pr->prov_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf


  	<button class="btn btn-danger ">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="18" height="18"><path fill-rule="evenodd" d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z"></path><path d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z"></path><path d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z"></path></svg></button>
  </form>
 </div>
</td>



				


	
			</tr>
		</thead>
		@endforeach
	</table>
	</div>
</div>	
@endsection