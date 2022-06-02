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

            <!--Braces--><img src="img/curly-braces.svg" id="bkg_braces" alt="">
            <!--Sobre mí-->
            <section class="text_center fadeInBottom" id="ctn_sobreMi">
                <article>
                    <p class="title">Sobre mí</p>
                    <div>
                        <p>
                            Desarolladora Full-Stack y estudiante de Diseño Gráfico. Me interesa la tecnología, el diseño y la programación.
                        </p>
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
                                <button id="english" class="hability_btn_btn">Inglés</button>
                            </div>
                        </article>
                        <article id="hability_habilities">
                            <div id="hability_webDev">
                                <p class="hability_subtitle">Desarrollo Web</p>
                                <div class="hability_course">
                                    <p>React Fullstack en Codo a Codo</p>
                                    <p>- JS, React, FireBase</p>
                                </div>
                                <div class="hability_course">
                                    <p>Argentina Programa - Primera Etapa</p>
                                    <p>- Programación imperativa y programación con objetos</p>
                                </div>
                                <div class="hability_course">
                                    <p>PHP Fullstack en Codo a Codo</p>
                                    <p>- HTML, CSS, JS, GIT, SQL y PHP</p>
                                </div>
                                <div class="hability_course">
                                    <p>Desarrollo Web en Aprende Programando</p>
                                    <p>- HTML, CSS y Bootstrap</p>
                                </div>
                            </div>
                            <div id="hability_design">
                                <p class="hability_subtitle">Diseño</p>
                                <div class="hability_course">
                                    <p>UX/UI en Codo a Codo</p>
                                    <p>- Benchmarking, MVP, arquitectura de la información, user flow, wireframing y prototipado funcional, métricas, guidelines.</p>
                                </div>
                                <div class="hability_course">
                                    <p>Figma</p>
                                </div>
                            </div>
                            <div id="hability_english">
                                <p class="hability_subtitle">Inglés</p>
                                <div class="hability_course">
                                    <p>Certificado de aprobación de Inglés en Bachillerato Internacional</p>
                                    <p>- Noviembre de 2020</p>
                                </div>
                                <div class="hability_course">
                                    <p>Ciclo de Idiomas Extendido del CLE</p>
                                    <p>- Noviembre de 2019</p>
                                </div>
                                <div class="hability_course">
                                    <p>CECIE</p>
                                    <p>- Enero de 2012 a Diciembre de 2018</p>
                                </div>
                            </div>
                        </article>
                    </section>
                </article>
                <!--Estrella--><img src="img/" alt=""> 
            </section>

            <!--Experiencia-->
            <section class="fadeInBottom" id="ctn_expLaboral">
                <!--Lightbulb--><img src="img/lightbulb.svg" alt="" id="bkg_lightbulb" >
                <article class="text_center">
                    <p class="title">Experiencia laboral</p>
                    <div>
                        <p class="hability_subtitle">Accenture - Mayo de 2022</p>
                        <div class="">
                            <p>Desarolladora Full-Stack</p>
                            <p>tareas</p>
                        </div>
                    </div>
                </article>
                <!--Estrella--><img src="img/" alt=""> 
            </section>
            <?php include("components/contact_footer.php"); ?>
            <script src="scripts/homeScript.js"></script>
    </body>
</html>