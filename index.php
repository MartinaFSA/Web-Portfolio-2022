<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("components/head.php"); ?>
    <link rel="stylesheet" href="styles/home.css">
    <title>Martina Fernández Suárez</title>
  </head>
  <body>
        <?php include("components/header.php"); ?>
        <main>
            <div id="overlayForMenu"></div>
            <!--Título-->
            <section>
                <article id="ctn_language"> 
                </article>
                <article class="column_centerCenter">
                    <p>Martina Fernández Suárez</p>
                    <p>Desarrolladora Web Full-Stack</p>
                    <a href="#ctn_sobreMi">Sobre Mí
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 24" fill="none" stroke="#8FAE94" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                </article>
            </section>

            <!--Curly bracket--><img src="img/curly-braces.svg" id="bkg_braces" alt="">
            <!--Sobre mí-->
            <section class="text_center fadeInBottom" id="ctn_sobreMi">
                <article>
                    <p class="title">Sobre mí</p>
                    <div>
                        <p>Desarrolladora web especializada en Front-End. Poseo la capacidad de aprender de forma rápida y adaptativa, la cual me permite acomplarme a distintos desafíos. Me definen el ser colaborativa, organizada, creativa y positiva. Disfruto trabajar en equipo y utilizar tecnologías modernas para realizar productos que resistan el paso del tiempo.</p>
                    </div>
                </article>
                <img src="img/index/sittingPC.svg" alt=""> 
            </section>

            <!--Habilidades-->
            <section class="fadeInBottom">
                <!--Numeral--><img src="img/hashtag.svg" id="bkg_hashtag" alt="">

                <article id="habilidadesCertificaciones">
                    <p class="title">Habilidades y certificaciones</p>
                    <section id="ctn_habilities">
                        <article>
                            <div class="hability_btn">
                                <div id="webDev_div" class="hability_btn_div"></div>
                                <button id="webDev" class="hability_btn_btn">Desarrollo Web</button>
                            </div>
                            <div class="hability_btn">
                                <div id="design_div" class="hability_btn_div"></div>
                                <button id="design" class="hability_btn_btn">Diseño</button>
                            </div>
                            <div class="hability_btn">
                                <div id="english_div" class="hability_btn_div"></div>
                                <button id="english" class="hability_btn_btn">Idiomas</button>
                            </div>
                        </article>
                        <article id="hability_habilities">
                            <div id="hability_webDev">
                                <p class="hability_subtitle">Desarrollo Web</p>
                                <div class="hability_course">
                                    <p>Desarrollo Web Front-End</p>
                                    <p>- HTML, CSS, SCSS, Bootstrap, JS, React, Vue</p>
                                </div>
                                <div class="hability_course">
                                    <p>Desarrollo Web Back-End</p>
                                    <p>- PHP, MySQL</p>
                                </div>
                                <div class="hability_course">
                                    <p>Otros</p>
                                    <p>- GIT, Firebase</p>
                                </div>
                            </div>
                            <div id="hability_design">
                                <p class="hability_subtitle">Diseño</p>
                                <div class="hability_course">
                                    <p>Diseño de Interfaz de Usuario y Experiencia de Usuario (UX/UI)</p>
                                    <p>- Benchmarking, MVP, arquitectura de la información, user flow, wireframing y prototipado funcional, métricas, guidelines.</p>
                                </div>
                                <div class="hability_course">
                                    <p>Diseño Gráfico</p>
                                    <p>- Imágenes para redes sociales y diseños para imprenta.</p>
                                </div>
                            </div>
                            <div id="hability_english">
                                <p class="hability_subtitle">Idiomas</p>
                                <div class="hability_course">
                                    <p>Inglés</p>
                                    <p>- Competencia Profesional, nivel C1+</p>
                                </div>
                                <div class="hability_course">
                                    <p>Español</p>
                                    <p>- Nativo</p>
                                </div>
                            </div>
                        </article>
                    </section>
                </article>
            </section>

            <!--Experiencia-->
            <section class="fadeInBottom" id="ctn_expLaboral">
                <!--Lightbulb--><img src="img/lightbulb.svg" alt="" id="bkg_lightbulb" >
                <article class="text_center horizontalCenter">
                    <p class="title">Experiencia laboral</p>
                    <div class="expLaboral">
                        <p class="hability_subtitle">Accenture</p>
                        <div class="workExpierence-tasks">
                            <p>Application Development Associate</p>
                            <p>- Análisis de problemas programáticos
                            <br>- Desarrollo de features
                            <br>- Solución de bugs
                            <br>- Manejo de: Angular, Vue y JS
                            </p>
                        </div>
                        <div class="workExpierence-tasks">
                            <p>Contractor</p>
                            <p>- Mejoras de accesibilidad web
                            <br>- Solución de bugs
                            <br>- Manejo de: CSS, HTML, WordPress
                            </p>
                        </div>
                    </div>
                </article>
                <!--Estrella--><img src="img/" alt=""> 
            </section>
            <?php include("components/contact_footer.php"); ?>
            <script src="scripts/homeScript.js"></script>
    </body>
</html>