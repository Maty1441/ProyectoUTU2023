function validarFechas() {
    var fInicio = document.getElementById('fInicio').value;
    var fFin = document.getElementById('fFin').value;


    var dateInicio = new Date(fInicio);
    var dateFin = new Date(fFin);
   
    if (dateInicio > dateFin) {
        alert("La fecha de inicio no puede ser mayor que la fecha de fin.");
        return false; 
    }
    return true;
}

function validarNombre() {
    document.getElementById('lugar').addEventListener('input', function(event) {
      var inputValue = this.value;
      this.value = inputValue.replace(/[0-9]/g, '');
    });
  }
  
  // Llamar a la función para activar la validación
  validarNombre();
