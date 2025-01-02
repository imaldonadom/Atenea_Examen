<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atenea</title>
</head>
<body>

  <!-- Barra de navegación-->
  <header class="main-header">
    <div class="top-bar">
        <!-- 1: Logo y Nombre -->
        <div class="ate">
            <img src="img/01_logo.png" alt="logopelo">
            <p class="footer-name">Atenea</p>
        </div>

        <!-- 2: Dirección -->
        <div class="dir">
            <div class="direc">
                <img src="img/marcador-de-posicion.png" alt="pinmap">
                <p class="pdir">Dirección</p>
            </div>
            <p class="psje">Pasaje Pedro Vizcarra #46, Catapilco</p>
        </div>

        <!-- 3: Horarios -->
        <div class="horario">
            <div class="atencion">
                <img src="img/dia-y-noche.png" alt="logo-dia-noche" class="dia-noche">
                <p class="phorario">Horarios de atención</p><br>
            </div>
            <p class="lun-vie">Lunes a viernes de 8:30 a 19:30 hrs.</p>
        </div>

        <!-- 4: Teléfono -->
        <div class="tel">
            <div class="phone">
                <img src="img/telefono.png" alt="icono-telefono">
                <p>Teléfono</p>
            </div>
            <p class="numero">+56 9 5971 0916</p>
        </div>

        <!-- 5: Redes Sociales -->
        <div class="redes">
            <a href="https://www.instagram.com/atenea_tu_nuevo_estilo_"><img src="img/logotipo-de-instagram.png" alt="icono-instagram"></a>
            <a href="https://wa.me/56959710916"><img src="img/whatsapp.png" alt="icono-whatsapp"></a>
        </div>
    </div>

    <navbar class="navbarr">
        <a href="#inicio">Inicio</a>
        <a href="#servicios">Servicios</a>
        <a href="#galeria">Galeria</a>
        <a href="#notici">Noticias</a>
        <a href="#contacto">Contáctanos</a>
    </navbar>
    
    </header>
    <!-- Fin Barra de navegación-->

    <!-- pagina de inicio-->

    <div id="inicio" class="image-container">
        <img src="img/blog_4_original-1.jpg" alt="imagen-principal" class="imagen-principal">
        <div class="text-overlay">
            <h1 class="main-title">Atenea</h1>
            <p class="sub-title">
                Es un emprendimiento dedicado a la reconstrucción capilar y servicios capilares, que busca ofrecer soluciones personalizadas y estéticas para el cabello. Este proyecto tiene como objetivo crear una presencia en línea sólida y atractiva a través de una Landing Page que refleje la elegancia y profesionalismo de los servicios ofrecidos.
            </p>
        </div>
    </div>

    <!-- Fin pagina de inicio-->



    <!-- Continúa añadiendo servicios con la misma estructura -->
    
    
    <div class="servicios" id="servicios">
    <h3 class="prservicios">Servicios y Precios</h3>
    <div class="servicios-container">
        <!-- Cortes -->
        <div class="servicio-card">
            <h4 class="servicio-titulo">Cortes</h4>
            <ul>
                <li>Cortes Dama<span>$17.000</span></li>
                <li>Corte Puntas<span>$10.000</span></li>
                <li>Corte Varón<span>$10.000</span></li>
                <li>Corte Varón y Barba<span>$15.000</span></li>
                <li>Corte Niña y Niño<span>$10.000</span></li>
                <li>Chasquilla<span>$3.500</span></li>
            </ul>
        </div>
        <!-- Brushing -->
        <div class="servicio-card">
            <h4 class="servicio-titulo">Brushing</h4>
            <ul>
                <li>Cabello Corto<span>$10.000</span></li>
                <li>Hasta los Hombros<span>$12.000</span></li>
                <li>Media Espalda<span>$15.000</span></li>
                <li>Hasta la Cintura<span>$18.000</span></li>
                <li>Ondas al Agua o Playeras<span>$18.000</span></li>
                <li>Peinado Fiesta<span>$25.000</span></li>
            </ul>
        </div>
        <!-- Belleza -->
        <div class="servicio-card">
            <h4 class="servicio-titulo">Belleza</h4>
            <ul>
                <li>Ondulado o Lifting de Pestañas Con Tinte<span>$16.900</span></li>
                <li>Ondulado Sin Tinte<span>$14.900</span></li>
                <li>Perfilado de Cejas<span>$5.000</span></li>
                <li>Maquillaje de Cejas Semi Permanente<span>$13.900</span></li>
                <li>Limpieza Facial Profunda<span>$30.900</span></li>
                <li>Limpieza Facial + Ondulado<span>$39.900</span></li>
            </ul>
        </div>
    </div>
