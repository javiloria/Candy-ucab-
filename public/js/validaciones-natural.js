	function validar() {
		var rif, 
			cedula, 
			numero, 
			pNombre, 
			sNombre, 
			pApellido, 
			sApellido, 
			correo, 
			direccion, 
			usuario, 
			password, 
			expresion_Email;

		rif = document.getElementById('rif').value;
		cedula = document.getElementById('cedula').value;
		numero = document.getElementById('numero').value;
		pNombre = document.getElementById('nombre1').value;
		sNombre = document.getElementById('nombre2').value;
		pApellido = document.getElementById('apellido1').value;
		sApellido = document.getElementById('apellido2').value;
		correo = document.getElementById('correo').value;
		direccion = document.getElementById('direccion').value;
		usuario = document.getElementById('usuario').value;
		password = document.getElementById('password').value;

		expresion_Email = /\w+@+\w+\.[a-z]/;


/*
	Comprueba que los campos no estén vacios
*/
		if (rif === '') {
			swal("Error", "El campo de rif es obligatorio", "error");
			return false;
		} else if (cedula === '') {
			swal("Error", "El campo de cedula es obligatorio", "error");
			return false;
		} else if (numero === '') {
			swal("Error", "El campo de número es obligatorio", "error");
			return false;
		} else if (pNombre === '') {
			swal("Error", "El campo de primer nombre es obligatorio", "error");
			return false;
		} else if (sNombre === '') {
			swal("Error", "El campo de segundo nombre es obligatorio", "error");
			return false;
		} else if (pApellido === '') {
			swal("Error", "El campo de primer apellido es obligatorio", "error");
			return false;
		} else if (sApellido === '') {
			swal("Error", "El campo de segundo apellido es obligatorio", "error");
			return false;
		} else if (correo === '') {
			swal("Error", "El campo de correo es obligatorio", "error");
			return false;
		} else if (direccion === '') {
			swal("Error", "El campo de direccion es obligatorio", "error");
			return false;
		} else if (usuario === '') {
			swal("Error", "El campo de usuario es obligatorio", "error");
			return false;
		} else if (password === '') {
			swal("Error", "El campo de password es obligatorio", "error");
			return false;
		} 

		/*
			Comprueba longitud de campos
		*/

		if (pNombre.length > 20) {
			swal("Error", "El primer nombre es muy largo (Máximo 20 caracteres)", "error");
			return false;
		} else if (sNombre.length > 20) {
			swal("Error", "El segundo nombre es muy largo (Máximo 20 caracteres)", "error");
			return false;
		} else if (pApellido.length > 20) {
			swal("Error", "El primer apellido es muy largo (Máximo 20 caracteres)", "error");
			return false;
		} else if (sApellido.length > 20) {
			swal("Error", "El segundo apellido es muy largo (Máximo 20 caracteres)", "error");
			return false;
		} else if (cedula.length > 8) {
			swal("Error", "El número de cédula es inválido.", "error");
			return false;
		} else if (rif.length > 10) {
			swal("Error", "El número de cédula es inválido.", "error");
			return false;
		} else if (numero.length > 11 || numero.length < 11) {
			swal("Error", "El número de teléfono es inválido.", "error");
			return false;
		} else if (correo.length < 5) {
			swal("Error", "El correo es inválido.", "error");
			return false;
		} else if (direccion.length > 100) {
			swal("Error", "El La dirección es muy larga. (Máximo 100 caracteres)", "error");
			return false;
		} else if (usuario.length > 25) {
			swal("Error", "El nombre de usuario es muy largo (Máximo 25 caracteres)", "error");
			return false;
		} else if (password.length < 5) {
			swal("Error", "La contraseña es muy corta.", "error");
			return false;
		}

		/*
			Comprobando campos numéricos
		*/

		if (isNaN(rif)) {
			swal("Error", "El RIF ingresado no es válido", "error");
			return false;
		} else if (isNaN(cedula)) {
			swal("Error", "La cédula ingresada no es válida", "error");
			return false;
		} else if (isNaN(numero)) {
			swal("Error", "El teléfono ingresado no es válido", "error");
			return false;
		}

		/*
			Comprobando que el email sea válido
		*/

		if (!expresion_Email.test(correo)) {
			swal("Error", "El email ingresado no es válido.", "error");
			return false;
		}
	}