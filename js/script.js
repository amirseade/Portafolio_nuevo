/**
 * ==========================================================================
 * AMIR SEADE | JASDEV - JAVASCRIPT PRINCIPAL
 * Interactividad, ScrollSpy, Filtros, Galería Multi-Imagen y Conversión
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
    
    // Elementos del Modal Lightbox Multi-Imagen
    const lightbox = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxTitulo = document.getElementById('lightboxTitulo');
    const lightboxContador = document.getElementById('lightboxContador');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxOverlay = document.getElementById('lightboxOverlay');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');
    const lightboxThumbs = document.getElementById('lightboxThumbs');

    const formularioContacto = document.getElementById('formularioContacto');
    const botonesFiltro = document.querySelectorAll('.btn-filtro');
    const tarjetasProyectos = document.querySelectorAll('.proyecto-card');
    const seccionElements = document.querySelectorAll('section[id], div#inicio');

    // Estado actual de la galería en el modal
    let galeriaActual = {
        titulo: '',
        imagenes: [],
        indiceActual: 0
    };

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

        // Header scrolled
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

        // ScrollSpy
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
    handleScrollEffects();

    // --- 3. FILTRO DE PROYECTOS ---
    if (botonesFiltro.length > 0 && tarjetasProyectos.length > 0) {
        botonesFiltro.forEach(boton => {
            boton.addEventListener('click', () => {
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

    // --- 4. CAMBIAR FOTO DIRECTAMENTE EN LA TARJETA (MINIATURAS) ---
    window.cambiarFotoTarjeta = function (proyectoId, rutaImagen, indice) {
        const previewImg = document.getElementById(`preview-img-${proyectoId}`);
        if (previewImg) {
            previewImg.style.opacity = '0.5';
            previewImg.src = rutaImagen;
            previewImg.onload = () => {
                previewImg.style.opacity = '1';
            };
        }

        // Marcar miniatura activa
        const tarjeta = document.querySelector(`.proyecto-card[data-id="${proyectoId}"]`);
        if (tarjeta) {
            const thumbs = tarjeta.querySelectorAll('.thumb-btn');
            thumbs.forEach((t, i) => {
                if (i === indice) t.classList.add('activo');
                else t.classList.remove('activo');
            });
        }
    };

    // --- 5. GALERÍA LIGHTBOX MULTI-IMAGEN ---
    window.abrirGaleriaProyecto = function (proyectoId, indiceInicial = 0) {
        const dataScript = document.getElementById(`data-galeria-${proyectoId}`);
        if (!dataScript) return;

        try {
            const datos = JSON.parse(dataScript.textContent);
            galeriaActual.titulo = datos.titulo || 'Proyecto';
            galeriaActual.imagenes = datos.imagenes || [];
            galeriaActual.indiceActual = Math.min(Math.max(indiceInicial, 0), galeriaActual.imagenes.length - 1);

            actualizarVistaLightbox();

            if (lightbox) {
                lightbox.classList.add('activo');
                lightbox.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }
        } catch (e) {
            console.error('Error cargando galería:', e);
        }
    };

    const actualizarVistaLightbox = () => {
        if (!galeriaActual.imagenes.length) return;

        const total = galeriaActual.imagenes.length;
        const index = galeriaActual.indiceActual;
        const rutaActual = galeriaActual.imagenes[index];

        // Actualizar título y contador
        if (lightboxTitulo) lightboxTitulo.textContent = galeriaActual.titulo;
        if (lightboxContador) lightboxContador.textContent = `${index + 1} / ${total}`;

        // Transición de imagen
        if (lightboxImg) {
            lightboxImg.style.opacity = '0.4';
            lightboxImg.src = rutaActual;
            lightboxImg.onload = () => {
                lightboxImg.style.opacity = '1';
            };
        }

        // Ocultar flechas si solo hay 1 imagen
        if (lightboxPrev && lightboxNext) {
            if (total <= 1) {
                lightboxPrev.style.display = 'none';
                lightboxNext.style.display = 'none';
            } else {
                lightboxPrev.style.display = 'flex';
                lightboxNext.style.display = 'flex';
            }
        }

        // Renderizar miniaturas del modal
        if (lightboxThumbs) {
            if (total <= 1) {
                lightboxThumbs.style.display = 'none';
                lightboxThumbs.innerHTML = '';
            } else {
                lightboxThumbs.style.display = 'flex';
                lightboxThumbs.innerHTML = '';
                galeriaActual.imagenes.forEach((imgSrc, idx) => {
                    const btn = document.createElement('button');
                    btn.className = `lightbox-thumb-btn ${idx === index ? 'activo' : ''}`;
                    btn.type = 'button';
                    btn.setAttribute('aria-label', `Foto ${idx + 1}`);
                    btn.innerHTML = `<img src="${imgSrc}" alt="Miniatura ${idx + 1}">`;
                    btn.addEventListener('click', () => {
                        galeriaActual.indiceActual = idx;
                        actualizarVistaLightbox();
                    });
                    lightboxThumbs.appendChild(btn);
                });
            }
        }
    };

    const cambiarImagenModal = (direccion) => {
        if (!galeriaActual.imagenes.length) return;
        const total = galeriaActual.imagenes.length;
        if (total <= 1) return;

        if (direccion === 'next') {
            galeriaActual.indiceActual = (galeriaActual.indiceActual + 1) % total;
        } else {
            galeriaActual.indiceActual = (galeriaActual.indiceActual - 1 + total) % total;
        }
        actualizarVistaLightbox();
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
    if (lightboxPrev) lightboxPrev.addEventListener('click', () => cambiarImagenModal('prev'));
    if (lightboxNext) lightboxNext.addEventListener('click', () => cambiarImagenModal('next'));

    // Teclado (Flechas y ESC)
    document.addEventListener('keydown', (e) => {
        if (!lightbox || !lightbox.classList.contains('activo')) return;

        if (e.key === 'Escape') cerrarLightbox();
        if (e.key === 'ArrowRight') cambiarImagenModal('next');
        if (e.key === 'ArrowLeft') cambiarImagenModal('prev');
    });

    // --- 6. COPIAR EMAIL CON TOAST FEEDBACK ---
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
        btnCopiarContacto.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                copiarEmailAlPortapapeles('amirseade00@gmail.com');
            }
        });
    }

    // --- 7. PROCESAMIENTO FORMULARIO A WHATSAPP ---
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

            const mensajeWhatsApp = 
                `🚀 *NUEVA CONSULTA DESDE PORTAFOLIO WEB*\n\n` +
                `👤 *Nombre / Empresa:* ${nombre}\n` +
                `📱 *Teléfono:* ${telefono}\n` +
                `✉️ *Correo:* ${correo}\n` +
                `💡 *Tipo de Proyecto:* ${tipoProyecto}\n\n` +
                `📝 *Mensaje:* \n"${mensaje}"\n\n` +
                `_Enviado desde jasdev.site_`;

            const mensajeEncoded = encodeURIComponent(mensajeWhatsApp);
            const numeroDestino = '3855724467';
            const urlWhatsApp = `https://api.whatsapp.com/send?phone=${numeroDestino}&text=${mensajeEncoded}`;

            window.open(urlWhatsApp, '_blank');
        });
    }

    // --- 8. ANIMACIONES SCROLL REVEAL (IntersectionObserver) ---
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
        revealElements.forEach(el => el.classList.add('revealed'));
    }

    // --- 9. ANIMACIÓN CONTADORES DE MÉTRICAS ---
    const contadores = document.querySelectorAll('.counter');
    let contadoresIniciados = false;

    const animarContadores = () => {
        contadores.forEach(contador => {
            const target = +contador.getAttribute('data-target');
            const duracion = 1500;
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
