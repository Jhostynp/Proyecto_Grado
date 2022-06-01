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
                    <input type="text" name="usu_name" id="usu_name" class="form-control" placeholder="Escriba su nombre" onkeypress="return soloLetras(event)">
                </div>

                <div class="form-group">
                    <label for="">Correo: </label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Escriba su email">
                </div>

                <div class="form-group">
                    <label for="">Cedula: </label>
                    <input type="text" name="usu_cedula" id="usu_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10" onkeypress="return solonumeros(event)">
                </div>

                <div class="form-group">
                    <label for="">Contraseña </label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña" >
                </div>
                <div class="form-group">
                    <button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x"> Guardar</button>
</form>
                </div>
        </form> 
    </div>
</div>



{{-- SOLO LETRAS --}}
<script>
  function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
</script>

{{-- SOLO NUMEROS --}}
<script>
    function solonumeros(e){
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key);
        numeros="0123456789";
        especiales="8-37-38-46";//array
        teclado_especial=false;
        for(var i in especiales){
            if (key==especiales[i]) {
                teclado_especial=true;
            }
        }
        if (numeros.indexOf(teclado)==-1 && !teclado_especial) {
            return false;
        }
    }
</script>


@endsection