
function validarNumero(input) {
    // Eliminar espacios en blanco
    input.value = input.value.replace(/\s/g, '');

    // Convertir el valor a un número
    var numero = parseInt(input.value);

    // Verificar si el número está dentro del rango permitido
    if (isNaN(numero) || numero < 1 || numero > 100000000) {
        alert("El número debe estar entre 1 y 100,000,000");
        input.value = ''; // Borrar el valor incorrecto
    }
}

function validarFormulario(form) {
    // Verificar que todos los campos estén completos
    for (let i = 0; i < form.length - 1; i++) { // El -1 es para no verificar el botón de enviar
        if (form[i].value.trim() === "") {
            alert("Todos los campos deben estar completos.");
            return false;
        }
    }

    // Verificar que la fecha de nacimiento sea válida
    let fechaNacimiento = new Date(form["Edad"].value);
    let hoy = new Date();

    if (fechaNacimiento > hoy) {
        alert("La fecha de nacimiento no puede ser superior a la fecha actual.");
        return false;
    }

    return true;
}