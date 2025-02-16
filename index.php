<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JASDEV</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>

<header class="header">
    <div class="contenedor-header">
        <!-- Logo como enlace -->
        <a href="index.php" style="text-decoration: none;">
            <img src="img/logo.png" alt="Logo" class="logo">
        </a>

        <!-- "Amir Seade" como enlace -->
        <a href="index.php" style="text-decoration: none;">
            <h1 class="nombre">Amir Seade</h1>
        </a>

        <!-- "JASDEV" como enlace -->
        <a href="index.php" style="text-decoration: none;">
            <span class="marca">JASDEV</span>
        </a>

        <nav class="navegacion">
            <a href="#habilidades">Mis habilidades</a>
            <a href="#proyectos">Mis Proyectos</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </div>
</header>





    <div class="hero">
        <div class="contenido-hero">
            <h2 class="h2_hero">Diseño y Desarrollo Web Freelancer</h2>
            <p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88"
                    height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                </svg>Santiago del Estero, Argentina</p>

            <a class="boton" href="#contacto">Contactar</a>
        </div>
    </div>

    <section id="habilidades" class="contenedor sombra">
        <h2>Mis Habilidades</h2>
        <main class="servicios">
            <div class="servicio">
                <h3>Diseño & Desarrollo Web</h3>
                <div class="iconos">
                    <img src="img/software-development.png" alt="" style="width: 54px; height: 54px;">
                </div>
                <ul>
                    <li>Diseño y desarrollo de aplicaciones Web.</li>
                    <li>Diseño responsive y adaptativo para dispositivos móviles y escritorio.</li>
                    <li>Diseño de sitios web personalizados y optimizados.</li>
                </ul>
            </div>
            <div class="servicio">
                <h3>Inteligencia Artificial</h3>
                <div class="iconos">

                    <!-- https://tablericons.com/ -->
                    <img src="img/chip-de-ia.png" alt="" style="width: 54px; height: 54px;">

                </div>
                <ul>
                    <li>Gran capacidad de manejo de la Inteligencia Artificial.</li>
                    <li>Desarrollo de algoritmos de IA para mejorar la experiencia de los clientes.Por ejemplo, un Chat
                        Bot.</li>
                </ul>
            </div>
            <div class="servicio">
                <h3>E-Commerce </h3>
                <div class="iconos">
                    <img src="img/e-commerce.png" alt="" style="width: 54px; height: 54px; margin-left: 8px;">
                </div>
                <ul>
                    <li>Diseño y desarrollo de aplicaciones de comercio electrónico.</li>
                    <li>Catalogo de productos y servicios.</li>
                    <li>Control de stock y gestión de pedidos.</li>
                </ul>
            </div>
        </main>
</section>



    <!-- Mis Proyectos -->
    <section class="contenedor sombra" id="proyectos">
        <h2>Mis Proyectos</h2>
        <main class="proyectos">
            <div class="proyecto">
                <a href="https://martinikova.jasdev.site/inicio" target="_blank" style="text-decoration: none;">
                    <h3>Martinikova: Tienda Online</h3>
                </a>
                <p>Martinikova es una tienda en línea para la venta de indumentaria, diseñada para ofrecer una
                    experiencia de usuario fácil y rápida tanto en dispositivos móviles como de escritorio. Los
                    clientes pueden navegar y realizar pedidos de forma segura y sencilla.</p>
                <p>El panel de administración permite al vendedor gestionar el inventario, procesar pedidos y añadir
                    productos de manera fácil, todo desde una interfaz amigable y simple.</p>

                <div class="imagenes-proyecto">
                    <img src="img/martinikova.png" alt="Proyecto 1 Imagen 1">
                </div>
                <a href="https://martinikova.jasdev.site/inicio" target="_blank" style="text-decoration: none;">
                    <button class="boton">Ver Proyecto</button>
                </a>
            </div>

            <div class="proyecto">
                <h3>Sistema Directores: Gestión Docente</h3>
                <p>Sistema de gestión desarrollado para la administración de docentes en escuelas de la
                    provincia.Desarrollo desde la Direccion general de Informatica de Santiago del Estero (DGISE)</p>
                <div class="imagenes-proyecto">
                    <img src="img/directores.png" alt="Proyecto 2 Imagen 1">
                </div>
            </div>

        </main>
    </section>


    <section id="contacto" class="contacto contenedor sombra">
        <h2>Contacto</h2>
        <form id="formularioContacto" class="formulario">
            <legend>Contactános llenando todos los campos</legend>

            <div class="contenedor-campos">
                <div class="campo">
                    <label>Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="campo">
                    <label>Teléfono</label>
                    <input type="tel" name="telefono" placeholder="Teléfono">
                </div>
                <div class="campo w-100">
                    <label>Correo</label>
                    <input type="email" name="correo" placeholder="Mail">
                </div>
                <div class="campo w-100">
                    <label>Mensaje:</label>
                    <textarea name="mensaje"></textarea>
                </div>
            </div><!--.contenedor-campos-->
            <div class="enviar">
                <input class="boton" type="submit" value="Enviar WhatsApp">
            </div>
        </form>
    </section>


    </div>

    <footer>
        <!-- Pie de página -->
        <p><b>&copy;2025 JASDEV </b>
            <a href="https://www.instagram.com/amirseade" target="_blank">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="mailto:amirseade00@gmail.com" target="_blank">
                <i class="fas fa-envelope"></i> amirseade00@gmail.com
            </a>
            <a href="https://wa.me/3855724467" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>

        </p>
    </footer>



    <script src="js/script.js"></script>
</body>

</html>