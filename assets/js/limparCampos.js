document.addEventListener("DOMContentLoaded", function() {
    // Seletor para todos os campos de entrada do formulário
    var camposDeEntrada = document.querySelectorAll('input');

    camposDeEntrada.forEach(function(campo) {
        campo.setAttribute('autocomplete', 'off');
    });
});