</div>


    <!-- Galeria-->

    <div class="galeria-container" id="galeria">
    <p class="pgal">Galería</p>
    <div class="galeria">
        <img src="img/gal1.jpg" class="galerias" alt="Imagen 1">
        <img src="img/gal2.jpg" class="galerias" alt="Imagen 2">
        <img src="img/gal3.jpg" class="galerias" alt="Imagen 3">
        <img src="img/gal4.jpg" class="galerias" alt="Imagen 4">
        <img src="img/gal5.jpg" class="galerias" alt="Imagen 5">
        <img src="img/gal6.jpg" class="galerias" alt="Imagen 6">
        <img src="img/gal7.jpg" class="galerias" alt="Imagen 7">
        <img src="img/gal8.jpg" class="galerias" alt="Imagen 8">
        <img src="img/gal9.jpg" class="galerias" alt="Imagen 9">
        <img src="img/gal10.jpg" class="galerias" alt="Imagen 10">
        <img src="img/gal11.jpg" class="galerias" alt="Imagen 11">
        <img src="img/gal12.jpg" class="galerias" alt="Imagen 12">
    </div>
</div>


<div class="noticias">
    <h2 class="notic" id="notici">Noticias</h2>
    <div class="noticias-container">
        <!-- Noticia 1 -->
        <div class="noticia-card">
            <img src="img/AO3B2DK3DNDEJDLLG7YQD7OVEA.avif" alt="Toallas de secado capilar" class="noticia-img">
            <div class="noticia-content">
                <h3 class="noticia-titulo">Toallas de secado capilar: ¿Por qué tienen tantas fieles?</h3>
                <p class="noticia-texto">
                    Los turbantes capilares de microfibra, bambú o algodón orgánico prometen acelerar el secado, evitar el ‘frizz’ y mantener la hidratación. Expertos analizan todo lo que pueden hacer por tu pelo.
                </p>
            </div>
        </div>

        <!-- Noticia 2 -->
        <div class="noticia-card">
            <img src="img/botoxpelo.avif" alt="Bótox capilar" class="noticia-img">
            <div class="noticia-content">
                <h3 class="noticia-titulo">¿Qué es el bótox capilar y cómo aplicarlo?</h3>
                <p class="noticia-texto">
                    Este tratamiento flash promete dar brillo y volumen mientras mejora la salud del cabello. Expertos aclaran qué es, para qué sirve y cómo usarlo, tanto en un salón profesional como en casa.
                </p>
            </div>
        </div>

        <!-- Noticia 3 -->
        <div class="noticia-card">
            <img src="img/tenacilla.avif" alt="Tenacilla para el pelo" class="noticia-img">
            <div class="noticia-content">
                <h3 class="noticia-titulo">¿Cuál es la mejor tenacilla para el pelo?</h3>
                <p class="noticia-texto">
                    Probamos cuatro tenacillas diferentes y elegimos la que nos ha gustado más.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Contactenos  -->

<div id="contacto" class="contactenos-container">
    <h3 class="titulo-contactenos">Contáctenos</h3>
    <p class="texto-contactenos">Estamos aquí para ti. Escríbenos a través de WhatsApp o visita nuestro Instagram para más información.</p>
    <div class="redes-sociales">
        <!-- Enlace a Instagram -->
        <a href="https://www.instagram.com/atenea_tu_nuevo_estilo_/" target="_blank" class="instagram-link">
        <img src="img/logotipo-de-instagram.png" alt="Instagram">
            @atenea_tu_nuevo_estilo_
        </a>
    </div>
    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/56959710916" class="whatsapp-button" target="_blank" title="Contáctanos por WhatsApp">
    <img src="img/whatsapp.png" alt="WhatsApp">
    </a>
</div>




<!-- Footer  -->

<footer class="main-footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="img/01_logo.png" alt="Logo Atenea">
            <p class="footer-name">Atenea</p>
        </div>
        <div class="footer-links">
            <h4>Navegación</h4>
            <a href="#inicio">Inicio</a>
            <a href="#servicios">Servicios</a>
            <a href="#galeria">Galeria</a>
            <a href="#notici">Noticias</a>
            <a href="#contacto">Contáctanos</a>
        </div>
        <div class="footer-social">
            <h4>Conéctate con nosotros</h4>

            <a href="https://www.instagram.com/atenea_tu_nuevo_estilo_" target="_blank" title="Instagram">
                <img src="img/logotipo-de-instagram.png" alt="Instagram">
            </a>

            <a href="https://wa.me/56959710916" target="_blank" title="WhatsApp">
                <img src="img/whatsapp.png" alt="WhatsApp">
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Peluquería Atenea. Todos los derechos reservados.</p>
    </div>
</footer>



</body>
</html>
