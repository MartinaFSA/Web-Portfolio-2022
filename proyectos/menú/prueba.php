<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
        
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="distribution" content="global"/>
        <meta name="author" content="MartinaFSA (Martina Fernández Suárez Anzorena)">
        
        <!--Bootstrap--><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--FontAwesome--><script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/prueba.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    </head>

    <body>
        <!--Bootstrap--><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
        <header><!--NOTA: style="background-image: url([recursosTienda.imagenes[0].portadaHeaderDesktop])"-->
            <?php 
                require("componentes/navBar.php");
            ?>
        </header>

        <main> 
            <article>
                <h3 class="textoGris textoMediano fontAca ocupaTodoElWidth textoBold">Categorías</h3>
                <div class="wrapper">
                    <div class="background">
                    <img src="1.jpg" alt="">
                    </div>
                    <div class="item-bg"></div>
                    <div class="news-slider">
                        <div class="news-slider__wrp swiper-wrapper">
                        <!-- first card start -->
                        <div class="news-slider__item swiper-slide">
                        <a href="#" class="news__item">
                            <div class="news-date">
                            <span class="news-date__title">24</span>
                            <span class="news-date__txt">May</span>
                            </div>
                            <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                            </div>
                            <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                            </p>
                            <div class="news__img">
                            <img src="2.jpg" alt="news">
                            </div>
                        </a>
                        </div>
                        <!-- first card end -->
                        <div class="news-slider__item swiper-slide">
                        <a href="#" class="news__item">
                            <div class="news-date">
                            <span class="news-date__title">25</span>
                            <span class="news-date__txt">May</span>
                            </div>
                            <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                            </div>
                            <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                            </p>
                            <div class="news__img">
                            <img src="3.jpg" alt="news">
                            </div>
                        </a>
                        </div>
                                <div class="news-slider__item swiper-slide">
                        <a href="#" class="news__item">
                            <div class="news-date">
                            <span class="news-date__title">26</span>
                            <span class="news-date__txt">May</span>
                            </div>
                            <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                            </div>
                            <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                            </p>
                            <div class="news__img">
                            <img src="4.jpg" alt="news">
                            </div>
                        </a>
                        </div>
                                <div class="news-slider__item swiper-slide">
                        <a href="#" class="news__item">
                            <div class="news-date">
                            <span class="news-date__title">27</span>
                            <span class="news-date__txt">May</span>
                            </div>
                            <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                            </div>
                            <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                            </p>
                            <div class="news__img">
                            <img src="5.jpg" alt="news">
                            </div>
                        </a>
                        </div>
                                <div class="news-slider__item swiper-slide">
                        <a href="#" class="news__item">
                            <div class="news-date">
                            <span class="news-date__title">28</span>
                            <span class="news-date__txt">May</span>
                            </div>
                            <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                            </div>
                            <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                            </p>
                            <div class="news__img">
                            <img src="6.jpg" alt="news">
                            </div>
                        </a>
                        </div>
                                <div class="news-slider__item swiper-slide">
                        <a href="#" class="news__item">
                            <div class="news-date">
                            <span class="news-date__title">29</span>
                            <span class="news-date__txt">May</span>
                            </div>
                            <div class="news__title">
                            Lorem Ipsum Dolor Sit Amed
                            </div>
                            <p class="news__txt">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                            </p>
                            <div class="news__img">
                            <img src="7.jpg" alt="news">
                            </div>
                        </a>
                        </div>
                        <!----- first card ends --->
                        </div>
                        <!-- end swiper wrap div -->
                    <!-- arrow start -->
                    <div class="news-slider__ctr">
                        <div class="news-slider__arrows">
                        <button class="news-slider__arrow news-slider-prev">
                            <span class="icon-font">
                            <svg class="icon icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg>
                            </span>
                        </button>
                        <button class="news-slider__arrow news-slider-next">
                            <span class="icon-font">
                            <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
                            </span>
                        </button>
                        </div>
                        <div class="news-slider__pagination"></div>
                    </div>
                    <!-- arrow end -->
                    </div>
                    <!-- new-slider end -->
                </div>
                <!-- wrapper end -->
                <svg hidden="hidden">
                <defs>
                    <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                    <title>arrow-left</title>
                    <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
                    </symbol>
                    <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                    <title>arrow-right</title>
                    <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
                    </symbol>
                </defs>
                </svg>
            </article>

            <article>
                <p id="tituloMenuCarta" class="textoGris textoMediano fontAca textoCentrado"></p>

                <ul id="ctn_menuCartaItems">
                </ul>
            </article>

            <article id="lastSection" class="textoMediano fontAca textoCentrado ocupaElWidth">
                <p class="textoGris marginPadding0 textoBold">¿No sabés qué pedir?</p>
                <a href="menuRecomendado.php marginPadding0">Apretá acá</a>
            </article>
        </main>

        <footer>
                <section class="textoGris fontAca textoCentrado ocupaElWidth">
                    <p class="textoMediano textoBold">Horarios</p>
                    <p class="textoChico">Lunes - Viernes: 9hs a 18hs</p>
                    <p class="textoChico">Sábados y Domingos: 13hs a 23hs</p>
                    <p class="textoMediano textoBold">Teléfono</p>
                    <p id="footer_telefonoTienda" class="textoChico">4555 - 5555</p>
                </section>
                <section>
                    <img id="footer_logo" alt="Logo de la tienda">
                    <div class="flex_row">
                        <p id="footer_ubicacionTienda"></p>
                    </div>
                </section>
            <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> and <a href="https://fontawesome.com/">FontAwesome</a></div>
        </footer>
        
        <script src="scripts/prueba.js"> </script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    </body>

</html>
