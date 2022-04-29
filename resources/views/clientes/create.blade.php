@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-6" >
    <div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Clientes</h3>
<form action="{{route('clientes.store')}}" method="POST" onsubmit="return vali()">
@csrf
                <div class="form-group">



                    <label for="">Nombre y Apellido:</label>
                    <input type="text" name="cli_name" id="cli_name" class="form-control" placeholder="Escriba sus nombres">
                </div>

                <div class="form-group">
                    <label for="">Cedula: </label>
                    <input type="text" name="cli_cedula" id="cli_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
                </div>                


                <div class="form-group">
                    <label for="">Telefono: </label>
                    <input type="text" name="cli_telefono" id="cli_telefono" class="form-control" placeholder="Escriba su Telefono" maxlength="10">
                </div>                


                <div class="form-group">
                    <label for="">Fecha: </label>
                    <input type="date" name="cli_fecha" id="cli_fecha" class="form-control" placeholder="Seleccione la fecha de registro" maxlength="10">
                </div>




                <div class="form-group">
                    <button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x"> Guardar</button>
</form>
                </div>
        </form> 
    </div>
</div>  
@endsection