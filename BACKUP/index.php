<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles.css?<?php echo time(); ?>">
    <title>El meu Portafoli</title>
</head>

<body>
    <div class="layout">
        <header class="hero">
            <div class="hero-media">
                <div class="foto-perfil">
                    <img src="imagenes/bichoROSA.jpg" alt="Imagen de Valeria Santana">
                </div>
                <ul class="hero-badges">
                    <li>Front-end lover</li>
                    <li>UX focus</li>
                    <li>Team player</li>
                </ul>
            </div>

            <div class="card-presentacion">
                <p class="eyebrow">Hola, soy</p>
                <h1>Valeria Santana</h1>
                <p>
                    Bienvenid@ a mi portafolio. Aquí encontrarás los proyectos y módulos
                    que estoy construyendo mientras descubro cómo combinar diseño y
                    desarrollo para crear experiencias bonitas y funcionales.
                </p>
                <div class="hero-stats">
                    <article>
                        <span>Stack</span>
                        <p>HTML, CSS, JS · PHP · Python/Django</p>
                    </article>
                    <article>
                        <span>Objetivo</span>
                        <p>Interfaces dulces pero profesionales</p>
                    </article>
                </div>
            </div>
        </header>

        <main>
            <section class="quick-access">
                <div class="section-heading">
                    <p class="eyebrow">Navegación</p>
                    <h2>Accesos rápidos</h2>
                </div>
                <div class="button-container">
                    <a href="/m08/" class="button" aria-label="Acceso al Módulo M08">M08 · Despliegue</a>
                    <a href="/m09/" class="button" aria-label="Acceso al Módulo M09">M09 · Interfaces</a>
                    <a href="/m06/" class="button" aria-label="Acceso al Módulo M06">M06 · Cliente</a>
                    <a href="/m07/" class="button" aria-label="Acceso al Módulo M07">M07 · Servidor</a>
                    <a href="/mDUAL/" class="button" aria-label="Acceso al Módulo MDUAL">Módulo Dual</a>
                    <a href="https://ssvaleria.github.io/index.html" class="button" aria-label="Acceso a GitHub Pages" target="_blank" rel="noopener noreferrer">
                        Portfolio Personal
                    </a>
                </div>
            </section>

            <section class="module-showcase">
                <div class="section-heading">
                    <p class="eyebrow">Enfoque</p>
                    <h2>¿Qué encontrarás?</h2>
                    <p>Un resumen rápido de mis módulos favoritos, con lo que más me motivó de cada uno.</p>
                </div>
                <div class="module-grid">
                    <article class="module-card">
                        <div>
                            <p class="module-card-tag">Interfaz</p>
                            <h3>M09 · Diseño de Interfaces</h3>
                            <p>Patrones responsive, prototipado y la parte más estética de todos los módulos.</p>
                        </div>
                        <a class="ghost-link" href="/m09/">
                            Ver módulo <span aria-hidden="true">↗</span>
                        </a>
                    </article>
                    <article class="module-card">
                        <div>
                            <p class="module-card-tag">Back + DevOps</p>
                            <h3>M08 · Despliegue</h3>
                            <p>Automatización y despliegues para que lo bonito también funcione en producción.</p>
                        </div>
                        <a class="ghost-link" href="/m08/">
                            Ver módulo <span aria-hidden="true">↗</span>
                        </a>
                    </article>
                    <article class="module-card">
                        <div>
                            <p class="module-card-tag">Fullstack</p>
                            <h3>M06 · Cliente</h3>
                            <p>Experimentos con JavaScript, animaciones y lógica en el navegador.</p>
                        </div>
                        <a class="ghost-link" href="/m06/">
                            Ver módulo <span aria-hidden="true">↗</span>
                        </a>
                    </article>
                    <article class="module-card">
                        <div>
                            <p class="module-card-tag">Servidor</p>
                            <h3>M07 · Servidor</h3>
                            <p>PHP, bases de datos y APIs para cerrar el ciclo completo de desarrollo.</p>
                        </div>
                        <a class="ghost-link" href="/m07/">
                            Ver módulo <span aria-hidden="true">↗</span>
                        </a>
                    </article>
                </div>
            </section>

            <section class="skills">
                <div class="section-heading">
                    <p class="eyebrow">Toolkit</p>
                    <h2>Skills y cositas que uso</h2>
                </div>
                <ul class="skill-tags">
                    <li>HTML + CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Django</li>
                    <li>Git & GitHub</li>
                    <li>Figma básico</li>
                    <li>Accesibilidad</li>
                </ul>
            </section>
        </main>

        <?php include('footer.php'); ?>
    </div>
</body>
</html>
