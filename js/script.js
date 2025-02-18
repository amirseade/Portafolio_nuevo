// Selecciona todos los enlaces de navegación
const enlaces = document.querySelectorAll('.navegacion a');

// Selecciona el enlace de "Mis habilidades" (suponiendo que es el primer enlace)
const enlaceHabilidades = document.querySelector('a[href="#habilidades"]');

// Función para actualizar el estado del enlace activo en función del scroll
function actualizarActivo() {
    let posicionActual = window.scrollY;

    // Comprobamos si estamos en la parte superior de la página (scrollY == 0)
    if (posicionActual === 0) {
        // Si estamos en la parte superior, eliminamos la clase 'activo' de "Mis habilidades"
        enlaceHabilidades.classList.remove('activo');
    }

    // Comprobamos la posición de cada sección
    document.querySelectorAll('section[id]').forEach((div, index) => {
        const enlace = enlaces[index];
        const offsetTop = div.offsetTop;
        const offsetHeight = div.offsetHeight;

        // Si la sección está en la vista
        if (posicionActual >= offsetTop - 60 && posicionActual < offsetTop + offsetHeight - 60) {
            // Eliminar la clase 'activo' de todos los enlaces
            enlaces.forEach(link => link.classList.remove('activo'));
            // Añadir la clase 'activo' al enlace correspondiente
            enlace.classList.add('activo');
        }
    });

    // Si llegamos al final de la página y estamos cerca de la última sección
    const finalPagina = document.documentElement.scrollHeight - window.innerHeight;
    if (posicionActual >= finalPagina - 100) {  // Usamos un margen de 100 píxeles
        // Asegurarse de que el enlace "Contacto" sea activo
        enlaces.forEach(link => link.classList.remove('activo'));
        enlaces[enlaces.length - 1].classList.add('activo');  // El último enlace es el de "Contacto"
    }
}

// Modificar el desplazamiento al hacer clic en cualquier enlace de la barra de navegación
enlaces.forEach(enlace => {
    enlace.addEventListener('click', function (event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace

        // Eliminar la clase "activo" de todos los enlaces
        enlaces.forEach(link => link.classList.remove('activo'));

        // Agregar la clase "activo" al enlace que se ha clickeado
        this.classList.add('activo');

        // Obtener el id de la sección que corresponde al enlace clicado
        const seccionId = enlace.getAttribute('href').substring(1);  // Eliminamos el # del href
        const seccion = document.getElementById(seccionId);

        // Ajustes de desplazamiento según el tipo de dispositivo
        let offset = 0;
        if (seccionId === 'contacto') {
            offset = window.innerWidth <= 768 ? -30 : -40;
        } else if (seccionId === 'habilidades') {
            offset = window.innerWidth <= 768 ? -40 : -100;
        } else {
            offset = window.innerWidth <= 768 ? -60 : -30;
        }

        window.scrollTo({
            top: seccion.offsetTop + offset,
            behavior: 'smooth' // Desplazamiento suave
        });
    });
});

// Llamamos a la función 'actualizarActivo' cuando el usuario hace scroll
window.addEventListener('scroll', actualizarActivo);

// Llamamos a la función al cargar la página para establecer el estado inicial
document.addEventListener('DOMContentLoaded', actualizarActivo);








// Agregamos el evento de clic a cada enlace
enlaces.forEach(enlace => {
    enlace.addEventListener('click', function () {
        // Eliminar la clase "activo" de todos los enlaces
        enlaces.forEach(link => link.classList.remove('activo'));

        // Agregar la clase "activo" al enlace que se ha clickeado
        this.classList.add('activo');
    });
});

// Llamamos a la función 'actualizarActivo' cuando el usuario hace scroll
window.addEventListener('scroll', actualizarActivo);

// Llamamos a la función al cargar la página para establecer el estado inicial
document.addEventListener('DOMContentLoaded', actualizarActivo);


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
    const whatsappUrl = `https://api.whatsapp.com/send?phone=3855724467&text=${mensajeEncoded}&type=phone_number&app_absent=0`;

    // Redirigimos al WhatsApp directamente
    window.location.href = whatsappUrl;
});

