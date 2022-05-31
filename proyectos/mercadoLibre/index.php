<!DOCTYPE php>
<html lang="es">
	<head>
    	<meta charset="UTF-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    	<meta name="keywords" content="mercado libre, compra, venta, productos"/>
    	<meta name="description" content="La comunidad de compra y venta online más grande de América Latina."/>
    	<meta http-equiv="Content-Language" content="es"/>
    	<meta name="author" content="MartinaFSA/">
 
    	<link rel = "icon" href = "img/generales/favicon.png">
    	<title>Mercado Libre Argentina</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    	<link rel="stylesheet" href="estilos.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Nunito:wght@300&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
   
        <script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>
        
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

	</head>
 
	<body>
    	<header>
            <?php
                include("components/navbar.php");
            ?>
        </header>
    	
    	<main>
        	<!--CARRUSEL-->
            <section id="carrusel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#">
                                <img class="d-block" src="img/index/carrusel/firstSlide.webp" alt="Suscribite al nivel 6, desde $599 por mes.">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="#">
                                <img class="d-block" src="img/index/carrusel/secondSlide.JPG" alt="Mega ofertas de fin de semana. Hasta 12 cuotas sin interés.">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="#">
                                <img class="d-block" src="img/index/carrusel/thirdSlide.JPG" alt="Comprá los esenciales para cuidarte con hasta 30% off. Envío gratis a partir de los $3500.">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="#">
                                <img class="d-block" src="img/index/carrusel/fourthSlide.webp" alt="EcoFriday, hasta 40% off en productos sustentables.">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="#">
                                <img class="d-block" src="img/index/carrusel/fifthSlide.webp" alt="Hasta 12 cuotas sin interés en Mundo Gamer.">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="#">
                                <img class="d-block" src="img/index/carrusel/sixthSlide.JPG" alt="Especial motopartes, hasta 25% off y 12 cuotas sin interés.">
                            </a>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <div class="carrusel_flechaFondo" id="carrusel_flechaFondo_izquierda">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </div>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <div class="carrusel_flechaFondo" id="carrusel_flechaFondo_derecha">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </div>
                    </a>
                </div>
            </section>
            
            <div class="paddingPagina_displayFlex">
                <!--PAYMENT DATA-->
                <section id="ctn_paymentData">
                    <div id="paymentData" class="background_border_shadow flexBetween textoNormal">
                        <div> 
                            <img src="img/index/tCredito_icon.svg" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Tarjeta de crédito</p>
                                <a href="#"><p class="paymentData_metodoPago_linkInfo textoChico">Ver promociones bancarias</p></a>
                            </div>
                        </div>
                        
                        <div id="paymentData_debito">
                            <img src="img/index/tDebito_icon.svg" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Tarjeta de débito</p>
                                <a href="#"><p class="paymentData_metodoPago_linkInfo textoChico">Ver más</p></a>
                            </div>
                        </div>

                        <div id="paymentData_sinTarjeta"> 
                            <img src="img/index/cuotasSinTarjeta_icon.svg" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Cuotas sin tarjeta</p>
                                <a href="#"><p class="paymentData_metodoPago_linkInfo textoChico">Conocé Mercado Crédito</p></a>
                            </div>
                        </div>

                        <div id="paymentData_efectivo"> 
                            <img src="img/index/efectivo_icon.svg" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Efectivo</p>
                                <a href="#"><p class="paymentData_metodoPago_linkInfo textoChico">Ver más</p></a>
                            </div>
                        </div>

                        <div onclick="masOpcionesPago()">
                            <img src="img/index/mas_icon.svg" alt="Ver más opciones de pago" class="paymentData_img">
                        </div>
                    </div>
                </section>

                <section class="ctn_overlay textoNormal" id="overlay_opcionesPago">
                    <article>
                        <div>
                            <p class="textoMediano">Medios de pago</p>
                            <p class="overlay_close" id="overlay_opcionesPago_close" onclick="close_masOpcionesPago()">X</p>
                        </div>
                        <div>
                            <p>Podés pagar tus compras con cualquiera de estos medios. Es rápido y seguro, siempre.</p>
                        </div>
                        <div>
                            <div>
                                <img src="img/index/overlay/mercadoCredito.svg" alt="Mercado crédito">
                            </div>
                            <div>
                                <p>¡Compra en cuotas sin tarjeta!</p>
                                <p>Activa Mercado Crédito, es 100% online y sin costos de mantenimiento.</p>
                            </div>
                            <div><button>Activar ahora</button></div>
                        </div>
                        <div class="overlay_tarjetas">
                            <div>
                                <img src="img/index/tCredito_icon.svg" alt="">
                            </div>
                            <div>
                                <p class="textoMediano overlay_titulo">Tarjetas de crédito en hasta 24 cuotas*</p>
                                <p class="overlay_subtitulo">Acreditación instantánea.</p>
                                <div>
                                    <div><img src="img/index/overlay/visa.svg" alt=""></div>
                                    <div><img src="img/index/overlay/americanExpress.svg" alt=""></div>
                                    <div><img src="img/index/overlay/cordobesa.svg" alt=""></div>
                                    <div><img src="img/index/overlay/cabal.svg" alt=""></div>
                                    <div><img src="img/index/overlay/tarjetaShopping.svg" alt=""></div>
                                    <div><img src="img/index/overlay/cencosud.svg" alt=""></div>
                                    <div><img src="img/index/overlay/dinerClub.svg" alt=""></div>
                                    <div><img src="img/index/overlay/argencard.svg" alt=""></div>
                                    <div><img src="img/index/overlay/cmr.svg" alt=""></div>
                                    <div><img src="img/index/overlay/masterCard.svg" alt=""></div>
                                    <div><img src="img/index/overlay/naranja.svg" alt=""></div>
                                </div>
                                <p>*La cantidad de cuotas puede variar según la tarjeta.</p>
                                <p>Ver promociones de cuotas sin interés</p>
                            </div>
                        </div>
                        <div class="overlay_tarjetas">
                            <div>
                                <img src="img/index/tDebito_icon.svg" alt="">
                            </div>
                            <div>
                                <p class="textoMediano overlay_titulo">Tarjetas de débito</p>
                                <p class="overlay_subtitulo">Acreditación instantánea.</p>
                                <div>
                                    <div><img src="img/index/overlay/maestro.svg" alt=""></div>
                                    <div><img src="img/index/overlay/masterCardDebito.svg" alt=""></div>
                                    <div><img src="img/index/overlay/cabalDebito.svg" alt=""></div>
                                    <div><img src="img/index/overlay/visaDebito.svg" alt=""></div>
                                </div>
                                <p>*La cantidad de cuotas puede variar según la tarjeta.</p>
                                <p>Ver promociones de cuotas sin interés</p>
                            </div>
                        </div>
                        <div class="overlay_tarjetas">
                            <div>
                                <img src="img/index/efectivo_icon.svg" alt="">
                            </div>
                            <div>
                                <p class="textoMediano overlay_titulo">Efectivo</p>
                                <p>Es muy simple: cuando termines tu compra, te daremos las instrucciones para que sepas cómo y dónde pagarla.</p>
                                <div>
                                    <div><img src="img/index/overlay/pagoFacil.svg" alt=""><p class="overlay_subtitulo textoMasChico">Acreditación en 1 día hábil.</p></div>
                                    <div><img src="img/index/overlay/rapiPago.svg" alt=""><p class="overlay_subtitulo textoMasChico">Acreditación instantánea.</p></div>
                                </div>
                                <p>*La cantidad de cuotas puede variar según la tarjeta.</p>
                                <p>Ver promociones de cuotas sin interés</p>
                            </div>
                        </div>
                        <div class="overlay_tarjetas">
                            <div>
                                <img src="img/index/tCredito_icon.svg" alt="">
                            </div>
                            <div>
                                <p class="textoMediano overlay_titulo">Dinero en tu cuenta de Mercado Pago</p>
                                <p>Al finalizar tu compra, pagás con el dinero disponible en tu cuenta. Podés ingresar dinero a Mercado Pago con tu tarjeta de débito, en efectivo o por transferencia bancaria.</p>
                                <p class="overlay_subtitulo">Acreditación instantánea.</p>
                                <div>
                                    <div><img src="img/index/overlay/mercado_pago.webp" alt=""></div>
                                </div>
                                <a href="">Conocé más</a>
                            </div>
                        </div>
                    </article>
                </section>

                <!--OFERTAS-->
                <section class="seccionProductos" id="seccionOfertas">
                    <h2 class="encabezado fontLato">Ofertas</h2> 
                    <a href="#"><p class="link_encabezado textoMediano">Ver todas</p></a>

                    <!--Cards-->
                    <div class=" textoNormal cardSlider" id="ctn_ofertas">
                        <div class="card card_ofertas">
                            <a href="#" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$ 35.999</p>
                                    <h5 class="card-title">$ 27.000</h5>
                                    <p class="card_textoOferta textoChico">24% OFF</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Smart Tv Jvc Lt43da5125 Led Full Hd 43 Netflix Youtube Wifi</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="#" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_segundoProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$88.999</p>
                                    <h5 class="card-title">$ 58.558</h5>
                                    <p class="card_textoOferta textoChico">34% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">6x $9.759,67 sin interés</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Freezer vertical Eslabón de Lujo EVU22D1 blanco 142L 220V</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="#" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_tercerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$78.999</p>
                                    <h5 class="card-title">$ 73.499</h5>
                                    <p class="card_textoOferta textoChico">6% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">12x $6.124,92 sin interés</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Smart Tv Noblex 32 Led Dk32x5000 Hd Hdmi Wifi</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="#" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$ 52.899</p>
                                    <h5 class="card-title">$ 27.291</h5>
                                    <p class="card_textoOferta textoChico">48% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">12x $2.274,25 sin interés</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Microondas Whirlpool Con Grill 30 Ltrs Wmg30ab</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="#" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$ 73.899</p>
                                    <h5 class="card-title">$ 63.999</h5>
                                    <p class="card_textoOferta">13% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">9x $7.111 sin interés</p>
                                    <p class="card-text card_envio">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden">Samsung Galaxy A72 128 GB awesome black 6 GB RAM</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>
                        
                        <div id="flecha_ofertas" class="flecha_cards">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </section>

                <!--Beneficios de Mercado Puntos-->
                <section class="seccionProductos">
                    <h2 class="encabezado fontLato">Beneficios de Mercado Puntos</h2> 
                    <a href="#"><p class="link_encabezado textoMediano">Ver todos los beneficios</p></a>
                    
                    <div class="swiper beneficiosSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide beneficios_card">
                                <img src="img/index/beneficios/beneficio_disney+.JPG" alt="Hasta 30% OFF en Disney+">
                            </div>
                            <div class="swiper-slide beneficios_card">
                                <img src="img/index/beneficios/beneficio_star+.JPG" alt="Beneficio en Star+ con tu suscripción al nivel 6">
                            </div>
                            <div class="swiper-slide beneficios_card">
                                <img src="img/index/beneficios/beneficio_HBOMax.JPG" alt="Hasta 50% OFF y 7 días gratis en HBO Max+">
                            </div>
                            <div class="swiper-slide beneficios_card">
                                <img src="img/index/beneficios/beneficio_paramount.JPG" alt="Hasta 40% OFF y 7 días gratis en Paramount+">
                            </div>
                        </div>
                        <div class="swiper-button-next flecha_cards"></div>
                        <div class="swiper-button-prev flecha_cards"></div>
                    </div>
                </section>

                <!--PUBLICIDAD-->
                <?php 
                    include("components/publicidades.php");
                ?>

                <!--Descubrí-->
                <section class="seccionProductos">
                    <h2 class="encabezado fontLato">Descubrí</h2> 
                    <div class="flexBetween ctn_cards_anchas">
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Equipá tu hogar</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 18 cuotas sin interés</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/descubri/descubri_equipaTuHogar.png" alt="">
                            </div>
                        </div>
                        
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Celulares</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 9 cuotas sin interés</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/descubri/descubri_celulares.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <!--Las mejores tiendas te esperan-->

                <?php
                    include("components/mejoresTiendas.php");
                ?>

                <!--Te puede interesar-->
                <section class="seccionProductos">
                    <h2 class="encabezado fontLato">Te puede interesar</h2> 
                    <div class="flexBetween ctn_cards_anchas">
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">zapatillas deportivas</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 30% OFF y 6x sin interés</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/tePuedeInteresar/tePuedeInteresar_primerImagen.JPG" alt="Electrodomésticos">
                            </div>
                        </div>
                        
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Especial primavera</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 40% OFF</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/tePuedeInteresar/tePuedeInteresar_segundaImagen.JPG" alt="Celulares">
                            </div>
                        </div>
                    </div>
                </section>

                <!--Categorías populares-->
                <section class="seccionProductos" id="ctn_categorias_flecha">
                    <h2 class="encabezado fontLato">Categorías populares</h2>
                    <article id="ctn_ctn_categorias" class="swiper categoriasPopularesSwiper">
                        <div id="container-fluid" class="swiper-wrapper background_border_shadow ctn_categorias row-xs-12 row-sm-6 row-md-4 row-lg-2">
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-car"></i>
                                    <p class="textoChico">Autos, Motos y Otros</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-tablet-alt"></i>
                                    <p>Celulares y teléfonos</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-desktop"></i>
                                    <p class="textoChico">Computación</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-microphone-alt"></i>
                                    <p>Electrónica, Audio y Video</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-blender"></i>
                                    <p>Electrodomésticos y Aires Ac.</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-tshirt"></i>
                                    <p>Ropa y Accesorios</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-futbol"></i>
                                    <p>Deportes y Fitness</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-couch"></i>
                                    <p>Hogar, Muebles y Jardín</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-building"></i>
                                    <p>Inmuebles</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-car-side"></i>
                                    <p>Accesorios para Vehículos</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-spray-can"></i>
                                    <p>Belleza y Cuidado Personal</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-gamepad"></i>
                                    <p>Consolas y Videojuegos</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-puzzle-piece"></i>
                                    <p>Juegos y Juguetes</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-hamburger"></i>
                                    <p>Alimentos y Bebidas</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares swiper-slide">
                                <div class="categoria">
                                    <i class="fas fa-ticket-alt"></i>
                                    <p>Entradas para Eventos</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-tools"></i>
                                    <p>Herramientas</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-button-next flecha_cards"></div>
                        <div class="swiper-button-prev flecha_cards"></div>
                    </article>
                </section>
            </div>
    	</main>
 
    	<footer>
            <div class="paddingPagina_displayFlex">
                <!--BENEFICION MERCADO LIBRE-->
                <section class="textoNormal beneficiosMercadoLibre">
                    <div class="beneficioMercadoLibre"> 
                        <div>
                            <img src="img/generales/footer_elegiComoPagar.svg" alt="">
                        </div>
                        <div>
                            <p class="textoMediano">Elegí cómo pagar</p>
                            <p class="textoChico textoGris">Podés pagar con tarjeta, débito, efectivo o hasta 12 cuotas sin tarjeta con Mercado Crédito.</p>
                            <a href="#">Cómo pagar tus compras</a>
                        </div>
                    </div>   
                        
                    <div class="beneficioMercadoLibre_separacion"></div>

                    <div class="beneficioMercadoLibre"> 
                        <div>
                            <img src="img/generales/footer_envioGratis.svg" alt="">
                        </div>
                        <div>
                            <p class="textoMediano">Envío gratis desde $ 3.500</p>
                            <p class="textoChico textoGris">Solo por estar registrado en Mercado Libre tenés envíos gratis en miles de productos. Es un beneficio de Mercado Puntos.</p>
                            <a href="#">Conocé más sobre este beneficio</a>
                        </div>
                    </div>   
                    
                    <div class="beneficioMercadoLibre_separacion"></div>

                    <div class="beneficioMercadoLibre"> 
                        <div>
                            <img src="img/generales/footer_seguridad.svg" alt="">
                        </div>
                        <div>
                            <p class="textoMediano">Seguridad, de principio a fin</p>
                            <p class="textoChico textoGris">¿No te gusta? ¡Devolvelo! En Mercado Libre, no hay nada que no puedas hacer, porque estás siempre protegido.</p>
                            <a href="#">Cómo te protegemos</a>
                        </div>
                    </div> 
                </section>
                
                <!--Informacion de Mercado Libre (normas, cancelaciones)-->
                <section class="textoNormal flexBetween" id="ctn_informacionMercadoLibre">
                    <div class="informacionMercadoLibre">
                        <p class="textoGris textoChico">Botón de arrepentimiento</p>
                        <a href="#"> <p class="textoChico">Cancelar una compra</p> </a>
                        <a href="#"> <p class="textoChico">Cancelar una suscripción</p> </a>
                    </div>

                    <div class="informacionMercadoLibre">
                        <p class="textoGris textoChico">Conocé las normas que aplican cuando comprás</p>
                        <a href="#"> <p class="textoChico">Ver contratos de adhesión - Ley N.º 24.240 de Defensa del Consumidor</p> </a>
                    </div>
                </section>
                
                <!--USUARIOS FINANCIEROS-->
                <section id="ctn_usuariosFinancieros">
                    <div id="escudoUsuariosFinancieros">
                        <img src="img/generales/footer_escudo.png" alt="Escudo de Data Fiscal">
                    </div>

                    <div id="usuariosFinancieros">
                        <img src="img/generales/footer_bancoCentral.svg" alt="Banco Central">
                    </div>
                </section>
            </div>
                <!--MÁS INFORMACIÓN-->
                <div id="ctn_masInformacion">
                    <div id="ctn_masInformacion_btn" class="hiddenUntil1024px">
                        <button onclick="despliegueInformacion()" id="masInformacion_btn" class="textoMasChico textoGris seems_clickeable" style="background-color: transparent;">Más información<i class="fas fa-chevron-up" id="icon_masInformacion"></i></button>
                    </div>

                    <div id="links_masInformacion">
                        <div class="paddingPagina_displayFlex flexBetween">
                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Acerca de</p>
                                <ul>
                                    <li> <a href="#">Mercado Libre</a> </li>
                                    <li> <a href="#">Investor relations</a> </li>
                                    <li> <a href="#">Tendencias</a> </li>
                                    <li> <a href="#">Sustentabilidad</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Otros sitios</p>
                                <ul>
                                    <li> <a href="#">Developers</a> </li>
                                    <li> <a href="#">Mercado Pago</a> </li>
                                    <li> <a href="#">Mercado Shops</a> </li>
                                    <li> <a href="#">Mercado Envíos</a> </li>
                                    <li> <a href="#">Mercado Ads</a> </li>
                                    <li> <a href="#">Mercado Libre Ideas</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Ayuda</p>
                                <ul>                                   
                                    <li> <a href="#">Comprar</a> </li>
                                    <li> <a href="#">Vender</a> </li>
                                    <li> <a href="#">Resolución de problemas</a> </li>
                                    <li> <a href="#">Centro de seguridad</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Redes Sociales</p>
                                <ul>
                                    <li> <a href="#">Twitter</a> </li>
                                    <li> <a href="#">Facebook</a> </li>
                                    <li> <a href="#">Instagram</a> </li>
                                    <li> <a href="#">YouTube</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Mi cuenta</p>
                                <ul>
                                    <li> <a href="#">Ingresá</a> </li>
                                    <li> <a href="#">Vender</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Mercado Puntos</p>
                                <ul>
                                    <li> <a href="#">Disney+</a> </li>
                                    <li> <a href="#">Star+</a> </li>
                                    <li> <a href="#">HBO MAX</a> </li>
                                    <li> <a href="#">Paramount+</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="paddingPagina_displayFlex">
                <!--footer ultima parte-->
                <section id="ultimaParte_links">
                        <div id="fila_ultimaParte_links" class="hiddenUntil1024px textoMasChico">
                            <a href="#" class="textoGris">Trabajá con nosotros</a>
                            <a href="#" class="textoGris">Términos y condiciones</a>
                            <a href="#" class="textoGris">Cómo cuidamos tu privacidad</a>
                            <a href="#" class="textoGris">Información al usuario financiero</a>
                            <a href="#" class="textoGris">Ayuda</a>
                            <a href="#" class="textoGris">Defensa del Consumidor</a>
                        </div>
                        <div>
                            <p class="textogris textoMasChico">Copyright © 1999-2021 MercadoLibre S.R.L</p>
                            <p class="textogris textoMasChico">Av. Caseros 3039, Piso 2, CP 1264, Parque Patricios, CABA</p>
                            <p class="hiddenFrom1024pxAndOn textoChico" style="color: black;">¡Descargá gratis la app de Mercado Libre!</p>
                        </div>
                </section>
            </div>
    	</footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="script.js"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".beneficiosSwiper", {
                slidesPerView: "auto",
                loop: false,
                loopFillGroupWithBlank: false,
                spaceBetween: 10,
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                }
            });

            var swiper = new Swiper(".mejoresTiendasSwiper", {
                slidesPerView: "auto",
                loop: false,
                loopFillGroupWithBlank: false,
                spaceBetween: 10,
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                }
            });

            var swiper = new Swiper(".categoriasPopularesSwiper", {
                slidesPerView: "auto",
                loop: false,
                loopFillGroupWithBlank: false,
                spaceBetween: 10,
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                }
            });           
        </script>
    </body>
</html>