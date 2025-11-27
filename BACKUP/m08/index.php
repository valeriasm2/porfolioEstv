<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo M08 · Despliegue</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body>
    <?php
    $folders = glob(__DIR__ . '/*', GLOB_ONLYDIR) ?: [];

    function clean_name_m08($value)
    {
        return ucwords(str_replace(['_', '-'], ' ', basename($value)));
    }
    ?>
    <div class="layout layout-modulo">
        <header class="modulo-hero">
            <div class="modulo-hero-contenido">
                <p class="eyebrow">M08 · Despliegue de Aplicaciones</p>
                <h1>Servidores, automatización y entornos</h1>
                <p>
                    Aquí recopilo las prácticas relacionadas con preparar un proyecto web
                    para producción: servidores, dominios, CI/CD y documentación.
                </p>
                <ul class="lista-chips">
                    <li>Infraestructura</li>
                    <li>Automatización</li>
                    <li>Documentación</li>
                </ul>
            </div>
            <div class="hero-actions">
                <a class="button button--ghost" href="/index.php">Volver al portafolio</a>
            </div>
        </header>

        <main>
            <section class="bloque-recursos">
                <div class="section-heading">
                    <p class="eyebrow">Contenido</p>
                    <h2>Carpetas disponibles</h2>
                    <p><?php echo count($folders); ?> espacios listos para explorar.</p>
                </div>

                <div class="rejilla-recursos">
                    <?php foreach ($folders as $folder): ?>
                        <?php
                        $slug = basename($folder);
                        $title = clean_name_m08($slug);
                        ?>
                        <a class="tarjeta-recurso" href="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>">
                            <div>
                                <p class="tarjeta-recurso-etiqueta">Carpeta / proyecto</p>
                                <h3><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p>Entregas y pruebas de despliegue para <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>.</p>
                            </div>
                            <span class="tarjeta-recurso-icono" aria-hidden="true">↗</span>
                        </a>
                    <?php endforeach; ?>

                    <?php if (empty($folders)): ?>
                        <p class="estado-vacio">Todavía no hay proyectos desplegados aquí.</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>

        <?php include('../footer.php'); ?>
    </div>
</body>
</html>
