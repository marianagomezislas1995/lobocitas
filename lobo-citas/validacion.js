// archiivo de java script

//alert("llamado al archivo js exitoso");


function validacion() {
	var name = document.getElementById("txtNombre").value;
	var a_paterno = document.getElementById("txtApellidoP").value;
	var a_materno = document.getElementById("txtApellidoM").value;

	var sexo = document.getElementById("txtSexo").value;
	var correo = document.getElementById("txtEmail").value;
	var f_nacimiento = document.getElementById("txtFechaN").value;
	var contrasena = document.getElementById("txtPass").value;
	var contrasena2 = document.getElementById("txtPass2").value;
	

  	if(name=="") {
		document.getElementById('error-name').innerHTML = "Olvidaste escribir tu nombre";     
    		//alert("Olvidaste escribir tu nombre.");
    		return false;
 	}
	if ( /^[a-z][a-z]*/.test(name)==false ) {
		document.getElementById('error-name').innerHTML = "Nombre no valido"; 
		return false;
	}else document.getElementById('error-name').innerHTML = "";


	if(a_paterno==""){
		document.getElementById('error-paterno').innerHTML = "Olvidaste escribir tu apellido";		
		return false;
	}
	if ( /^[a-z][a-z]*/.test(a_paterno)==false ) {
		document.getElementById('error-paterno').innerHTML = "Apellido no valido"; 
		return false;
	}else document.getElementById('error-paterno').innerHTML = "";


	if(a_materno==""){
		document.getElementById('error-materno').innerHTML = "Olvidaste escribir tu apellido";
		return false;
	}
	if ( /^[a-z][a-z]*/.test(a_materno)==false ) {
		document.getElementById('error-materno').innerHTML = "Apellido no valido"; 
		return false;
	}else document.getElementById('error-materno').innerHTML = "";


	if(sexo=="ninguno"){
		document.getElementById('error-sexo').innerHTML = "Olvidaste seleccionar tu sexo";
		return false;
	}
	if ( sexo=="masculino" || sexo=="femenino") {
		document.getElementById('error-sexo').innerHTML = "";		
	} 


	if(correo == ""){
		document.getElementById('error-correo').innerHTML = "Olvidaste escribir tu correo";
		return false;
	}
	if ( /^[a-z][a-z]*/.test(a_materno)==true ) {
		document.getElementById('error-correo').innerHTML = "";
	}
	var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    	if ( !expr.test(correo) ){
        	document.getElementById('error-correo').innerHTML = "Correo no valido";
		return false;
	}		
	


	if(f_nacimiento==""){
		document.getElementById('error-fecha').innerHTML = "Olvidaste escribir tu fecha de nacimiento";
		return false;
	}
	//validar fecha

	if(contrasena==""){
		document.getElementById('error-pass').innerHTML = "Ingresa una contrase\u00f1a";
		return false;
	}
	if(contrasena.length<5){
		document.getElementById('error-pass').innerHTML = "La contrase\u00f1a debe tener minimo 5 caracteres";
		return false;
	}else document.getElementById('error-pass').innerHTML = "";

	if(contrasena2==""){
		document.getElementById('error-pass2').innerHTML = "Comfirma la contrase\u00f1a";
		return false;
	}else document.getElementById('error-pass2').innerHTML = "";
	
	if(contrasena != contrasena2){
		document.getElementById('error-pass2').innerHTML = "La contrase\u00f1as no son iguales";
		return false;
	}
    	
  
}





