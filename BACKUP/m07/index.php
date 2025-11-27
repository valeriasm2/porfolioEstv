<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo M07 · Entorno Servidor</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body>
    <?php
    $folders = glob(__DIR__ . '/*', GLOB_ONLYDIR) ?: [];

    function clean_name_m07($value)
    {
        return ucwords(str_replace(['_', '-'], ' ', basename($value)));
    }
    ?>
    <div class="layout layout-modulo">
        <header class="modulo-hero">
            <div class="modulo-hero-contenido">
                <p class="eyebrow">M07 · Entorno Servidor</p>
                <h1>Practicar el lado backend</h1>
                <p>
                    Espacio con mini-proyectos y prácticas de PHP orientadas a entender
                    cómo se comporta el servidor antes de entregar HTML.
                </p>
                <ul class="lista-chips">
                    <li>PHP</li>
                    <li>Gestión de datos</li>
                    <li>Templates</li>
                </ul>
            </div>
            <div class="hero-actions">
                <a class="button button--ghost" href="/index.php">Volver al portafolio</a>
            </div>
        </header>

        <main>
            <section class="bloque-recursos">
                <div class="section-heading">
                    <p class="eyebrow">Subcarpetas</p>
                    <h2>Explora el módulo</h2>
                    <p><?php echo count($folders); ?> espacios disponibles.</p>
                </div>

                <div class="rejilla-recursos">
                    <?php foreach ($folders as $folder): ?>
                        <?php
                        $slug = basename($folder);
                        $title = clean_name_m07($slug);
                        ?>
                        <a class="tarjeta-recurso" href="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>">
                            <div>
                                <p class="tarjeta-recurso-etiqueta">Submódulo PHP · Backend</p>
                                <h3><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p>Ejercicios de lógica de servidor, persistencia y plantillas.</p>
                            </div>
                            <span class="tarjeta-recurso-icono" aria-hidden="true">↗</span>
                        </a>
                    <?php endforeach; ?>

                    <?php if (empty($folders)): ?>
                        <p class="estado-vacio">Todavía no hay submódulos disponibles.</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>

        <?php include('../footer.php'); ?>
    </div>
</body>
</html>
