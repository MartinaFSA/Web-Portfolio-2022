<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("components/head.php"); ?>
        <title>Proyectos - Martina Fernández Suárez</title>
        <link rel="stylesheet" href="styles/projects.css">
    </head>

    <body>
        <?php include("components/header.php"); ?>

        <main>
            <div id="overlayForMenu"></div>
        
            <!--PÁGINAS-->
            <section id="webs">
                <p>Proyectos</p>
                <article class="ctn_project">
                    <div class="project_ctn-image" onmouseover="mostrarOverlay(this)" onmouseleave="esconderOverlay(this)">
                        <div>
                            <img src="img/paginas/portfolio_page2_preview.JPG" alt="Landing page del recetario" class="previews">
                        </div>
                        <div class="overlay_projectImg" style="display: none;">
                            <div>
                                <a href="proyectos/recetario/demoRecetario.php">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <div class="ctn_project_texts">
                        <p class="title">Recetario</p>
                        <p>Recetario web que cuenta con un sistema de registro, inicio de sesión y guardado de recetas. La subida de recetas se realiza a través de una base de datos que permite al usuario realizar búsquedas dentro de la página. 
                            <a href="proyectos/recetario/demoRecetario.php">Ver más.</a> </p>
                        <p><b>Desarrollado con:</b> HTML, CSS, JS, MySQL y PHP</p>
                        <div>
                            <a href="https://github.com/MartinaFSA/Recetario-PHP" itemprop="url" target="_blank"><img src="img/github.svg" alt="Link de GitHub"></a>
                        </div>
                    </div>
                </article>
                        
                <article class="ctn_project fadeInBottom">
                    <div class="project_ctn-image" onmouseover="mostrarOverlay(this)" onmouseleave="esconderOverlay(this)">
                        <div>
                            <img src="img/paginas/portfolio_page1_preview.png" alt="Landing page del Avatar Generator" class="previews">
                        </div>
                        <div class="overlay_projectImg" style="display: none;">
                            <div>
                                <a href="proyectos/Avatar_Generator/demoAvatar.php">Ver más</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="ctn_project_texts">
                        <p class="title">Avatar Generator</p>
                        <p>Esta aplicación web es un generador de avatares personalizados. Los usuarios pueden seleccionar el color de piel, ojos y labios del personaje, su peinado y el fondo o seleccionar rasgos al azar. Los personajes pueden ser descargados en formato PNG con un solo click. 
                            <a href="proyectos/Avatar_Generator/demoAvatar.php">Ver más</a>.</p>
                        <p><b>Desarrollado con:</b> HTML, CSS, JS y React. Adicional: html2canvas.</p>
                        <div>
                            <a href="https://github.com/MartinaFSA/Avatar_Generator" itemprop="url" target="_blank"><img src="img/github.svg" alt="Link de GitHub"></a>
                            <a href="https://martinafsa.github.io/Avatar_Generator/" itemprop="url" target="_blank"><img src="img/external-link.svg"></a>
                        </div>
                    </div>
                </article>

                <article class="ctn_project fadeInBottom">
                
                    <div class="project_ctn-image" onmouseover="mostrarOverlay(this)" onmouseleave="esconderOverlay(this)">
                        <div>
                            <img src="img/paginas/portfolio_page3_preview.JPG" alt="" class="previews">
                        </div>
                        <div class="overlay_projectImg" style="display: none;">
                            <div>
                                <a href="proyectos/mercadoLibre/index.php">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <div class="ctn_project_texts">
                        <p class="title">Copia de Mercado Libre (en proceso)</p>
                        <p>Maquetado Front-End de la página de inicio de Mercado Libre Argentina.</p>
                        <p><b>Desarrollado con:</b> HTML, CSS, Bootstrap, JS y PHP. Adicional: Swiper.</p>
                        <div>
                            <a href="proyectos/mercadoLibre/index.php" itemprop="url" target="_blank"><img src="img/external-link.svg"></a>
                        </div>
                    </div>
                </article>
            </section>
            <?php include("components/contact_footer.php"); ?>
            <script src="scripts/projects.js"></script>

    </body>
</html>