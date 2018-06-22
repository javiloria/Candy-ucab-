	function validar() {
		var rif, 
			razonsocial, 
			dcomercial, 
			numero, 
			capital, 
			contacto,
			descripcion, 
			sitioweb, 
			correo, 
			direccionPrincipal,
			direccionSecundaria, 
			usuario, 
			password, 
			expresion_Email;

		rif = document.getElementById('rif').value;
		razonsocial = document.getElementById('razonsocial').value;
		dcomercial = document.getElementById('dcomercial').value;
		numero = document.getElementById('numero').value;
		capital = document.getElementById('capital').value;
		contacto = document.getElementById('contacto').value;
		descripcion = document.getElementById('descripcion').value;
		sitioweb = document.getElementById('sitioweb').value;
		correo = document.getElementById('correo').value;
		direccionPrincipal = document.getElementById('direccionPrincipal').value;
		direccionSecundaria = document.getElementById('direccionSecundaria').value;
		usuario = document.getElementById('usuario').value;
		password = document.getElementById('password').value;

		expresion_Email = /\w+@+\w+\.[a-z]/;
/*
	Comprueba que los campos no estén vacios
*/
		if (rif === '') {
			swal("Error", "El campo de rif es obligatorio", "error");
			return false;
		} else if (razonsocial === '') {
			swal("Error", "El campo de razon social es obligatorio", "error");
			return false;
		} else if (dcomercial === '') {
			swal("Error", "El campo de denominacion comercial es obligatorio", "error");
			return false;
		} else if (numero === '') {
			swal("Error", "El campo de telefono es obligatorio", "error");
			return false;
		} else if (capital === '') {
			swal("Error", "El campo de capital es obligatorio", "error");
			return false;
		} else if (contacto === '') {
			swal("Error", "El campo de contacto es obligatorio", "error");
			return false;
		} else if (descripcion === '') {
			swal("Error", "El campo de descripcion es obligatorio", "error");
			return false;
		}
		 else if (sitioweb === '') {
			swal("Error", "El campo de sitio web es obligatorio", "error");
			return false;
		} else if (correo === '') {
			swal("Error", "El campo de correo es obligatorio", "error");
			return false;
		} else if (direccionPrincipal === '') {
			swal("Error", "El campo de direccion fiscal principal es obligatorio", "error");
			return false;
		} else if (direccionSecundaria === '') {
			swal("Error", "El campo de direccion fiscal es obligatorio", "error");
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

		if (razonsocial.length > 50) {
			swal("Error", "La razon social es muy largo (Máximo 50 caracteres)", "error");
			return false;
		} else if (dcomercial.length > 50) {
			swal("Error", "La denominacion comercial es muy larga (Máximo 50 caracteres)", "error");
			return false;
		} else if (sitioweb.length > 100) {
			swal("Error", "El sitio web es muy largo (Máximo 100 caracteres)", "error");
			return false;
		} else if (contacto.length > 30) {
			swal("Error", "El nombre del contacto es muy largo (Máximo 30 caracteres)", "error");
			return false;
		} else if (descripcion.length > 191) {
			swal("Error", "La descripcion es muy larga (Máximo 191 caracteres)", "error");
			return false;
		} else if (rif.length > 9 || rif.length < 9) {
			swal("Error", "El rif es inválido.", "error");
			return false;
		} else if (numero.length > 11 || numero.length < 11) {
			swal("Error", "El número de teléfono es inválido.", "error");
			return false;
		} else if (correo.length > 50 || correo.length < 5) {
			swal("Error", "El correo es inválido.", "error");
			return false;
		} else if (direccionPrincipal.length > 100) {
			swal("Error", "La dirección fiscal P. es muy larga. (Máximo 100 caracteres)", "error");
			return false;
		} else if (direccionSecundaria.length > 100) {
			swal("Error", "La dirección fiscal es muy larga. (Máximo 100 caracteres)", "error");
			return false;
		} else if (usuario.length > 50) {
			swal("Error", "El nombre de usuario es muy largo (Máximo 50 caracteres)", "error");
			return false;
		} else if (password.length < 5 || password.length > 255) {
			swal("Error", "La contraseña es muy corta o excede los limites.", "error");
			return false;
		}

		/*
			Comprobando campos numéricos
		*/

		if (isNaN(rif)) {
			swal("Error", "El RIF ingresado no es válido", "error");
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