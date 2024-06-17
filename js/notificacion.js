function mostrarNotificacion() {
    var notificacion = document.getElementById('notificacion');
    var notificacionIcono = document.getElementById('notificacionIcono');
    notificacion.style.display = 'block';
    notificacionIcono.style.display = 'none';
}

function ocultarNotificacion() {
    var notificacion = document.getElementById('notificacion');
    var notificacionIcono = document.getElementById('notificacionIcono');
    notificacion.style.display = 'none';
    notificacionIcono.style.display = 'flex';
}

function agendarCita() {
    window.location.href = 'https://example.com/agendar'; // Reemplaza con la URL de la página de agendar
}

// Mostrar la notificación al cargar la página y ocultarla después de 3 segundos
window.onload = function() {
    mostrarNotificacion();
    setTimeout(ocultarNotificacion, 3000);
};