@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-4" >
<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 5%;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" width="60px"> Registro de Clientes</h3>
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