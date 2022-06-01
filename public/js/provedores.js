//Arrow Function
	const validarprov=()=>{ 
		const prov_nombre=document.querySelector("#prov_nombre");
		const prov_telefono=document.querySelector("#prov_telefono");
		const prov_ruc=document.querySelector("#prov_ruc");
		const prov_fecha=document.querySelector("#prov_fecha");
	



		if (prov_nombre.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su Nombre y Apellido'});
return false;
            }

		if (prov_ruc.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su Ruc'});
return false;
            }

		if (prov_telefono.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar su telefono'});
return false;
            }
            
		if (prov_fecha.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar una fecha'});
return false;
            }


}