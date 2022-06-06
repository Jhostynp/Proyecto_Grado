P@extends('layouts.app')
@section('content')
<<<<<<< HEAD
<script src="{{asset('js/clientes.js')}}"> </script>
<div class="container col-md-6" >
    <div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Clientes</h3>
<form action="{{route('clientes.store')}}" method="POST" onsubmit="return valid()">
=======
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-6" >
    <div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Clientes</h3>
<form action="{{route('clientes.store')}}" method="POST" onsubmit="return vali()">
>>>>>>> 5967af72b22685d6b2935f53f01dd7e6cf7bf701
@csrf
                <div class="form-group">



                    <label for="">Nombre y Apellido:</label>
                    <input type="text" name="cli_name" id="cli_name" class="form-control" placeholder="Escriba sus nombres" onkeypress="return soloLetras(event)">
                </div>

                <div class="form-group">
                    <label for="">Cedula: </label>
                    <input type="number" name="cli_cedula" id="cli_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10" onkeypress="return solonumeros(event)"> 
                </div>                


                <div class="form-group">
                    <label for="">Telefono: </label>
                    <input type="number" name="cli_telefono" id="cli_telefono" class="form-control" placeholder="Escriba su Telefono" maxlength="10" onkeypress="return solonumeros(event)">
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