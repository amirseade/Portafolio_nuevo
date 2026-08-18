/**
 * ==========================================================================
 * AMIR SEADE | JASDEV - JAVASCRIPT PRINCIPAL
 * Interactividad, ScrollSpy, Filtros, Lightbox y Conversión
 * ==========================================================================
 */

document.addEventListener('DOMContentLoaded', () => {

    // --- VARIABLES Y ELEMENTOS DOM ---
    const header = document.getElementById('navbar');
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('.nav-link');
    const btnBackToTop = document.getElementById('btnBackToTop');
    const btnCopiarHero = document.getElementById('btnCopiarEmailHero');
    const btnCopiarContacto = document.getElementById('btnCopiarEmailContacto');
    const toast = document.getElementById('toastNotification');
    const toastMessage = document.getElementById('toastMessage');
    const lightbox = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxOverlay = document.getElementById('lightboxOverlay');
    const formularioContacto = document.getElementById('formularioContacto');
    const botonesFiltro = document.querySelectorAll('.btn-filtro');
    const tarjetasProyectos = document.querySelectorAll('.proyecto-card');
    const seccionElements = document.querySelectorAll('section[id], div#inicio');

    // --- 1. MENÚ MÓVIL TOGGLE ---
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('menu-abierto');
            const icon = menuToggle.querySelector('i');
            if (navMenu.classList.contains('menu-abierto')) {
                icon.classList.remove('fa-bars-staggered');
                icon.classList.add('fa-xmark');
            } else {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars-staggered');
            }
        });

        // Cerrar menú al hacer clic en cualquier enlace
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('menu-abierto');
                const icon = menuToggle.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars-staggered');
                }
            });
        });
    }

    // --- 2. HEADER SCROLL & BACK TO TOP ---
    const handleScrollEffects = () => {
        const scrollY = window.scrollY;

        // Estilo reducido en header al scrollear
        if (header) {
            if (scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // Botón Volver Arriba
        if (btnBackToTop) {
            if (scrollY > 400) {
                btnBackToTop.classList.add('visible');
            } else {
                btnBackToTop.classList.remove('visible');
            }
        }

        // ScrollSpy activo
        let seccionActual = '';
        seccionElements.forEach(seccion => {
            const seccionTop = seccion.offsetTop - 120;
            const seccionHeight = seccion.offsetHeight;
            if (scrollY >= seccionTop && scrollY < seccionTop + seccionHeight) {
                seccionActual = seccion.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('activo');
            const href = link.getAttribute('href');
            if (href === `#${seccionActual}` || (seccionActual === 'inicio' && href === '#inicio')) {
                link.classList.add('activo');
            }
        });
    };

    window.addEventListener('scroll', handleScrollEffects, { passive: true });
    handleScrollEffects(); // Ejecutar al inicio

    // --- 3. FILTRO DE PROYECTOS ---
    if (botonesFiltro.length > 0 && tarjetasProyectos.length > 0) {
        botonesFiltro.forEach(boton => {
            boton.addEventListener('click', () => {
                // Actualizar botón activo
                botonesFiltro.forEach(btn => btn.classList.remove('activo'));
                boton.classList.add('activo');

                const filtro = boton.getAttribute('data-filtro');

                tarjetasProyectos.forEach(tarjeta => {
                    const categoria = tarjeta.getAttribute('data-categoria');
                    if (filtro === 'todos' || categoria === filtro) {
                        tarjeta.style.display = 'flex';
                        setTimeout(() => {
                            tarjeta.style.opacity = '1';
                            tarjeta.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        tarjeta.style.opacity = '0';
                        tarjeta.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            tarjeta.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }

    // --- 4. LIGHTBOX PARA PROYECTOS ---
    window.abrirLightbox = function (src, caption) {
        if (lightbox && lightboxImg && lightboxCaption) {
            lightboxImg.src = src;
            lightboxCaption.textContent = caption;
            lightbox.classList.add('activo');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden'; // Bloquear scroll
        }
    };

    const cerrarLightbox = () => {
        if (lightbox) {
            lightbox.classList.remove('activo');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    };

    if (lightboxClose) lightboxClose.addEventListener('click', cerrarLightbox);
    if (lightboxOverlay) lightboxOverlay.addEventListener('click', cerrarLightbox);
    
    // Cerrar lightbox con tecla ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightbox && lightbox.classList.contains('activo')) {
            cerrarLightbox();
        }
    });

    // --- 5. COPIAR EMAIL CON TOAST FEEDBACK ---
    const mostrarToast = (mensaje) => {
        if (toast && toastMessage) {
            toastMessage.textContent = mensaje;
            toast.classList.add('activo');
            setTimeout(() => {
                toast.classList.remove('activo');
            }, 3500);
        }
    };

    const copiarEmailAlPortapapeles = (email) => {
        navigator.clipboard.writeText(email)
            .then(() => {
                mostrarToast(`¡Correo copiado: ${email}!`);
            })
            .catch(() => {
                // Fallback clásico
                const tempInput = document.createElement('input');
                tempInput.value = email;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                mostrarToast(`¡Correo copiado: ${email}!`);
            });
    };

    if (btnCopiarHero) {
        btnCopiarHero.addEventListener('click', () => {
            const email = btnCopiarHero.getAttribute('data-email') || 'amirseade00@gmail.com';
            copiarEmailAlPortapapeles(email);
        });
    }

    if (btnCopiarContacto) {
        btnCopiarContacto.addEventListener('click', () => {
            copiarEmailAlPortapapeles('amirseade00@gmail.com');
        });
    }

    // --- 6. PROCESAMIENTO FORMULARIO A WHATSAPP ---
    if (formularioContacto) {
        formularioContacto.addEventListener('submit', (e) => {
            e.preventDefault();

            const nombre = document.getElementById('form-nombre')?.value.trim();
            const telefono = document.getElementById('form-telefono')?.value.trim();
            const correo = document.getElementById('form-correo')?.value.trim();
            const mensaje = document.getElementById('form-mensaje')?.value.trim();
            const tipoProyectoInput = document.querySelector('input[name="tipo_proyecto"]:checked');
            const tipoProyecto = tipoProyectoInput ? tipoProyectoInput.value : 'General';

            if (!nombre || !telefono || !correo || !mensaje) {
                mostrarToast('Por favor completa todos los campos obligatorios.');
                return;
            }

            // Construir mensaje enriquecido para WhatsApp
            const mensajeWhatsApp = 
                `🚀 *NUEVA CONSULTA DESDE PORTAFOLIO WEB*\n\n` +
                `👤 *Nombre / Empresa:* ${nombre}\n` +
                `📱 *Teléfono:* ${telefono}\n` +
                `✉️ *Correo:* ${correo}\n` +
                `💡 *Tipo de Proyecto:* ${tipoProyecto}\n\n` +
                `📝 *Mensaje:* \n"${mensaje}"\n\n` +
                `_Enviado desde el portafolio jasdev.site_`;

            const mensajeEncoded = encodeURIComponent(mensajeWhatsApp);
            const numeroDestino = '3855724467';
            const urlWhatsApp = `https://api.whatsapp.com/send?phone=${numeroDestino}&text=${mensajeEncoded}`;

            // Abrir en nueva pestaña
            window.open(urlWhatsApp, '_blank');
        });
    }

    // --- 7. SCROLL REVEAL ANIMATIONS (IntersectionObserver) ---
    const revealElements = document.querySelectorAll('.reveal-fade, .reveal-scale');
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback para navegadores antiguos
        revealElements.forEach(el => el.classList.add('revealed'));
    }

    // --- 8. ANIMACIÓN CONTADORES DE MÉTRICAS ---
    const contadores = document.querySelectorAll('.counter');
    let contadoresIniciados = false;

    const animarContadores = () => {
        contadores.forEach(contador => {
            const target = +contador.getAttribute('data-target');
            const duracion = 1500; // ms
            const incremento = target / (duracion / 30);
            let valorActual = 0;

            const timer = setInterval(() => {
                valorActual += incremento;
                if (valorActual >= target) {
                    contador.textContent = target;
                    clearInterval(timer);
                } else {
                    contador.textContent = Math.ceil(valorActual);
                }
            }, 30);
        });
    };

    const metricCard = document.querySelector('.hero-metrics-card');
    if (metricCard && 'IntersectionObserver' in window) {
        const metricObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !contadoresIniciados) {
                    contadoresIniciados = true;
                    animarContadores();
                }
            });
        }, { threshold: 0.5 });

        metricObserver.observe(metricCard);
    }
});
