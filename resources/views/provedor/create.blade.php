@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<<<<<<< HEAD
<div class="container col-md-6" >
    <div class="card-body card text-white text-white " style="margin-top: 0%;background:#251D3A;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://cdn-icons-png.flaticon.com/512/2422/2422612.png" width="40px"> Registro de Provedores</h3>
=======
<div class="container col-md-4" >
<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 5%;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" width="60px"> Registro de Provedores</h3>
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
<form action="{{route('provedor.store')}}" method="POST" onsubmit="return vali()">
@csrf
                <div class="form-group">



                    <label for="">Nombre y Apellido:</label>
                    <input type="text" name="prov_nombre" id="prov_nombre" class="form-control" placeholder="Escriba sus nombres">
                </div>

                <div class="form-group">
                    <label for="">RUC: </label>
<<<<<<< HEAD
                    <input type="text" name="prov_ruc" id="prov_ruc" class="form-control" placeholder="Escriba su numero de Ruc" maxlength="10">
=======
                    <input type="text" name="prov_ruc" id="prov_ruc" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
>>>>>>> 66d23b89b9037c5aa82070d119982e5b5cbe964b
                </div>                


                <div class="form-group">
                    <label for="">Telefono: </label>
                    <input type="text" name="prov_telefono" id="prov_telefono" class="form-control" placeholder="Escriba su Telefono" maxlength="10">
                </div>                


                <div class="form-group">
                    <label for="">Fecha: </label>
                    <input type="date" name="prov_fecha" id="prov_fecha" class="form-control" placeholder="Seleccione la fecha de registro" maxlength="10">
                </div>




                <div class="form-group">
                    <button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x"> Guardar</button>
</form>
                </div>
        </form> 
    </div>
</div>  
@endsection