// Capturo el elemento form que esté en la página
var formulario = document.getElementsByTagName("form")[0];

//  Guardo todos los elementos del form en un array
var elementosDelForm = Array.from(formulario.elements);

// Sacamos el primer elemento del array que es el un <input> hidden del token (@csrf)
elementosDelForm.shift();

// Sacamos el ultimo y el penultimo elemento del array
elementosDelForm.pop();
elementosDelForm.pop();

console.table(elementosDelForm);
// Expresión regular para validar solo números
var regexNumber = /^\d+$/;

// Si tratan de enviar el formulario
formulario.addEventListener('submit', function (event) {

	// Objeto literal para verificar si un campo tiene error
	var errorsObj = {};

	// Al momento de SUBMITEAR el formulario iteramos los campos y validamos si están vacíos
	elementosDelForm.forEach(function (input) {

		// Vacio los divs con errores para que se actualicen segun la logica que sigue
		input.nextElementSibling.innerHTML = '';


		// Si el campo está vacío creamos dentro del objeto de errores una key con valor true
		if (input.value.trim() === '') {
			// Excluimos el campo city de la validación porque es opcional, entonces solo ejecutamos el código
			// en los casos donde el input.name es distinto de "city"
			if(input.name !== "city") {
				errorsObj[input.name] = true;
				// Asiganmos la clase de CSS
				input.classList.add('is-invalid');
				// Mostramos el mensaje de error
				input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> es obligatorio';
			}
		}
		// Acá hay que agregar una validación para cada tipo de campo según corresponda
		// Ejemplo validando el campo "name"

			if(input.name === "password"){
				if(!input.value.includes("DH"))
				errorsObj[input.name] = true;
				// Asiganmos la clase de CSS
				input.classList.add('is-invalid');
				// Mostramos el mensaje de error
				input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> debe contener DH';
			}

			else {
				if(input.name === "password"){
					if(input.value.length !== 8)
					errorsObj[input.name] = true;
					// Asiganmos la clase de CSS
					input.classList.add('is-invalid');
					// Mostramos el mensaje de error
					input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> debe contener 6 caracteres';
				}

		}

	});

	console.log('Campos con errores:', errorsObj);
	console.log('Cantidad de campos con errores:', Object.keys(errorsObj).length);

	// Si el objeto que contiene los errores NO está vacío evitamos que se SUBMITEE el formulario
	if (Object.keys(errorsObj).length > 0) {
	event.preventDefault();
	}
});
