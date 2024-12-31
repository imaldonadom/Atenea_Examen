<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Lo Arcaya Unity</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Clínica Unity</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#resumen">Resumen</a></li>
                <li><a href="#casa-nueva">Casa Nueva</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#noticias">Noticias</a></li>
                <li><a href="#contacto">Contáctanos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero -->
        <section id="inicio" class="hero">
            <div class="hero-text">
                <h2>Clínica Lo Arcaya Unity</h2>
                <p>Experiencia única en Chile</p>
                <button>Sobre nosotros</button>
            </div>
        </section>

        <!-- Resumen -->
        <section id="resumen" class="highlights">
            <div class="highlight">
                <h3>+1,200</h3>
                <p>m² de superficie</p>
            </div>
            <div class="highlight">
                <h3>120</h3>
                <p>Estacionamientos</p>
            </div>
            <div class="highlight">
                <h3>+15 años</h3>
                <p>Experiencia profesional</p>
            </div>
        </section>

        <!-- Casa Nueva -->
        <section id="casa-nueva" class="about">
            <h2>¡Tenemos casa nueva!</h2>
            <p>Diseño de autor y acabados exclusivos para ofrecerte un ambiente cálido y profesional.</p>
            <div class="media">
                <img src="images/casa-nueva.jpg" alt="Casa nueva">
                <video controls>
                    <source src="videos/instalaciones.mp4" type="video/mp4">
                </video>
            </div>
        </section>

        <!-- Servicios -->
        <section id="servicios" class="services">
            <h2>Nuestros Servicios</h2>
            <div class="service">
                <h3>Cirugía Plástica</h3>
            </div>
            <div class="service">
                <h3>Medicina Capilar</h3>
            </div>
            <div class="service">
                <h3>Tratamientos Estéticos</h3>
            </div>
            <div class="service">
                <h3>Especialidades Médicas</h3>
            </div>
        </section>

        <!-- Noticias -->
        <section id="noticias" class="news">
            <h2>Noticias</h2>
            <div class="news-item">
                <img src="images/news1.jpg" alt="Noticia 1">
                <h4>Láser Capillus</h4>
                <p>Una solución innovadora para la caída del cabello.</p>
            </div>
            <div class="news-item">
                <img src="images/news2.jpg" alt="Noticia 2">
                <h4>Rinoplastía</h4>
                <p>Todo lo que necesitas saber.</p>
            </div>
            <div class="news-item">
                <img src="images/news3.jpg" alt="Noticia 3">
                <h4>Revoluciona tu piel</h4>
                <p>Tratamientos láser de última generación.</p>
            </div>
        </section>

        <!-- Contacto -->
        <section id="contacto" class="contact">
            <h2>Contáctanos</h2>
            <form action="procesar-contacto.php" method="post">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <textarea name="mensaje" placeholder="Escribe tu mensaje"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Clínica Lo Arcaya Unity. Todos los derechos reservados.</p>
    </footer>

    <script src="js/scripts.js"></script>
</body>
</html>
