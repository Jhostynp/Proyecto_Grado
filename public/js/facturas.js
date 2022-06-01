//Arrow Function
	const validarfact=()=>{ 
		const fac_no=document.querySelector("#fac_no");
		const fac_fecha=document.querySelector("#fac_fecha");
		const fac_descuento=document.querySelector("#fac_descuento");
		const fac_iva=document.querySelector("#fac_iva");
    const fac_total=document.querySelector("#fac_total");
    

	



		if (fac_no.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner el numero de la factura'});
return false;
            }

		if (fac_descuento.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su descuento'});
return false;
            }

		if (fac_fecha.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar una fecha'});
return false;
            }
            
		if (fac_iva.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar un iva'});
return false;
            }

    if (fac_total.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar un total'});
return false;
            }



}