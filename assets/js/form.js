function validarNumero(input) {
    // Eliminar espacios en blanco
    input.value = input.value.replace(/\s/g, '');

    // Convertir el valor a un número
    var numero = parseInt(input.value);

    // Verificar si el número está dentro del rango permitido
    if (isNaN(numero) || numero < 1 || numero > 10000000) {
        alert("El número debe estar entre 1 y 10,000,000");
        input.value = ''; // Borrar el valor incorrecto
    }
}