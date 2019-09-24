// Capturo el elemento form que esté en la página
var formulario = document.getElementsByTagName("form")[0];

//  Guardo todos los elementos del form en un array
var elementosDelForm = Array.from(formulario.elements);

// Sacamos el primer elemento del array que es el un <input> hidden del token (@csrf)
elementosDelForm.shift();

// Sacamos el ultimo del array que es el botón de submit
elementosDelForm.pop();

console.table(elementosDelForm);
// Expresión regular para validar solo números
var regexNumber = /^\d+$/;

// Si tratan de enviar el formulario
formulario.addEventListener('submit', function(event) {

    // Objeto literal para verificar si un campo tiene error
    // Lo vacio cada vez que mando para limpiar los errores que se hayan solucionado
    var errorsObj = {};

    // Al momento de SUBMITEAR el formulario iteramos los campos y validamos si están vacíos
    elementosDelForm.forEach(function(input) {

        // Vacio los divs con errores para que se actualicen segun la logica que sigue
        input.nextElementSibling.innerHTML = '';
        // Le quito la clase is-invalid al input antes de volver a validarlo
        input.classList.remove('is-invalid');


        // Si el campo está vacío creamos dentro del objeto de errores una key con valor true
        if (input.value.trim() === '') {
            // Excluimos el campo city de la validación porque es opcional, entonces solo ejecutamos el código
            // en los casos donde el input.name es distinto de "city"
            if (input.name !== "city") {
                errorsObj[input.name] = true;
                // Asiganmos la clase de CSS
                input.classList.add('is-invalid');
                // Mostramos el mensaje de error
                input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> es obligatorio';
            }
        }
				else if (input.name === "country") {
					if (input.value === "Argentina") {
						var city = document.getElementById('city');
						console.log('city', city);
						if (!city.value) {
                errorsObj["city"] = true;
								console.log("city.value", city.value);
                // Asiganmos la clase de CSS
                city.classList.add('is-invalid');
                // Mostramos el mensaje de error
                city.nextElementSibling.innerHTML = 'El campo provincia es obligatorio';
            }
					}


				}
        // Validando el campo "password" y "password_confirmation" que no tengan errores
        else if (input.name === "password") {
            if (!input.value.includes("DH")) {
                errorsObj[input.name] = true;
                // Asiganmos la clase de CSS
                input.classList.add('is-invalid');
                // Mostramos el mensaje de error
                input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> debe contener DH';
            } else if (input.value.length < 8) {
                errorsObj[input.name] = true;
                // Asiganmos la clase de CSS
                input.classList.add('is-invalid');
                // Mostramos el mensaje de error
                input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> debe contener 8 caracteres';
            }
        }
				else if (input.name === "password_confirmation") {
					var password = document.getElementById('password');
					console.log('password', password.value);
					console.log('input.value', input.value);

					if (!input.value.includes("DH")) {
							errorsObj[input.name] = true;
							// Asiganmos la clase de CSS
							input.classList.add('is-invalid');
							// Mostramos el mensaje de error
							input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> debe contener DH';
					} else if (input.value.length < 8) {
							errorsObj[input.name] = true;
							// Asiganmos la clase de CSS
							input.classList.add('is-invalid');
							// Mostramos el mensaje de error
							input.nextElementSibling.innerHTML = 'El campo <b>' + input.getAttribute('name') + '</b> debe contener 8 caracteres';
					} else if (input.value !== password.value) {
                errorsObj["password"] = true;
                errorsObj[input.name] = true;
                // Asiganmos la clase de CSS
                password.classList.add('is-invalid');
                input.classList.add('is-invalid');
                // Mostramos el mensaje de error
                password.nextElementSibling.innerHTML = 'Las contraseñas no coinciden';
                input.nextElementSibling.innerHTML = 'Las contraseñas no coinciden';
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
