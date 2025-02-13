// Seleccionamos todos los enlaces dentro de la navegación
const enlaces = document.querySelectorAll('.navegacion a');

// Agregamos el evento de clic a cada enlace
enlaces.forEach(enlace => {
    enlace.addEventListener('click', function () {
        // Eliminar la clase "activo" de todos los enlaces
        enlaces.forEach(link => link.classList.remove('activo'));

        // Agregar la clase "activo" al enlace que se ha clickeado
        this.classList.add('activo');
    });
});


document.getElementById('formularioContacto').addEventListener('submit', function (event) {
    event.preventDefault();  // Evita el envío tradicional del formulario

    // Capturamos los datos del formulario
    const nombre = document.querySelector('[name="nombre"]').value;
    const telefono = document.querySelector('[name="telefono"]').value;
    const correo = document.querySelector('[name="correo"]').value;
    const mensaje = document.querySelector('[name="mensaje"]').value;

    // Verificamos si todos los campos están llenos
    if (!nombre || !telefono || !correo || !mensaje) {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Creamos el mensaje que se enviará por WhatsApp
    const mensajeWhatsApp = `*Necesito mas información sobre sus servicios.*\n\n*Nombre:* ${nombre}\n*Teléfono:* ${telefono}\n*Correo:* ${correo}\n*Mensaje:* ${mensaje}`;
    console.log(mensajeWhatsApp);

    // Codificamos el mensaje para usarlo en una URL
    const mensajeEncoded = encodeURIComponent(mensajeWhatsApp);

    // Creamos la URL de WhatsApp
    const whatsappUrl = `https://api.whatsapp.com/send?phone=3855277213&text=${mensajeEncoded}&type=phone_number&app_absent=0`;

    // Redirigimos al WhatsApp directamente
    window.location.href = whatsappUrl; 
});

