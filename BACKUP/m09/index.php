<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo M09 · Diseño de Interfaces</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body>
    <?php
    $folders = glob(__DIR__ . '/*', GLOB_ONLYDIR) ?: [];

    function clean_name_m09($value)
    {
        return ucwords(str_replace(['_', '-'], ' ', basename($value)));
    }
    ?>
    <div class="layout layout-modulo">
        <header class="modulo-hero">
            <div class="modulo-hero-contenido">
                <p class="eyebrow">M09 · Diseño de Interfaces</p>
                <h1>Interfaces con mimo</h1>
                <p>
                    Recopilo aquí las prácticas donde exploro tipografías, grids,
                    diseño responsivo y accesibilidad aplicada.
                </p>
                <ul class="lista-chips">
                    <li>UI Kits</li>
                    <li>Responsive</li>
                    <li>Accesibilidad</li>
                </ul>
            </div>
            <div class="hero-actions">
                <a class="button button--ghost" href="/index.php">Volver al portafolio</a>
            </div>
        </header>

        <main>
            <section class="bloque-recursos">
                <div class="section-heading">
                    <p class="eyebrow">Proyectos</p>
                    <h2>Carpetas de diseño</h2>
                    <p><?php echo count($folders); ?> entregas activas.</p>
                </div>

                <div class="rejilla-recursos">
                    <?php foreach ($folders as $folder): ?>
                        <?php
                        $slug = basename($folder);
                        $title = clean_name_m09($slug);
                        ?>
                        <a class="tarjeta-recurso" href="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>">
                            <div>
                                <p class="tarjeta-recurso-etiqueta">Proyecto UI</p>
                                <h3><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p>Práctica enfocada a diseño, maquetación o accesibilidad.</p>
                            </div>
                            <span class="tarjeta-recurso-icono" aria-hidden="true">↗</span>
                        </a>
                    <?php endforeach; ?>

                    <?php if (empty($folders)): ?>
                        <p class="estado-vacio">Todavía no hay proyectos listados.</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>

        <?php include('../footer.php'); ?>
    </div>
</body>
</html>
