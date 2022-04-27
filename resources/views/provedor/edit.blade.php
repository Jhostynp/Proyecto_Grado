@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-4" >
<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 5%;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" width="60px"> Editar Provedores</h3>
    <form action="{{route('provedor.uptade',$provedor->prov_id)}}" method="POST" onsubmit="return vali()">
@csrf
                <div class="form-group">



                    <label for="">Nombre y Apellido:</label>
                    <input type="text" name="prov_nombre" value="{{$provedor->prov_nombre}}" id="prov_nombre" class="form-control" placeholder="Escriba sus nombres">
                </div>

                <div class="form-group">
                    <label for="">RUC: </label>
                    <input type="text" name="prov_ruc" id="prov_ruc"  value="{{$provedor->prov_ruc}}" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
                </div>                


                <div class="form-group">
                    <label for="">Telefono: </label>
                    <input type="text" name="prov_telefono" id="prov_telefono"  value="{{$provedor->prov_telefono}}" class="form-control" placeholder="Escriba su Telefono" maxlength="10">
                </div>                


                <div class="form-group">
                    <label for="">Fecha: </label>
                    <input type="date" name="prov_fecha" id="prov_fecha" value="{{$provedor->prov_fecha}}" class="form-control" placeholder="Seleccione la fecha de registro" maxlength="10">
                </div>




                <div class="form-group">
                    <button class="btn btn-dark"><img src="https://www.grupojaestudio.com/web_nueva/wp-content/themes/jaestudio2018/img/registro/2-informacion.png" width="30x"> Actualizar</button>
</form>
                </div>
        </form> 
    </div>
</div>  
@endsection