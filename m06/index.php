<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo M06</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body>

    <header>
        <div class="card-presentacion">
            <h1>Entorno Cliente</h1>
            <p>Selecciona el proyecto que quieras abrir:</p>
        </div>
    </header>

    <main>
        <section class="quick-access">
            <div class="button-container">
                <?php
                // Listar archivos HTML de Programas_Basicos
                $carpetaBasicos = __DIR__ . "/Programas_Basicos";
                
                if (is_dir($carpetaBasicos)) {
                    $archivos = scandir($carpetaBasicos);
                    
                    foreach ($archivos as $archivo) {
                        if (pathinfo($archivo, PATHINFO_EXTENSION) === 'html') {
                            $nombre = pathinfo($archivo, PATHINFO_FILENAME);
                            echo "<a class='button' href='Programas_Basicos/$archivo'>$nombre</a>\n";
                        }
                    }
                }
                
                // Listar otras carpetas (excluyendo Programas_Basicos)
                $items = scandir(__DIR__);
                
                foreach ($items as $item) {
                    $rutaCompleta = __DIR__ . '/' . $item;
                    if ($item !== '.' && $item !== '..' && trim($item) !== 'Programas_Basicos' && is_dir($rutaCompleta)) {
                        echo "<a class='button folder-button' href='$item'>$item</a>\n";
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
