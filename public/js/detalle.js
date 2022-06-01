//Arrow Function
	const validarfactdeta=()=>{ 
		const fad_cantidad=document.querySelector("#fad_cantidad");
    const fad_vu=document.querySelector("#fad_vu");
		const prod_id=document.querySelector("#prod_id");
    const pro_nombre=document.querySelector("#pro_nombre");
    const fac_total=document.querySelector("#fac_total");
    

	



		if (fad_cantidad.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner la cantidad'});
return false;
            }

        if (fad_vu.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar el valor unitario'});
return false;
            }

		if (prod_id.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar un producto'});
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