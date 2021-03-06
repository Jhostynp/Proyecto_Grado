@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-4" >
<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 5%;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" width="60px"> Registro de Usuarios</h3>
<form action="{{route('usuario.uptade',$usuarios->usu_id)}}" method="POST" onsubmit="return vali()">
@csrf
                <div class="form-group">



                    <label for="">Nombre y Apellido:</label>
                    <input type="text" name="usu_name" value="{{$usuarios->usu_name}}" id="usu_name" class="form-control" placeholder="Escriba su nombre">
                </div>

                <div class="form-group">
                    <label for="">Correo: </label>
                    <input type="email" name="email" value="{{$usuarios->email}}" id="email" class="form-control" placeholder="Escriba su email">
                </div>

                <div class="form-group">
                    <label for="">Cedula: </label>
                    <input type="text" name="usu_cedula" value="{{$usuarios->usu_cedula}}" id="usu_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
                </div>

                <div class="form-group" disabled>
                    <label for="" disabled>Contraseña </label>
                    <input type="password" name="password" value="{{$usuarios->password}}" id="password" class="form-control" placeholder="Escriba su contraseña" disabled>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x"> Guardar</button>
</form>
                </div>
        </form> 
    </div>
</div>  
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('Agregado') == 'Si')
        <script>
          Swal.fire(
                        'Usuario Agregado Correctamente',
                        ' ',
                        'success'
                      )
        </script>
     @elseif(session('Actualizado') == 'Si')
   <script>
      Swal.fire(
                    'Usuario Actualizado Correctamente',
                    ' ',
                    'success'
                  )
    </script>
    @elseif(session('Eliminado') == 'Si')
    <script>
      Swal.fire(
                    'Usuario Eliminado Correctamente',
                    ' ',
                    'success'
                  )
    </script>
    @endif
@endsection