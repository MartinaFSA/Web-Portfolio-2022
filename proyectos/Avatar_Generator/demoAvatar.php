<!DOCTYPE html>
<html lang="es">

    <head>
        <?php
            include("../../components/head.php");
        ?>
        <title>Avatar Generator - Martina Fernández Suárez</title>
        <link rel="stylesheet" href="../../styles/estilosDemo.css">
    </head>

    <body>
        <?php include("../../components/header_demoPages.php"); ?>
        <main>
            <div id="overlayForMenu"></div>
            <section>
                <article id="about">
                    <p class="title">Avatar Generator</p>
                    <p>Esta aplicación web es un generador de avatares personalizados. Los usuarios pueden seleccionar el color de piel, ojos y labios del personaje, su peinado y el fondo o seleccionar rasgos al azar. Los personajes pueden ser descargados gracias a la integración de html2canvas. El proyecto fue realizado con HTML, CSS, JavaScript y React.</p>
                    <p><a href="https://martinafsa.github.io/Avatar_Generator/" itemprop="url" target="_blank"><img src="../../img/external-link.svg" alt="Link a la página donde está subido el proyecto">Crear un avatar.</a></p>
                    <p><a href="https://github.com/MartinaFSA/Avatar_Generator"><img src="../../img/github.svg" alt="Link de GitHub">Ir al repositorio de GitHub.</p></a>
                </article>
                <article id="index">
                    <p>Página de Inicio</p>
                    <img src="../../img/paginas/primeraPagina__completa.png" alt="Captura completa de la página de inicio">
                </article>
                <article id="demo">
                    <p>Video de demostración</p>
                    <video src="demoAvatar.mp4" controls></video>
                </article>
                <article id="adittionalImg">
                    <p>Personaje descargado</p>
                    <img src="a.png"></img>
                </article>
            </section>
        <?php
            include("../../components/contact_footer_demoPages.php");
        ?>
    </body>
</html>