<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo M06 · Entorno Cliente</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body>
    <?php
    function clean_name_m06($value)
    {
        return ucwords(str_replace(['_', '-'], ' ', pathinfo($value, PATHINFO_FILENAME)));
    }

    $basicFiles = glob(__DIR__ . '/Programas_Basicos/*.html') ?: [];
    $folders = array_filter(glob(__DIR__ . '/*', GLOB_ONLYDIR) ?: [], function ($dir) {
        return basename($dir) !== 'Programas_Basicos';
    });

    sort($basicFiles);
    sort($folders);

    $totalItems = count($basicFiles) + count($folders);
    ?>
    <div class="layout layout-modulo">
        <header class="modulo-hero">
            <div class="modulo-hero-contenido">
                <p class="eyebrow">M06 · Entorno Cliente</p>
                <h1>Experimentos y ejercicios front</h1>
                <p>
                    Colección de prácticas con HTML, CSS y JavaScript
                    para entender el lado interactivo del navegador.
                </p>
                <ul class="lista-chips">
                    <li>DOM & eventos</li>
                    <li>Microproyectos JS</li>
                    <li>Buenas prácticas UI</li>
                </ul>
            </div>
            <div class="hero-actions">
                <a class="button button--ghost" href="/index.php">Volver al portafolio</a>
            </div>
        </header>

        <main>
            <section class="bloque-recursos">
                <div class="section-heading">
                    <p class="eyebrow">Listado</p>
                    <h2>Entradas disponibles</h2>
                    <p><?php echo $totalItems; ?> recursos listos para abrir.</p>
                </div>

                <div class="rejilla-recursos">
                    <?php foreach ($basicFiles as $file): ?>
                        <?php
                        $name = basename($file);
                        $title = clean_name_m06($name);
                        ?>
                        <a class="tarjeta-recurso" href="<?php echo htmlspecialchars('Programas_Basicos/' . $name, ENT_QUOTES, 'UTF-8'); ?>">
                            <div>
                                <p class="tarjeta-recurso-etiqueta">Programa básico</p>
                                <h3><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p>Ejercicio rápido con HTML, CSS y algo de JS.</p>
                            </div>
                            <span class="tarjeta-recurso-icono" aria-hidden="true">↗</span>
                        </a>
                    <?php endforeach; ?>

                    <?php foreach ($folders as $folder): ?>
                        <?php
                        $slug = basename($folder);
                        $title = clean_name_m06($slug);
                        ?>
                        <a class="tarjeta-recurso" href="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>">
                            <div>
                                <p class="tarjeta-recurso-etiqueta">Carpeta del módulo</p>
                                <h3><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p>Colección de recursos y entregas de <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>.</p>
                            </div>
                            <span class="tarjeta-recurso-icono" aria-hidden="true">↗</span>
                        </a>
                    <?php endforeach; ?>

                    <?php if ($totalItems === 0): ?>
                        <p class="estado-vacio">Todavía no hay entregas subidas aquí.</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>

        <?php include('../footer.php'); ?>
    </div>
</body>
</html>