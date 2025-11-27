<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo Dual</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>
<body>
    <?php
    $dualLinks = [
        [
            'href' => 'https://vsantanamegia.ieti.site/wordpress/',
            'title' => 'Sitio WordPress',
            'detalle' => 'Instalación y personalización real en servidor del centro.'
        ]
    ];
    ?>
    <div class="layout layout-modulo">
        <header class="modulo-hero">
            <div class="modulo-hero-contenido">
                <p class="eyebrow">Programa Dual</p>
                <h1>Aprender mientras desplegamos</h1>
                <p>
                    Comparto los proyectos realizados en colaboración con la empresa,
                    aplicando lo visto en clase a entornos reales.
                </p>
                <ul class="lista-chips">
                    <li>WordPress</li>
                    <li>Soporte real</li>
                    <li>Equipo multidisciplinar</li>
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
                    <h2>Entregas Dual</h2>
                    <p>Recursos activados en el servidor corporativo.</p>
                </div>

                <div class="rejilla-recursos">
                    <?php foreach ($dualLinks as $item): ?>
                        <a class="tarjeta-recurso" href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">
                            <div>
                                <p class="tarjeta-recurso-etiqueta">Proyecto Dual</p>
                                <h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p><?php echo htmlspecialchars($item['detalle'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                            <span class="tarjeta-recurso-icono" aria-hidden="true">↗</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
        </main>

        <?php include('../footer.php'); ?>
    </div>
</body>
</html>
