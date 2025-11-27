<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo M09</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body class="nubes-info">

    <header>
        <div class="card-presentacion">
            <h1>Diseño de Interficies Web</h1>
            <p>Selecciona el proyecto que quieras abrir:</p>
        </div>
    </header>

    <main>
        <section class="quick-access">
            <div class="button-container">
                <?php
                $dirActual = __DIR__;
                $items = scandir($dirActual);

                foreach ($items as $item) {
                    if ($item === '.' || $item === '..') continue;
                    $rutaCompleta = $dirActual . '/' . $item;
                    
                    if (is_file($rutaCompleta) && in_array(pathinfo($item, PATHINFO_EXTENSION), ['html','php'])) {
                        $nombre = pathinfo($item, PATHINFO_FILENAME);
                        if (strtolower($item) === 'index.php') continue;
                        echo "<a class='button' href='$item'>$nombre</a>\n";
                    }

                    if (is_dir($rutaCompleta)) {
                        echo "<a class='button folder-button' href='$item'>$item/</a>\n";
                    }
                }
                ?>
            </div>
            <div class="back-button-container">
                <a href="/index.php" class="button" aria-label="Acceso al Portafolio">Volver al Portafolio</a>
            </div>
        </section>
    </main>

    <?php include('../footer.php'); ?>

</body>
</html>
