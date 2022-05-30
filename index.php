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
                    <a href="#ctn_sobreMi">Sobre Mí<i></i></a>
                </article>
            </section>

            <!--Braces--><img src="img/curly-braces.svg" id="bkg_braces" alt="">
            <!--Sobre mí-->
            <section class="text_center fadeInBottom" id="ctn_sobreMi">
                <article>
                    <p class="title">Sobre mí</p>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </article>
                <img src="img/index/sittingPC.svg" alt=""> 
            </section>

            <!--Habilidades-->
            <section class="fadeInBottom">
                <!--Numeral--><img src="img/hashtag.svg" id="bkg_hashtag" alt="">

                <article>
                    <p class="title">Habilidades y certificaciones</p>
                    <section id="ctn_habilities">
                        <article>
                            <div class="hability_btn">
                                <div id="webDev_div" class="hability_btn_div"></div>
                                <button id="webDev" class="hability_btn_btn">Desarrollo Web</button>
                            </div>
                            <div class="hability_btn">
                                <div id="design_div" class="hability_btn_div"></div>
                                <button id="design" class="hability_btn_btn">Desarrollo Web</button>
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
                                    <p>- JS y React</p>
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
                                <p class="hability_subtitle">Habilidad</p>
                                <div class="hability_course">
                                    <p>Curso</p>
                                    <p>Habilidades</p>
                                </div>
                                <div class="hability_course">
                                    <p>Curso</p>
                                    <p>Habilidades</p>
                                </div>
                                <div class="hability_course">
                                    <p>Curso</p>
                                    <p>Habilidades</p>
                                </div>
                            </div>
                            <div id="hability_english">
                                <p class="hability_subtitle">Habilidad</p>
                                <div class="hability_course">
                                    <p>Curso</p>
                                    <p>Habilidades</p>
                                </div>
                                <div class="hability_course">
                                    <p>Curso</p>
                                    <p>Habilidades</p>
                                </div>
                                <div class="hability_course">
                                    <p>Curso</p>
                                    <p>Habilidades</p>
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
                        <p class="hability_subtitle">Empresa</p>
                        <div class="">
                            <p>Puesto</p>
                            <p>Responsabilidades</p>
                        </div>
                        <div class="">
                            <p>Puesto</p>
                            <p>Responsabilidades</p>
                        </div>
                        <div class="">
                            <p>Puesto</p>
                            <p>Responsabilidades</p>
                        </div>
                    </div>
                </article>
                <!--Estrella--><img src="img/" alt=""> 
            </section>
            <?php include("components/contact_footer.php"); ?>
            <script src="scripts/homeScript.js"></script>
    </body>
</html>