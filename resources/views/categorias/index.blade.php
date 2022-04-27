@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-md-12 text-white">
		<h1 style="font-family:algeria ">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC-_9V-l4IfP18kUXEkedcdfcEnxQK3It6qQ&usqp=CAU" width="100px">
			Categorias De Videojuegos
		<a href="{{route('categorias.create')}}" class="btn btn-danger text-white">Crear </a></h1>
		</h1>
	<table class="table table-striped table-success table-sm table-bordered table-hover  ">
		  <thead class="thead-dark">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">Detalle</th>
		<center>
		<th style="text-align:center;">	</th>
</center>
		@foreach($categorias as $cat)
			<tr>
				<td style="text-align:center;">{{$loop->iteration}}</td>

				<td style="text-align:center;">{{$cat->cat_nombre}}</td>
				<td>

<div class="row"> 
		
<!-- 		<a href="{{route('categorias.edit',$cat->cat_id)}}" class="btn btn-danger ">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="10px"><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"/></svg>
	</a> --> 
		<a href="{{route('categorias.edit',$cat->cat_id)}}" class="btn btn-success ">


	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="19" height="19"><path fill-rule="evenodd" d="M5.962 2.513a.75.75 0 01-.475.949l-.816.272a.25.25 0 00-.171.237V21.25c0 .138.112.25.25.25h14.5a.25.25 0 00.25-.25V3.97a.25.25 0 00-.17-.236l-.817-.272a.75.75 0 01.474-1.424l.816.273A1.75 1.75 0 0121 3.97v17.28A1.75 1.75 0 0119.25 23H4.75A1.75 1.75 0 013 21.25V3.97a1.75 1.75 0 011.197-1.66l.816-.272a.75.75 0 01.949.475z"></path><path fill-rule="evenodd" d="M7 1.75C7 .784 7.784 0 8.75 0h6.5C16.216 0 17 .784 17 1.75v1.5A1.75 1.75 0 0115.25 5h-6.5A1.75 1.75 0 017 3.25v-1.5zm1.75-.25a.25.25 0 00-.25.25v1.5c0 .138.112.25.25.25h6.5a.25.25 0 00.25-.25v-1.5a.25.25 0 00-.25-.25h-6.5z"></path></svg>
	</a> 
 &nbsp; &nbsp; &nbsp;
  <form action="{{route('categoria.destroy',$cat->cat_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf

	<button class="btn btn-danger ">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="18" height="18"><path fill-rule="evenodd" d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z"></path><path d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z"></path><path d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z"></path></svg></button>
  </form>
  

</div>

</td>

			</tr>
			
		@endforeach
	</table>
	</div>
</div>	
@endsection