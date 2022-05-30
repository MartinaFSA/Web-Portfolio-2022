<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("components/head.php"); ?>
        <title>Portfolio - Martina Fernández Suárez</title>
        <link rel="stylesheet" href="styles/projects.css">
    </head>

    <body>
        <?php include("components/header.php"); ?>

        <main>
            <div id="overlayForMenu"></div>
        
            <!--PÁGINAS-->
            <section id="webs">

                <p class="sectionTitlePortfolio textoGrande">Páginas Web</p>
                <!--La página 2 es la primera en mostrarse-->
                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page2_preview.JPG" alt="" class="previews">
                        </div>
                        
                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina2--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">Recetario</p>
                        <p class="descripcionProyecto textoChico">Esta página es un proyecto personal realizado para ordenar mis recetas favoritas. La página contiene una sección de recetas guardadas a la que se accede iniciando sesión. Mirá la demo <a href="proyectos/recetario/demoRecetario.php">acá.</a> </p>
                            <p class="textoChico"><b>Tecnologías utilizadas: </b>HTML, CSS, JS, SQL y PHP</p>
                        <p class="textoChico">Podés acceder al código de la página <a href="https://github.com/MartinaFSA/Recetario-PHP" itemprop="url" target="_blank">en GitHub</a></p>
                    </div>
                </article>
                        
                <article class="filaFlex fade-in">
                    
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>
        
                        <div class="imagen__PresentacionPagina" >
                            <img src="img/paginas/portfolio_page1_preview.png" alt="" class="previews">
                        </div>
        
                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina1--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>
        
                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">Avatar Generator</p>
                        <p class="descripcionProyecto textoChico">Esta aplicación web es un generador de avatares personalizados. Los usuarios pueden seleccionar el color de piel, ojos y labios del personaje, su peinado y el fondo o seleccionar rasgos al azar. Los personajes pueden ser descargados en formato PNG con un solo click. Mira la demo <a href="proyectos/Avatar_Generator/demoAvatar.php">acá</a>.</p>
                        <p class="textoChico"><b>Tecnologías utilizadas: </b> HTML, CSS, JS y React.</p>
                        <p class="textoChico">Podés acceder al repositorio de este proyecto en <a href="https://github.com/MartinaFSA/Avatar_Generator"  itemprop="url" target="_blank">este link </a>de Github o usar la página  <a href="https://martinafsa.github.io/Avatar_Generator/"  itemprop="url" target="_blank">acá</a>.</p>
                    </div>
                </article>

                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page3_preview.JPG" alt="" class="previews">
                        </div>

                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina3--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">Copia de Mercado Libre (en proceso)</p>
                        <p class="descripcionProyecto textoChico">Maquetado frontend de la página de Mercado Libre hecho a partir de la página oficial de argentina.</p>
                        <p class="textoChico"><b>Tecnologías utilizadas: HTML, CSS, Bootstrap, JS y PHP.</b></p>
                        <p class="textoChico">Podés acceder a esta página <a href="proyectos/mercadoLibre/index" target="_blank">acá.</a></p>
                    </div>
                </article>

                <!-- <article class="filaFlex fade-in">
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page4_preview.JPG" alt="" class="previews">
                        </div>

                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina4--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">XXXXX XXXXXXX</p>
                        <p class="descripcionProyecto textoChico">XXXXXXXXX XXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXX XXXXXXXXXXX XXXXXXXXXXXXX XXXX XXXXXX XXXXX XXXXXXXX.</p>
                        <p class="textoChico"><b>Tecnologías utilizadas: </b></p>
                        <p class="textoChico">Podés acceder a esta página en: <a href=""  itemprop="url" target="_blank">XXXXXXXXXXXXXX.com.ar</a></p>
                    </div>
                </article> -->
            </section>

            <!--MODALES-->
            <article class="modal" id="modalDePagina1">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">Avatar Generator</p>
                        <button class="close-modal" id="close-modal1"> ✕ </button>
                    </div>
    
                    <section class="modal__body"> 
    
                        <div class="modal__body-columna1">
                            <img src="img/paginas/primeraPagina__completa.PNG" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>
    
                        <div class="modal__body-columna2">
                            <img src="img/paginas/primeraPagina__destacable1.png" alt="" class="destacable1">
                        </div>
                    </section>
                </div>
            </article>

            <article class="modal" id="modalDePagina2">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">Recetario</p>
                        <button class="close-modal" id="close-modal2"> ✕ </button>
                    </div>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="img/paginas/segundaPagina__completa.png" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="img/paginas/segundaPagina__destacable1.JPG" alt="Menú desplegable" class="destacable1">
                            <img src="img/paginas/segundaPagina__destacable2.JPG" alt="Ventana modal de inicio de sesión" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>
            
            <article class="modal" id="modalDePagina3">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">Copia de Mercado Libre</p>
                        <button class="close-modal" id="close-modal3"> ✕ </button>
                    </div>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="img/paginas/terceraPagina__completa.PNG" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>
                    </section>
                </div>
            </article>

        <!--
            <article class="modal" id="modalDePagina4">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">pag4</p>
                        <button class="close-modal" id="close-modal4"> ✕ </button>
                    </div>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="img/paginas/cuartaPagina__completa.PNG" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="img/paginas/cuartaPagina__destacable1.JPG" alt="" class="destacable1">
                            <img src="img/paginas/cuartaPagina__destacable2.JPG" alt="" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>
        -->

            <!--DISEÑOS-->

            <!--
            <section id="diseño">

                <p class="sectionTitlePortfolio textoGrande">Diseño</p>

                <div id="ctn__diseños" class="fade-in">
                    <div class="item1 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item2 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item3 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item4 diseño_item">
                        <img src="" alt="">
                    </div>
                    
                    <div class="item5 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item6 diseño_item">
                        <img src="" alt="">
                    </div>
                    
                    <div class="item7 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item8 diseño_item">
                        <img src="" alt="">
                    </div>
                    
                    <div class="item9 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item10 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item11 diseño_item">
                        <img src="" alt="">
                    </div>

                </div>

            </section>-->
        <?php include("components/contact_footer.php"); ?>
    </body>
</html>