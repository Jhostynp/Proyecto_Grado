@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-12 text-white">




		<h1 style="font-family:algeria"> <img src="https://www.vichaunter.org/wp-content/uploads/2017/01/juegos-digitales-vs-copias-fisicas.jpg" width="180x"> Productos

<a href=" {{route('productos.create')}} " class="btn-primary btn-success btn text-white">Crear</a></h1>

			<!-- <form class="" action="{{route('productos.search')}}" method="POST"> -->
			
			
			<!-- <button class="btn btn-success btn-sm" title="Buscar" value="btn_buscar" name="btn_buscar">

				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill-rule="evenodd" d="M14.53 15.59a8.25 8.25 0 111.06-1.06l5.69 5.69a.75.75 0 11-1.06 1.06l-5.69-5.69zM2.5 9.25a6.75 6.75 0 1111.74 4.547.746.746 0 00-.443.442A6.75 6.75 0 012.5 9.25z"></path></svg>
			</button>		
			<button class="btn btn-danger btn-sm" title="PDF" value="btn_pdf" name="btn_pdf">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">

 			 <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
</svg></i></button> -->
			</form>
<ul></ul>






	<table class="table table-striped table-success table-sm table-bordered table-hover table align-middle  ">

		  <thead class="thead-dark">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Fecha</th>
		<th style="text-align:center;">Stock</th>
		<th style="text-align:center;">Precio</th>
		<th style="text-align:center;">Descripcion</th>


		<th style="text-align:center;">Nombre</th>

		<th style="text-align:center;">Categoria</th>

		<th style="text-align:center;">Provedor</th>









		<th style="text-align:center;"> </th>

		
@foreach($productos as $prod)


			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>

				<td style="text-align:center;">{{$prod->prod_fecha}}</td>

      			<td style="text-align:center;">{{$prod->prod_stock}}</td>



			

				<td style="text-align:center;">{{$prod->pro_descripcion}}</td>

      			<td style="text-align:center;">{{$prod->prod_precio}}$</td>

                <td style="text-align:center;">{{$prod->pro_descripcion}}</td>




				<td style="text-align:center;">{{$prod->pro_nombre}}</td>


				<td style="text-align:center;">{{$prod->cat_nombre}}</td>

				<td style="text-align:center;">{{$prod->prov_nombre}}</td>

				<td style="text-align:center;">
					



<div class="row"  >
		<ul></ul>			
<a href="{{route('productos.edit',$prod->prod_id)}}" class="btn btn-success rounded float-right">

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="19" height="19"><path fill-rule="evenodd" d="M5.962 2.513a.75.75 0 01-.475.949l-.816.272a.25.25 0 00-.171.237V21.25c0 .138.112.25.25.25h14.5a.25.25 0 00.25-.25V3.97a.25.25 0 00-.17-.236l-.817-.272a.75.75 0 01.474-1.424l.816.273A1.75 1.75 0 0121 3.97v17.28A1.75 1.75 0 0119.25 23H4.75A1.75 1.75 0 013 21.25V3.97a1.75 1.75 0 011.197-1.66l.816-.272a.75.75 0 01.949.475z"></path><path fill-rule="evenodd" d="M7 1.75C7 .784 7.784 0 8.75 0h6.5C16.216 0 17 .784 17 1.75v1.5A1.75 1.75 0 0115.25 5h-6.5A1.75 1.75 0 017 3.25v-1.5zm1.75-.25a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h6.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25h-6.5z"></path></svg>
	</a> 
 &nbsp; &nbsp; &nbsp;
  <form action="{{route('productos.destroy',$prod->prod_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf

  	<button class="btn btn-danger ">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="18" height="18"><path fill-rule="evenodd" d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z"></path><path d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z"></path><path d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z"></path></svg></button>
  </form>
 </div>
				</td>

				

</div>

</td>


			</tr>
			
	@endforeach
	
	
	</div>
</div>	













	
@endsection