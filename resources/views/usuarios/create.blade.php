@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-6" >
    <div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Usuarios</h3>
<form action="{{route('usuario.store')}}" method="POST" onsubmit="return vali()">
@csrf
                <div class="form-group">



                    <label for="">Nombre y Apellido:</label>
                    <input type="text" name="usu_name" id="usu_name" class="form-control" placeholder="Escriba su nombre">
                </div>

                <div class="form-group">
                    <label for="">Correo: </label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Escriba su email">
                </div>

                <div class="form-group">
                    <label for="">Cedula: </label>
                    <input type="text" name="usu_cedula" id="usu_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="">Contraseña </label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña">
                </div>
                <div class="form-group">
                    <button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x"> Guardar</button>
</form>
                </div>
        </form> 
    </div>
</div>  
@endsection