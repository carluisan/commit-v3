// Obtener el elemento donde se mostrará la fecha y hora
var fechaHoraElemento = document.getElementById("fechaHora");

// Función para actualizar la fecha y hora cada segundo
function actualizarFechaHora() {
    // Obtener la fecha y hora actual
    var fechaHoraActual = new Date();
    
    // Formatear la fecha y hora como deseas mostrarla
    var fechaHoraFormateada = fechaHoraActual.toLocaleString(); // Esto mostrará la fecha y hora en el formato local del navegador

    // Actualizar el contenido del elemento con la fecha y hora
    fechaHoraElemento.textContent = fechaHoraFormateada;
}

// Llamar a la función una vez para mostrar la fecha y hora inicial
actualizarFechaHora();

// Actualizar la fecha y hora cada segundo
setInterval(actualizarFechaHora, 1000);