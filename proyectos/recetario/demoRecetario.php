<!DOCTYPE html>
<html lang="es">

    <head>
        <?php
            include("../../components/head.php");
        ?>
        <title>Recetario - Martina Fernández Suárez</title>
        <link rel="stylesheet" href="../../styles/estilosDemo.css">
    </head>

    <body>
        <?php include("../../components/header_demoPages.php"); ?>
        <main>
            <div id="overlayForMenu"></div>
            <section>
                <article id="about">
                    <p class="title">Recetario</p>
                    <p>Este proyecto fue realizado con el fin de agrupar y organizar mis recetas favoritas. La misma cuenta con un sistema de registro, inicio de sesión y guardado de recetas. La subida de recetas se realiza a través de una base de datos que permite al usuario realizar búsquedas dentro de la página.</p>
                    <p>Fue realizado con HTML, CSS, JavaScript, PHP y MySQL.</p>
                    <p><a href="https://github.com/MartinaFSA/Recetario-PHP"><img src="../../img/github.svg" alt="Link de GitHub">Ir al repositorio de GitHub.</p></a>
                </article>
                <article id="index">
                    <p>Página de Inicio</p>
                    <img src="../../img/paginas/segundaPagina__completa.png" alt="Captura completa de la página de inicio">
                </article>
                <!--<article id="demo">
                    <p>Video de demostración</p>
                    <video src="" controls></video>
                </article> -->
            </section>
            
            <!--<section id="ctn_paletaDeColores">
                    <div id="paletaDeColores">
                        <div style="background-color: #fafafa;"></div>
                        <div style="background-color: rgba(121, 143, 129, 1);"></div>
                        <div style="background-color: rgba(64, 91, 72, 1);"></div>
                        <div style="background-color: #353535;"></div>
                    </div>
                    <p class="textoChico ">Paleta de colores</p>
                <article id="ctn_favicon">
                    <img src="logoConFondo.svg" alt="Logo del recetario">
                    <p class="textoChico ">FavIcon</p>
                </article>
            </section> -->
        
        <?php
            include("../../components/contact_footer_demoPages.php");
        ?>
    </body>
</html>