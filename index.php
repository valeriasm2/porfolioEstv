<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles.css?<?php echo time(); ?>">
    <title>El meu Portafoli</title>

</head>

<body>
    <!-- Video de fondo 
    <video autoplay muted loop playsinline id="video-fondo">
        <source src="imagenes/videoAMongo.mp4" type="video/mp4">
        Tu navegador no soporta videos.
    </video>
    -->

 <!-- Contenedor principal -->
    <header>
        <!-- Contenedor de la tarjeta -->
        <div class="foto-perfil">            
            <img src="imagenes/bichoROSA.jpg" alt="Imagen de Valeria Santana">
        </div>

        <div class="card-presentacion">
            <h1> Valeria Santana </h1>
            <p>
                Bienvenid@ a mi portafolio. 
                Aquí encontrarás los diferentes módulos y proyectos que he desarrollado a lo largo de mi formación en desarrollo web.
            </p>
        </div>
   </header>

    <main>
        <section class="quick-access">
            <h1>Accesos rápidos</h1>
            <div class="button-container">
                <a href="/m08/" class="button" aria-label="Acceso al Módulo M08">M08 - Despliegue de Aplicaciones Web</a>
                <a href="/m09/" class="button" aria-label="Acceso al Módulo M09">M09 - Diseño de Interfaces Web</a>
                <a href="/m06/" class="button" aria-label="Acceso al Módulo M06">M06 - Entorno Cliente</a>
                <a href="/m07/" class="button" aria-label="Acceso al Módulo M07">M07 - Entorno Servidor</a>
                <a href="/mDUAL/" class="button" aria-label="Acceso al Módulo MDUAL">Módulo DUAL</a>
                <a href="https://ssvaleria.github.io/index.html" class="button" aria-label="Acceso a GitHub Pages">Porfolio Personal</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

</body>
</html>
