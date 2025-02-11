document.getElementById("btn-icono").addEventListener("click", function () {
    const texto = document.getElementById("btn-texto");

    // Mostrar el texto dentro del botón con transición suave
    texto.classList.add("visible");
    texto.classList.remove("d-none");

    // Ocultar el texto después de 5 segundos
    setTimeout(() => {
        texto.classList.remove("visible");
        texto.classList.add("d-none");
    }, 5000); // 5000 ms = 5 segundos
});

function cargarDatosModal(id, nombre, precio) {
    // Precargar los datos en el modal
    document.getElementById('id_servicio').value = id;
    document.getElementById('nombre').value = nombre;
    document.getElementById('precio').value = precio;
}
