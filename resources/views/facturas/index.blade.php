@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-12 text-white">


		<h1 style="font-family:algeria"> <img src="https://www.vichaunter.org/wp-content/uploads/2017/01/juegos-digitales-vs-copias-fisicas.jpg" width="180x"> Facturas

<a href=" {{route('facturas.create')}} " class="btn-primary btn-success btn text-white">Crear</a></h1>

			<form class="" action="{{route('facturas.search')}}" method="POST">
			@csrf
			Desde: <input type="date" name="desde" value="{{$desde}}">
			Hasta: <input type="date" name="hasta" value="{{$hasta}}">

			<button class="btn btn-success btn-sm" title="Buscar" value="btn_buscar" name="btn_buscar">

				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></button>
				

			<button class="btn btn-danger btn-sm" title="PDF" value="btn_pdf" name="btn_pdf">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">

 			 <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
</svg></i></button>
			</form>
<ul></ul>






	<table class="table table-striped table-success table-sm table-bordered table-hover table align-middle  ">

		  <thead class="thead-dark">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Cliente</th>
		<th style="text-align:center;">No.</th>
		<th style="text-align:center;">Fecha</th>

		<th style="text-align:center;">Descuento</th>

		<th style="text-align:center;">Iva</th>




		<th style="text-align:center;">Observacion</th>
		<th style="text-align:center;">Estado</th>








		<th style="text-align:center;"> </th>

		
@foreach($facturas as $fac)


			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>

				<td style="text-align:center;">{{$fac->cli_name}}</td>

      			<td style="text-align:center;">{{$fac->fac_no}}</td>

      			<td style="text-align:center;">{{$fac->fac_fecha}}</td>

				<td style="text-align:center;">{{$fac->fac_descuento}}</td>
                 
                 <td style="text-align:center;">{{$fac->fac_iva}}</td>

				<td style="text-align:center;">{{$fac->fac_observaciones}}</td>
				@if($fac->fac_estado==1)
					<td>Aprobado</td>
					<td>
						<div class="row"  >
		<ul></ul>			
<a href="{{route('facturas.edit',$fac->fac_id)}}" class="btn btn-success rounded float-right">

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="19" height="19"><path fill-rule="evenodd" d="M5.962 2.513a.75.75 0 01-.475.949l-.816.272a.25.25 0 00-.171.237V21.25c0 .138.112.25.25.25h14.5a.25.25 0 00.25-.25V3.97a.25.25 0 00-.17-.236l-.817-.272a.75.75 0 01.474-1.424l.816.273A1.75 1.75 0 0121 3.97v17.28A1.75 1.75 0 0119.25 23H4.75A1.75 1.75 0 013 21.25V3.97a1.75 1.75 0 011.197-1.66l.816-.272a.75.75 0 01.949.475z"></path><path fill-rule="evenodd" d="M7 1.75C7 .784 7.784 0 8.75 0h6.5C16.216 0 17 .784 17 1.75v1.5A1.75 1.75 0 0115.25 5h-6.5A1.75 1.75 0 017 3.25v-1.5zm1.75-.25a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h6.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25h-6.5z"></path></svg>
	</a> 
 &nbsp; &nbsp; &nbsp;

 <a href="{{route('facturas.pdf',$fac->fac_id)}}" class="btn btn-danger rounded float-right">PDF</a> 
 &nbsp; &nbsp; &nbsp;
  <a href="{{route('facturas.anular',$fac->fac_id)}}" class="btn btn-danger rounded float-right">ANULAR</a> 

 </div>
					</td>
				@else
					<td>A N U L A D O</td>
					<td >
			 	<div class="row"  >
			 		 &nbsp; &nbsp; &nbsp;
  

			 	</div>
					</td>

				@endif
		</tr>
			
	@endforeach
	
	
	</div>
</div>	
</thead>
</table>
</div>
</div>














</div>
</div>

@endsection