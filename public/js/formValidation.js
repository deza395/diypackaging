window.addEventListener('load', function () {

// Capturo el elemento form que esté en la página
var formulario = document.getElementsByTagName("form")[1];

//  Guardo todos los elementos del form en un array
var elementosDelForm = Array.from(formulario.elements);

// Sacamos el primer elemento del array que es el un <input> hidden del token (@csrf)
elementosDelForm.shift();

// Sacamos el ultimo y el penultimo elemento del array
elementosDelForm.pop();
elementosDelForm.pop();

// Expresión regular para validar solo números
var regexNumber = /^\d+$/;

// Objeto literal para verificar si un campo tiene error
var errorsObj = {};

// Si tratan de enviar el formulario
formulario.addEventListener('submit', function (event) {
	// Al momento de SUBMITEAR el formulario iteramos los campos y validamos si están vacíos
	elementosDelForm.forEach(function (input) {
		if (input.value.trim() === '') {
			// Si el campo está vacío creamos dentro del objeto de errores una key con valor true
			errorsObj[input.name] = true;
			// Asiganmos la clase de CSS
			input.classList.add('is-invalid');
			// Mostramos el mensaje de error
			input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> es obligatorio';
		}
	});

	console.log('Campos con errores:', errorsObj);
	console.log('Cantidad de campos con errores:', Object.keys(errorsObj).length);

	// Si el objeto que contiene los errores NO está vacío evitamos que se SUBMITEE el formulario
	if (Object.keys(errorsObj).length > 0) {
		event.preventDefault();
	}
});
});
