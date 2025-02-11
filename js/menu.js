document.addEventListener('DOMContentLoaded', function () { //Buena práctica DOMContentLoaded
    document.addEventListener('click', function (event) {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const navbarToggler = document.querySelector('.navbar-toggler');

        // Verificar si se hizo clic dentro del menú desplegable o en el botón de la hamburguesa
        const isClickInsideNavbar = navbarCollapse.contains(event.target);
        const isClickInsideToggler = navbarToggler.contains(event.target);

        // Si el menú está abierto y el clic no fue dentro del menú ni en el botón de la hamburguesa, cierra el menú
        if (navbarCollapse.classList.contains('show') && !isClickInsideNavbar && !isClickInsideToggler) {
            navbarCollapse.classList.remove('show');
        }
    });
});


    // Cerrar la alerta automáticamente después de 3 segundos
    window.addEventListener('DOMContentLoaded', function() {
        const alert = document.getElementById('autoDismissAlert');
        if (alert) {
            setTimeout(function() {
                alert.classList.remove('show');
                alert.classList.add('fade'); // Agrega la clase fade para el efecto de desvanecimiento
            }, 3000); // 3000 milisegundos = 3 segundos
        }
    });
