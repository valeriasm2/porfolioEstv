<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo MDual</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body>

    <header>
        <div class="card-presentacion">
            <h1>Módulo Dual</h1>
            <p>Selecciona el submódulo que quieras abrir:</p>
        </div>
    </header>

    <!-- Botones de acceso a subcarpetas -->
    <main>
        <section class="quick-access">
            <div class="button-container">
                <a href="https://vsantanamegia.ieti.site/wordpress/" class="button" aria-label="Acceso a WordPress">WordPress</a>
            </div>

            <!-- Botón debajo -->
            <div class="back-button-container">
                <a href="/index.php" class="button" aria-label="Acceso al Portafolio">Volver al Portafolio</a>
            </div>
        </section>
    </main>


    <!-- Footer -->
    <?php include('../footer.php'); ?>

</body>
</html>
