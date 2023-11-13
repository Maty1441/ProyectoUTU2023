document.addEventListener("DOMContentLoaded", function() {
    var equipos = document.querySelectorAll('.equipo');

    equipos.forEach(function(equipo) {
        if (equipo.textContent.includes("K")) {
            equipo.style.color = 'red';
        } else if (equipo.textContent.includes("AO")) {
            equipo.style.color = 'blue';
        }
    });
});