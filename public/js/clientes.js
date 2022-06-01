//Arrow Function
	const valid=()=>{ 
		const cli_name=document.querySelector("#cli_name");
		const cli_cedula=document.querySelector("#cli_cedula");
		const cli_telefono=document.querySelector("#cli_telefono");
		const cli_fecha=document.querySelector("#cli_fecha");
	



		if (cli_name.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su Nombre y Apellido'});
return false;
            }

		if (cli_cedula.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su cedula'});
return false;
            }

		if (cli_telefono.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar su telefono'});
return false;
            }
            
		if (cli_fecha.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar una fecha'});
return false;
            }


}