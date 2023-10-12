document.addEventListener("DOMContentLoaded", function () {
    const inputField = document.getElementById("inputField");
    const sumarButton = document.getElementById("sumar");
    const restarButton = document.getElementById("restar");
    const descalificarLink = document.getElementById("descalificar");

    let descalificado = false;

    sumarButton.addEventListener("click", function () {
        if (!descalificado) {
            let valor = parseFloat(inputField.value);
            valor += 0.1;
            if (valor <= 10.0) {
                inputField.value = valor.toFixed(1);
            }
        }
    });

    restarButton.addEventListener("click", function () {
        if (!descalificado) {
            let valor = parseFloat(inputField.value);
            valor -= 0.1;
            if (valor >= 5.0) {
                inputField.value = valor.toFixed(1);
            }
        }
    });

    inputField.addEventListener("input", function () {
        let valor = parseFloat(inputField.value);
        if (valor < 5.0) {
            inputField.value = "5.0";
        }
        if (valor > 10.0) {
            inputField.value = "10.0";
        }
    });

    
    descalificarLink.addEventListener("click", function () {
        inputField.value = "0.0";
        descalificado = true;
    });
});