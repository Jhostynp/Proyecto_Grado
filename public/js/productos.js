//Arrow Function
	const validarprodu=()=>{ 
		const pro_nombre=document.querySelector("#pro_nombre");
		const pro_descripcion=document.querySelector("#pro_descripcion");
    const prod_stock=document.querySelector("#prod_stock");
    const prod_precio=document.querySelector("#prod_precio");
    const prod_fecha=document.querySelector("#prod_fecha");
  



    if (pro_nombre.value.length==0){
Swal.fire({
  icon: 'error',
  tnitle: 'ERROR...',
  text:' Deber poner el nombrne del videojuego'});
return false;
            }

		if (pro_descripcion.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber poner su descripcion'});
return false;
            }

    if (prod_stock.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar su stock'});
return false;
            }
            
		if (prod_precio.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar un precio'});
return false;
            } 

 
   if (prod_fecha.value.length==0){
Swal.fire({
  icon: 'error',
  title: 'ERROR...',
  text:' Deber ingresar una fecha'});
return false;
            }


}