

<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 5cm 3cm 3cm;
        }

        header {
            position:fixed-top ;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: #2a0927;
            color: white;
            text-align: fixed-top;
            line-height: 10px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: #2a0927;
            color: white;
            text-align: right;
            line-height: 10px;
        }
    </style>
</head>
<body>

<header>

	

    <h1 ><img src="https://cdn-icons-png.flaticon.com/512/3094/3094836.png" width="45px" class="d-inline-block ">
 FACTURA</h1>


</header>

<main>
    <h1>



<style>

table {
  
}
 
table,
th,
td {
    border: 1px solid black;
}
 
th,
td {
    padding: 4px;
}
</style>
<h3>Factura No:{{$facturas->fac_no}}</h3>
<h3>Cliente:{{$facturas->cli_name}}</h3>
<h3>Ruc:{{$facturas->cli_cedula}}</h3>
<h3>Direccion:Quito</h3>
<div style="background:#2BA0CC; text-align:center ;" >Detalle Factura</div>
<table style="width:100%%">
	<tr>
		<th>#</th>
		<th>Cantidad</th>
		<th>Producto</th>
		<th>Vu</th>
		<th>VT</th>
	</tr>
	@foreach($detalles as $d)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$d->fad_cantidad}}</td>
		<td>{{$d->pro_nombre}}</td>
		<td style="text-align:right; ">{{ number_format($d->fad_vu,2) }}</td>
		<td style="text-align:right; ">{{ number_format($d->fad_vt,2) }}</td>
	</tr>
	@endforeach	
         @isset($detalle)         
<?php 
          $subt=0;
       ?>
             @foreach($detalle as $dt)
             <?php $subt+=$dt->fad_vt;?>
<tr>



                    <td>{{$dt->fad_cantidad}}</td>
                    <td>{{$dt->pro_nombre}}</td>
                    <td class="text-right">{{number_format($dt->fad_vu,2)}}$</td>
                    <td class="text-right">{{number_format($dt->fad_vt,2)}}$</td>
                    <td>
                        <button class="btn btn-danger btn-sm" name="btn_eliminar" value="{{$dt->fad_id}}" >Del</button>
                    </td>
                </tr>

 @endforeach
             <?php 
                $vt=($subt-$fac_descuento)+$fac_iva;
             ?>
             <tr>
                    <td colspan="4" class="text-right">Subt:</td>
                    <td class="text-right">{{number_format($subt,2)}}$</td>
             </tr> 

                         <tr>
                    <td colspan="4" class="text-right">Subt:</td>
                    <td class="text-right">{{number_format($subt,2)}}$</td>
             </tr>
             <tr>
                    <td colspan="4" class="text-right">Desc:</td>
                    <td class="text-right">{{number_format($fac_descuento,2)}}$</td>
             </tr>
             <tr>
                    <td colspan="4" class="text-right">IVA:</td>
                    <td class="text-right">{{number_format($fac_iva,2)}}$</td>
             </tr>
             <tr>
                    <td colspan="4" class="text-right">VT:</td>
                    <td class="text-right">{{number_format($vt,2)}}$</td>
             </tr>
        @else
        @endisset
</table>



</h1>













</main>

<footer>
    <h1>Kaiser.Dafe</h1>
</footer>
</body>
</html>

	


<style>
	*{
		font-family:sans-serif ;
		font-size:12px;
	}
</style>
