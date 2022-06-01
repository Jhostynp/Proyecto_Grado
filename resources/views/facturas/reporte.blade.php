

<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
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

	

    <h1 ><img src="https://cdn-icons-png.flaticon.com/512/3094/3094836.png" width="45px" class="d-inline-block align-top">
 Reporte De Facturas</h1>


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
    padding: 5px;
}
</style>
<table class="table-red">
    <thead style="color:red">
            
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">No.</th>
		<th style="text-align:center;">Fecha</th>
		<th style="text-align:center;">Cliente</th>
		<th style="text-align:center;">Observaciones</th>
		<th style="text-align:center;">Cantidad</th>
		<th style="text-align:center;">Total</th>


      
    </thead>
<?php 
$subt=0;
$x=1;
 ?>
		
@foreach($facturas as $fac)

@if($fac->fac_estado==1)

<?php 
$subt+=$fac->fad_vt

?>
   <tbody>
            
                <td style="text-align:center;">{{$x++}}</td>

                <td style="text-align:center;">{{$fac->fac_no}}</td>

                <td style="text-align:center;">{{$fac->fac_fecha}}</td>

                <td style="text-align:center;">{{$fac->cli_name}}</td>

                <td style="text-align:center;">{{$fac->fac_observaciones}}</td>

                
                <td style="text-align:center;">{{$fac->fad_cantidad}}</td>

                <td style="text-align:center;">{{number_format($fac->fad_vt,2)}}</td>


                </tbody>

@endif
	 


				

</div>

</td>
		
	@endforeach


<tr>
    <td colspan="3" style="text-align: right,"><b>Totales</b></td>

    <td style="text-emphasis: center;">{{number_format($subt,2)}}</td>



</tr>


</table>



</h1>













</main>

<footer>
    <h1>Kaiser.Dafe</h1>
</footer>
</body>
</html>

	