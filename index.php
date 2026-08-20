<?php
// ==========================================================================
// CONFIGURACIÓN Y LISTA DE PROYECTOS (SIN BASE DE DATOS)
// Para agregar más imágenes o proyectos, solo edita este arreglo PHP:
// ==========================================================================

$proyectos = [
    [
        'id' => 'controlphone',
        'titulo' => 'ControlPhone: Gestión Integral de Stock, Ventas & Analítica',
        'categoria' => 'saas',
        'categoria_label' => 'SaaS / Gestión Comercial',
        'categoria_icono' => 'fa-brands fa-apple',
        'estado' => 'En Producción',
        'descripcion' => 'Sistema de gestión integral diseñado para comercios de tecnología y accesorios. Permite control de inventario en tiempo real, registro de ventas rápidas, gestión de permisos (Administrador y Empleados) y módulo analítico con balance financiero diario, semanal y mensual.',
        'imagenes' => [
            'img/controlphone/foto1.png',
            'img/controlphone/foto2.png',
            'img/controlphone/panel_admin.webp',
            'img/controlphone/modal_venta.webp',
            'img/controlphone/pagos_combinados.webp',
            'img/controlphone/caja_desglose.webp',
            'img/controlphone/panel_ventas.webp',
            'img/controlphone/estadisticas_view.webp',
            'img/controlphone/config.webp',
            'img/controlphone/bot_cotizador.webp',
            
        ],
        'tags' => ['PHP', 'MySQL', 'JavaScript ES6', 'Gestión de Roles', 'Reportes & Finanzas']
    ],
    [
        'id' => 'martinikova',
        'titulo' => 'Martinikova: Plataforma E-Commerce con Panel Administrativo',
        'categoria' => 'ecommerce',
        'categoria_label' => 'E-Commerce & Retail',
        'categoria_icono' => 'fa-solid fa-bag-shopping',
        'estado' => 'En Producción',
        'descripcion' => 'Tienda en línea orientada a indumentaria con catálogo dinámico optimizado para móviles y escritorio. Incluye carrito ágil, checkout intuitivo y un panel de administración para gestión de stock, pedidos y precios en tiempo real.',
        'imagenes' => [
            'img/martinikova/foto1.png',
            'img/martinikova/foto6.png',
            'img/martinikova/foto7.png',
            'img/martinikova/foto3.png',
            'img/martinikova/foto4.png',
            'img/martinikova/foto2.jpeg',
            
            // 'img/martinikova_catalogo.png',
            // 'img/martinikova_admin.png',
        ],
        'tags' => ['E-Commerce', 'PHP', 'Panel Admin', 'UX Mobile-First', 'Catálogo Dinámico']
    ],
    [
        'id' => 'directores',
        'titulo' => 'Sistema Directores: Gestión Docente e Institucional',
        'categoria' => 'institucional',
        'categoria_label' => 'Gestión Gubernamental',
        'categoria_icono' => 'fa-solid fa-building-columns',
        'estado' => 'Sector Público',
        'descripcion' => 'Plataforma de administración y trazabilidad de docentes en escuelas provinciales. Desarrollado en el marco de la Dirección General de Informática de Santiago del Estero (DGISE), asegurando alta disponibilidad y manejo estructurado de datos.',
        'imagenes' => [
            'img/directores/foto1.png',
            'img/directores/foto2.png',
            'img/directores/foto3.png',
            
            // 'img/directores_escuelas.png',
        ],
        'tags' => ['PHP / Backend', 'Bases de Datos Relacionales', 'Seguridad de Datos', 'DGISE']
    ],
    [
        'id' => 'vencimientos',
        'titulo' => 'Gestión de Vencimientos & Claves para Estudios Contables',
        'categoria' => 'saas',
        'categoria_label' => 'FinTech & Contable',
        'categoria_icono' => 'fa-solid fa-calculator',
        'estado' => 'En Producción',
        'descripcion' => 'Software especializado para contadores y estudios fiscales. Automatiza el calendario de vencimientos impositivos de clientes, envía notificaciones automáticas y opera como un gestor seguro de credenciales y accesos de servicios fiscales.',
        'imagenes' => [
            // hasta la foto 7
            'img/vencimientos/foto1.png',
            'img/vencimientos/foto2.png',
            'img/vencimientos/foto3.png',
            'img/vencimientos/foto4.png',
            'img/vencimientos/foto5.png',
            'img/vencimientos/foto6.png',
            'img/vencimientos/foto7.png',
            // 'img/vencimientos_calendario.png',
        ],
        'tags' => ['PHP', 'Automatización', 'Notificaciones', 'Bóveda de Claves Seguras', 'Control Fiscal']
    ]
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amir Seade | JASDEV — Desarrollador Full Stack & Diseñador Web</title>
    <meta name="description"
        content="Portafolio profesional de Amir Seade (JASDEV). Desarrollador Full Stack especializado en aplicaciones web a medida, sistemas SaaS, e-commerce e integración de inteligencia artificial.">
    <meta name="keywords"
        content="Desarrollador Web, Full Stack, Amir Seade, JASDEV, PHP, MySQL, JavaScript, UI UX, Sistemas de Gestion, E-Commerce, Santiago del Estero">

    <!-- Favicon -->
    <link rel="icon" href="img/logo.ico" type="image/x-icon">

    <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Elemento ancla superior -->
    <div id="inicio"></div>

    <!-- Header & Navegación Flotante Glassmorphism -->
    <header class="header" id="navbar">
        <div class="contenedor-header">
            <a href="#inicio" class="marca-logo" aria-label="Ir al inicio">
                <img src="img/logo.png" alt="Logo JASDEV" class="logo-img">
                <div class="marca-texto">
                    <span class="nombre-autor">Amir Seade</span>
                    <span class="badge-marca">JASDEV</span>
                </div>
            </a>

            <!-- Botón Hamburguesa Móvil -->
            <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú de navegación">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>

            <!-- Menú de Navegación -->
            <nav class="navegacion" id="navMenu">
                <a href="#inicio" class="nav-link activo">Inicio</a>
                <a href="#sobre-mi" class="nav-link">Sobre Mí</a>
                <a href="#proyectos" class="nav-link">Proyectos</a>
                <a href="#habilidades" class="nav-link">Habilidades</a>
                <a href="#contacto" class="nav-link">Contacto</a>
                <a href="#contacto" class="btn-cta-nav">
                    <span>Hablemos</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION: Alto impacto para contratadores -->
    <section class="hero-section">
        <div class="hero-ambient-glow"></div>
        <div class="contenedor hero-contenedor">
            <div class="hero-content">
                <!-- Badge de disponibilidad -->
                <div class="status-badge reveal-fade">
                    <span class="status-dot"></span>
                    <span>Disponible para proyectos & oportunidades</span>
                </div>

                <h1 class="hero-title reveal-fade">
                    Transformando ideas complejas en <span class="gradient-text">software web de alto rendimiento</span>
                    y diseño intuitivo.
                </h1>

                <p class="hero-subtitle reveal-fade">
                    Hola, soy <strong>Amir Seade</strong>. Desarrollador Full Stack & Diseñador de Interfaces en
                    <strong>JASDEV</strong>. Construyo plataformas a medida, sistemas de gestión escalables, tiendas
                    online y soluciones potenciadas con IA para hacer crecer negocios.
                </p>

                <!-- Acciones Principales -->
                <div class="hero-actions reveal-fade">
                    <a href="#proyectos" class="btn btn-primary">
                        <i class="fa-solid fa-layer-group"></i>
                        <span>Ver Proyectos</span>
                    </a>
                    <a href="https://wa.me/3855724467?text=Hola%20Amir,%20vi%20tu%20portafolio%20y%20me%20gustar%C3%ADa%20conversar%20sobre%20una%20oportunidad"
                        target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Contactar al instante</span>
                    </a>
                    <button class="btn btn-outline" id="btnCopiarEmailHero" data-email="amirseade00@gmail.com"
                        title="Copiar correo">
                        <i class="fa-regular fa-copy"></i>
                        <span id="textoCopiarHero">Copiar Email</span>
                    </button>
                </div>

                <!-- Ubicación & Enlaces Rápidos -->
                <div class="hero-meta reveal-fade">
                    <div class="meta-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Santiago del Estero, Argentina <small>(Remoto Global)</small></span>
                    </div>
                    <div class="social-quick-links">
                        <a href="https://wa.me/3855724467" target="_blank" rel="noopener noreferrer"
                            aria-label="WhatsApp" class="social-pill">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="mailto:amirseade00@gmail.com" aria-label="Email" class="social-pill">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                        <a href="https://www.instagram.com/amirseade" target="_blank" rel="noopener noreferrer"
                            aria-label="Instagram" class="social-pill">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Métricas / Social Proof Card -->
            <div class="hero-metrics-card reveal-scale">
                <div class="metric-box">
                    <div class="metric-number"><span class="counter" data-target="15">15</span>+</div>
                    <div class="metric-label">Proyectos Web Entregados</div>
                </div>
                <div class="metric-divider"></div>
                <div class="metric-box">
                    <div class="metric-number"><span class="counter" data-target="100">100</span>%</div>
                    <div class="metric-label">Compromiso & Calidad</div>
                </div>
                <div class="metric-divider"></div>
                <div class="metric-box">
                    <div class="metric-number"><span class="counter" data-target="4">4</span>+</div>
                    <div class="metric-label">Años de Experiencia</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: SOBRE MÍ / VALOR PARA EL CONTRATADOR -->
    <section class="seccion sobre-mi-seccion" id="sobre-mi">
        <div class="contenedor">
            <div class="seccion-header">
                <span class="seccion-tag"><i class="fa-solid fa-user-check"></i> Propuesta de Valor</span>
                <h2 class="seccion-titulo">¿Por qué trabajar conmigo?</h2>
                <p class="seccion-subtitulo">
                    Combino rigor técnico de ingeniería con sensibilidad visual para crear productos digitales que no
                    solo se ven profesionales, sino que generan resultados comerciales medibles.
                </p>
            </div>

            <div class="pilares-grid">
                <!-- Pilar 1 -->
                <div class="pilar-card reveal-fade">
                    <div class="pilar-icono">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3>Arquitectura Robusta & Código Limpio</h3>
                    <p>Desarrollo backend y frontend estructurado, modular y preparado para escalar sin generar deuda
                        técnica innecesaria.</p>
                    <ul class="pilar-features">
                        <li><i class="fa-solid fa-check"></i> PHP / MySQL / JavaScript modular</li>
                        <li><i class="fa-solid fa-check"></i> Seguridad en control de accesos y roles</li>
                        <li><i class="fa-solid fa-check"></i> Rendimiento y carga rápida</li>
                    </ul>
                </div>

                <!-- Pilar 2 -->
                <div class="pilar-card reveal-fade">
                    <div class="pilar-icono">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    <h3>Experiencia de Usuario (UI/UX) Excepcional</h3>
                    <p>Diseño enfocado en la usabilidad, reduciendo la fricción para que los usuarios y clientes operen
                        de forma intuitiva desde cualquier pantalla.</p>
                    <ul class="pilar-features">
                        <li><i class="fa-solid fa-check"></i> Interfaces 100% responsivas</li>
                        <li><i class="fa-solid fa-check"></i> Jerarquía visual clara y moderna</li>
                        <li><i class="fa-solid fa-check"></i> Micro-interacciones orientadas a conversión</li>
                    </ul>
                </div>

                <!-- Pilar 3 -->
                <div class="pilar-card reveal-fade">
                    <div class="pilar-icono">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <h3>Innovación con IA & Automatización</h3>
                    <p>Integración de capacidades de Inteligencia Artificial para automatizar tareas repetitivas,
                        atención al cliente y análisis de datos.</p>
                    <ul class="pilar-features">
                        <li><i class="fa-solid fa-check"></i> Asistentes y Chatbots inteligentes</li>
                        <li><i class="fa-solid fa-check"></i> Notificaciones y recordatorios automáticos</li>
                        <li><i class="fa-solid fa-check"></i> Optimización de flujos de negocio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: PROYECTOS DESTACADOS CON GALERÍA MULTI-IMAGEN -->
    <section class="seccion proyectos-seccion" id="proyectos">
        <div class="contenedor">
            <div class="seccion-header">
                <span class="seccion-tag"><i class="fa-solid fa-laptop-code"></i> Casos de Éxito</span>
                <h2 class="seccion-titulo">Proyectos Destacados</h2>
                <p class="seccion-subtitulo">
                    Sistemas en producción desarrollados para resolver problemáticas reales de negocio, administración y
                    comercio electrónico.
                </p>
            </div>

            <!-- Filtros interactivos -->
            <div class="filtros-proyectos">
                <button class="btn-filtro activo" data-filtro="todos">Todos (<span
                        id="totalProyectos"><?php echo count($proyectos); ?></span>)</button>
                <button class="btn-filtro" data-filtro="saas">Sistemas & SaaS</button>
                <button class="btn-filtro" data-filtro="ecommerce">E-Commerce</button>
                <button class="btn-filtro" data-filtro="institucional">Institucional</button>
            </div>

            <!-- Grid de Proyectos Dinámico en PHP (Sin Base de Datos) -->
            <div class="proyectos-grid">
                <?php foreach ($proyectos as $p):
                    $jsonImagenes = htmlspecialchars(json_encode($p['imagenes']), ENT_QUOTES, 'UTF-8');
                    $totalFotos = count($p['imagenes']);
                    $fotoPrincipal = $p['imagenes'][0];
                    ?>
                    <article class="proyecto-card reveal-fade" data-categoria="<?php echo $p['categoria']; ?>"
                        data-id="<?php echo $p['id']; ?>">

                        <!-- Preview y Mini-Galería -->
                        <div class="proyecto-preview-wrapper">
                            <div class="proyecto-preview" onclick="abrirGaleriaProyecto('<?php echo $p['id']; ?>', 0)">
                                <img src="<?php echo $fotoPrincipal; ?>" alt="<?php echo htmlspecialchars($p['titulo']); ?>"
                                    id="preview-img-<?php echo $p['id']; ?>" loading="lazy">

                                <div class="proyecto-overlay">
                                    <span class="btn-ver-imagen">
                                        <i class="fa-solid fa-expand"></i>
                                        <?php echo $totalFotos > 1 ? "Ver Galería ($totalFotos fotos)" : "Ampliar Captura"; ?>
                                    </span>
                                </div>

                                <!-- Badge flotante de cantidad de fotos -->
                                <div class="badge-contador-fotos">
                                    <i class="fa-solid fa-images"></i>
                                    <span><?php echo $totalFotos; ?>
                                        <?php echo $totalFotos === 1 ? 'captura' : 'capturas'; ?></span>
                                </div>
                            </div>

                            <!-- Miniaturas si el proyecto tiene múltiples imágenes -->
                            <?php if ($totalFotos > 1): ?>
                                <div class="proyecto-thumbnails-bar">
                                    <?php foreach ($p['imagenes'] as $idx => $thumb): ?>
                                        <button type="button" class="thumb-btn <?php echo $idx === 0 ? 'activo' : ''; ?>"
                                            onclick="cambiarFotoTarjeta('<?php echo $p['id']; ?>', '<?php echo $thumb; ?>', <?php echo $idx; ?>)"
                                            aria-label="Ver captura <?php echo $idx + 1; ?>">
                                            <img src="<?php echo $thumb; ?>" alt="Miniatura <?php echo $idx + 1; ?>">
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Información del Proyecto -->
                        <div class="proyecto-info">
                            <div class="proyecto-header-info">
                                <span class="badge-cat"><i class="<?php echo $p['categoria_icono']; ?>"></i>
                                    <?php echo $p['categoria_label']; ?></span>
                                <span class="badge-estado"><?php echo $p['estado']; ?></span>
                            </div>

                            <h3 class="proyecto-titulo"><?php echo $p['titulo']; ?></h3>
                            <p class="proyecto-desc"><?php echo $p['descripcion']; ?></p>

                            <div class="tech-tags">
                                <?php foreach ($p['tags'] as $tag): ?>
                                    <span class="tag"><?php echo $tag; ?></span>
                                <?php endforeach; ?>
                            </div>

                            <div class="proyecto-footer">
                                <button class="btn-accion-proyecto"
                                    onclick="abrirGaleriaProyecto('<?php echo $p['id']; ?>', 0)">
                                    <i class="fa-solid fa-images"></i>
                                    <span>Ver Galería <?php echo $totalFotos > 1 ? "($totalFotos fotos)" : ""; ?></span>
                                </button>
                            </div>
                        </div>

                        <!-- Datos JSON embebidos para la galería interactiva JS -->
                        <script type="application/json" id="data-galeria-<?php echo $p['id']; ?>">
                            <?php echo json_encode([
                                'id' => $p['id'],
                                'titulo' => $p['titulo'],
                                'imagenes' => $p['imagenes']
                            ]); ?>
                        </script>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: HABILIDADES & TECH STACK -->
    <section class="seccion habilidades-seccion" id="habilidades">
        <div class="contenedor">
            <div class="seccion-header">
                <span class="seccion-tag"><i class="fa-solid fa-microchip"></i> Stack Tecnológico</span>
                <h2 class="seccion-titulo">Habilidades & Especialidades</h2>
                <p class="seccion-subtitulo">
                    Herramientas y tecnologías que domino para llevar proyectos desde el concepto hasta el despliegue en
                    producción.
                </p>
            </div>

            <div class="habilidades-grid">
                <!-- Tarjeta 1: Desarrollo Web -->
                <div class="habilidad-card reveal-fade">
                    <div class="habilidad-header">
                        <div class="habilidad-icon-wrap">
                            <img src="img/software-development.png" alt="Desarrollo Web" class="habilidad-img">
                        </div>
                        <div>
                            <h3>Desarrollo Frontend & Backend</h3>
                            <span class="habilidad-sub">Arquitectura full stack</span>
                        </div>
                    </div>
                    <ul class="habilidad-lista">
                        <li><i class="fa-solid fa-circle-check"></i> Aplicaciones web a medida, rápidas y seguras.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Diseño 100% responsivo para móviles, tablets y
                            monitores.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Integración con APIs REST, bases de datos y
                            servicios externos.</li>
                    </ul>
                    <div class="tech-pills">
                        <span>HTML5</span>
                        <span>CSS3 Moderno</span>
                        <span>JavaScript ES6+</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>
                </div>

                <!-- Tarjeta 2: Inteligencia Artificial -->
                <div class="habilidad-card reveal-fade">
                    <div class="habilidad-header">
                        <div class="habilidad-icon-wrap">
                            <img src="img/chip-de-ia.png" alt="Inteligencia Artificial" class="habilidad-img">
                        </div>
                        <div>
                            <h3>Inteligencia Artificial & Bots</h3>
                            <span class="habilidad-sub">Automatización inteligente</span>
                        </div>
                    </div>
                    <ul class="habilidad-lista">
                        <li><i class="fa-solid fa-circle-check"></i> Integración de modelos de IA y LLMs en flujos de
                            trabajo.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Chatbots interactivos para atención al cliente y
                            ventas.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Procesamiento automatizado y optimización de
                            respuestas.</li>
                    </ul>
                    <div class="tech-pills">
                        <span>AI Prompts & Logic</span>
                        <span>Chatbots</span>
                        <span>APIs de IA</span>
                        <span>Automatización</span>
                    </div>
                </div>

                <!-- Tarjeta 3: E-Commerce & Negocios -->
                <div class="habilidad-card reveal-fade">
                    <div class="habilidad-header">
                        <div class="habilidad-icon-wrap">
                            <img src="img/e-commerce.png" alt="E-Commerce" class="habilidad-img">
                        </div>
                        <div>
                            <h3>E-Commerce & Gestión Comercial</h3>
                            <span class="habilidad-sub">Sistemas orientados a ventas</span>
                        </div>
                    </div>
                    <ul class="habilidad-lista">
                        <li><i class="fa-solid fa-circle-check"></i> Tiendas virtuales con catálogos optimizados para
                            conversión.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Control de inventario, stock en tiempo real y
                            ventas.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Paneles de administración amigables e intuitivos.
                        </li>
                    </ul>
                    <div class="tech-pills">
                        <span>Carritos de Compra</span>
                        <span>Control de Stock</span>
                        <span>Reportes Financieros</span>
                        <span>Paneles Admin</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: CONTACTO & CONVERSIÓN RÁPIDA -->
    <section class="seccion contacto-seccion" id="contacto">
        <div class="contenedor">
            <div class="seccion-header">
                <span class="seccion-tag"><i class="fa-solid fa-comments"></i> Iniciar Conversación</span>
                <h2 class="seccion-titulo">¿Listo para impulsar tu proyecto?</h2>
                <p class="seccion-subtitulo">
                    Hablemos de tus necesidades técnicas o de la oportunidad laboral en tu equipo. Respondo en menos de
                    24 horas.
                </p>
            </div>

            <div class="contacto-wrapper">
                <!-- Columna Izquierda: Accesos Directos de Confianza -->
                <div class="contacto-info-card reveal-fade">
                    <h3>Canales de Comunicación Directa</h3>
                    <p class="contacto-info-p">Puedes escribirme directamente por tu canal preferido o completar el
                        formulario para enviar una propuesta rápida:</p>

                    <div class="contacto-items">
                        <a href="https://wa.me/3855724467" target="_blank" rel="noopener noreferrer"
                            class="contacto-item-link">
                            <div class="contacto-item-icono whatsapp-bg">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="contacto-item-texto">
                                <span class="contacto-item-label">WhatsApp Directo</span>
                                <span class="contacto-item-val">+54 385 572-4467</span>
                            </div>
                        </a>

                        <div class="contacto-item-link" id="btnCopiarEmailContacto" role="button" tabindex="0"
                            title="Haz clic para copiar">
                            <div class="contacto-item-icono mail-bg">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contacto-item-texto">
                                <span class="contacto-item-label">Correo Electrónico (Clic para copiar)</span>
                                <span class="contacto-item-val" id="emailValText">amirseade00@gmail.com</span>
                            </div>
                            <i class="fa-regular fa-copy copy-icon-subtle"></i>
                        </div>

                        <a href="https://www.instagram.com/amirseade" target="_blank" rel="noopener noreferrer"
                            class="contacto-item-link">
                            <div class="contacto-item-icono instagram-bg">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="contacto-item-texto">
                                <span class="contacto-item-label">Instagram</span>
                                <span class="contacto-item-val">@amirseade</span>
                            </div>
                        </a>

                        <div class="contacto-item-link static-item">
                            <div class="contacto-item-icono location-bg">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="contacto-item-texto">
                                <span class="contacto-item-label">Ubicación</span>
                                <span class="contacto-item-val">Santiago del Estero, Argentina (Remoto)</span>
                            </div>
                        </div>
                    </div>

                    <div class="garantia-badge">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Privacidad garantizada. No comparto tu información con terceros.</span>
                    </div>
                </div>

                <!-- Columna Derecha: Formulario Inteligente -->
                <div class="contacto-form-card reveal-fade">
                    <form id="formularioContacto" class="formulario-moderno" novalidate>
                        <div class="form-header-badge">
                            <i class="fa-solid fa-paper-plane"></i>
                            <span>Envío directo por WhatsApp o Mail</span>
                        </div>

                        <!-- Selector de Tipo de Proyecto / Interés -->
                        <div class="campo-grupo">
                            <label class="form-label">¿Qué tipo de proyecto u oportunidad tienes en mente?</label>
                            <div class="selector-tipo-proyecto">
                                <label class="tipo-opcion">
                                    <input type="radio" name="tipo_proyecto" value="Sistema Web / SaaS" checked>
                                    <span class="tipo-badge">Sistema Web / SaaS</span>
                                </label>
                                <label class="tipo-opcion">
                                    <input type="radio" name="tipo_proyecto" value="Tienda Online (E-Commerce)">
                                    <span class="tipo-badge">E-Commerce</span>
                                </label>
                                <label class="tipo-opcion">
                                    <input type="radio" name="tipo_proyecto" value="Propuesta Laboral / Equipo Tech">
                                    <span class="tipo-badge">Oferta Laboral</span>
                                </label>
                                <label class="tipo-opcion">
                                    <input type="radio" name="tipo_proyecto" value="Otro">
                                    <span class="tipo-badge">Otro</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="campo-input">
                                <label for="form-nombre" class="form-label">Nombre o Empresa *</label>
                                <div class="input-wrap">
                                    <i class="fa-regular fa-user input-icon"></i>
                                    <input type="text" id="form-nombre" name="nombre"
                                        placeholder="Ej. Juan Pérez / TechCorp" required>
                                </div>
                            </div>
                            <div class="campo-input">
                                <label for="form-telefono" class="form-label">Teléfono / WhatsApp *</label>
                                <div class="input-wrap">
                                    <i class="fa-solid fa-phone input-icon"></i>
                                    <input type="tel" id="form-telefono" name="telefono" placeholder="+54 9 11 ..."
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="campo-input">
                            <label for="form-correo" class="form-label">Correo Electrónico *</label>
                            <div class="input-wrap">
                                <i class="fa-regular fa-envelope input-icon"></i>
                                <input type="email" id="form-correo" name="correo" placeholder="tu@empresa.com"
                                    required>
                            </div>
                        </div>

                        <div class="campo-input">
                            <label for="form-mensaje" class="form-label">Cuéntame sobre el proyecto u objetivo *</label>
                            <div class="input-wrap textarea-wrap">
                                <i class="fa-regular fa-comment-dots input-icon"></i>
                                <textarea id="form-mensaje" name="mensaje" rows="4"
                                    placeholder="Describe brevemente qué necesitas construir, tiempos estimados o presupuesto aproximado..."
                                    required></textarea>
                            </div>
                        </div>

                        <div class="form-acciones">
                            <button type="submit" class="btn btn-submit">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>Enviar Mensaje por WhatsApp</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER MODERNO -->
    <footer class="footer">
        <div class="contenedor footer-contenedor">
            <div class="footer-info">
                <div class="footer-logo">
                    <img src="img/logo.png" alt="JASDEV Logo" class="footer-logo-img">
                    <span class="footer-logo-text">Amir Seade <small>| JASDEV</small></span>
                </div>
                <p class="footer-copy">
                    Desarrollando software funcional, moderno y escalable para empresas y personas visionarias.
                </p>
            </div>

            <div class="footer-links">
                <h4>Navegación</h4>
                <a href="#inicio">Inicio</a>
                <a href="#sobre-mi">Sobre Mí</a>
                <a href="#proyectos">Proyectos</a>
                <a href="#habilidades">Habilidades</a>
                <a href="#contacto">Contacto</a>
            </div>

            <div class="footer-social">
                <h4>Contacto Rápido</h4>
                <div class="footer-social-icons">
                    <a href="https://wa.me/3855724467" target="_blank" rel="noopener noreferrer"
                        aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="mailto:amirseade00@gmail.com" aria-label="Correo"><i class="fa-solid fa-envelope"></i></a>
                    <a href="https://www.instagram.com/amirseade" target="_blank" rel="noopener noreferrer"
                        aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <p class="footer-location"><i class="fa-solid fa-location-dot"></i> Santiago del Estero, Argentina</p>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="contenedor">
                <p>&copy; <?php echo date('Y'); ?> <strong>JASDEV</strong> | Amir Seade. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- MODAL LIGHTBOX MULTI-IMAGEN PARA PROYECTOS -->
    <div id="lightboxModal" class="lightbox-modal" aria-hidden="true" role="dialog">
        <div class="lightbox-overlay" id="lightboxOverlay"></div>
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightboxClose" aria-label="Cerrar modal">&times;</button>

            <!-- Barra superior del modal -->
            <div class="lightbox-header">
                <h4 id="lightboxTitulo" class="lightbox-titulo">Proyecto</h4>
                <span id="lightboxContador" class="lightbox-contador">1 / 1</span>
            </div>

            <!-- Contenedor de Imagen con Flechas de Navegación -->
            <div class="lightbox-slider-wrap">
                <button class="lightbox-nav-btn lightbox-prev" id="lightboxPrev" aria-label="Imagen anterior">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="lightbox-img-holder">
                    <img id="lightboxImg" src="" alt="Vista previa del proyecto">
                </div>

                <button class="lightbox-nav-btn lightbox-next" id="lightboxNext" aria-label="Imagen siguiente">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

            <!-- Tira de Miniaturas del Modal -->
            <div class="lightbox-thumbnails" id="lightboxThumbs"></div>
        </div>
    </div>

    <!-- TOAST NOTIFICATION -->
    <div id="toastNotification" class="toast-notification">
        <i class="fa-solid fa-circle-check"></i>
        <span id="toastMessage">¡Correo copiado al portapapeles!</span>
    </div>

    <!-- BOTÓN VOLVER ARRIBA -->
    <a href="#inicio" id="btnBackToTop" class="btn-back-to-top" aria-label="Volver arriba">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <!-- SCRIPTS -->
    <script src="js/script.js"></script>
</body>

</html>