//Arrow Function
	const vali=()=>{ 
		const usu_name=document.querySelector("#usu_name");
		const email=document.querySelector("#email");
		const usu_cedula=document.querySelector("#usu_cedula");
		const password=document.querySelector("#password");
	



		if (usu_name.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su Nombre y Apellido'});
return false;
            }

		if (email.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su correo'});
return false;
            }

		if (usu_cedula.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar su cedula'});
return false;
            }
            
		if (password.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar una contraseña'});
return false;
            }


}