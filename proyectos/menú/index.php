<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
        
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="distribution" content="global"/>
        <meta name="author" content="MartinaFSA (Martina Fernández Suárez Anzorena)">
        
        <!--Bootstrap--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--Owl Carousel--><link rel="stylesheet" href="styles/owl.carousel.min.css">
        <link rel="stylesheet" href="styles/owl.theme.default.min.css">
        <!--FontAwesome--><script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="styles/estilos.css">
        <script>
            /*ARRAY LITERALS (nested arrays/matrices) DE LA TIENDA. Están acá porque sino no podía acceder a ellos.*/
            var recursosTienda = {
                'textos': [
                    {nombreTienda: 'RestoPepe', //0,0
                    slogan: 'Las mejores hamburguesas de Zona Sur', //0,1
                    metaPalabrasClave: 'nombreTienda, ubicación, especialidad', //0,2
                    metaDescripcion: 'nombreTienda. Slogan. Ubicación. Carta/Menú · Recomendaciones · Contacto.'}, //0,3
                ],
                'imagenes': [
                    {favIcon: 'logoNegro',
                    busquedaEstructurada: 'busquedaEstructurada',
                    logoNegro: 'logoNegro', //Para el footer
                    logoBlanco: 'logoBlanco', //Para el header
                    portadaHeaderMobile: 'portadaHeaderMobile',
                    portadaHeaderDesktop: 'portadaHeaderDesktop',}
                ],
                'contacto': [
                    {whatsapp: '1162840250', //No incluyas los ceros, paréntesis ni guiones cuando añadas el número de teléfono en este formato. (ej: 1166665555)
                    ubicacion: 'Calle 1234, Colegiales.', //Calle, número y barrio
                    telefono: '4812-3456'} //Sin código de área y con guión (ej: 4822-2222)
                ]
            }
            var categoriasTienda = {
                'categoria': [//Tiene que haber mínimo 6 categorías. Si hay menos cambiar el card slider responsive
                    {nombreCategoria: 'Postres',
                    iconCategoria: 'fas fa-cookie', //código class del icon (fontAwesome o similares)
                    menu_id: 'postres'}, //Es el nombre de la categoría pero sin espacios y camelcase

                    {nombreCategoria: 'Acompañamientos',
                    iconCategoria: 'fas fa-bacon',
                    menu_id: 'Acompañamientos'},

                    {nombreCategoria: 'Sandwiches',
                    iconCategoria: 'fas fa-bread-slice',
                    menu_id: 'sandwiches'},

                    {nombreCategoria: 'Vegano',
                    iconCategoria: 'fas fa-seedling',
                    menu_id: 'sandwiches'},

                    {nombreCategoria: 'Promociones',
                    iconCategoria: 'fas fa-fire',
                    menu_id: 'sandwiches'},

                    {nombreCategoria: 'Bebidas',
                    iconCategoria: 'fas fa-cocktail',
                    menu_id: 'bebidas'}

                ],//Los elementos de este array deben estar en la misma posición que en el array anterior
                'Postres': [
                    {nombrePlato: 'Bizcochuelo',
                    precioPlato: '150.55',
                    descripcionPlato: 'relleno de DDL, duraznos y cubierto con ganache de chocolate'}
                ],
                'Acompañamientos': [
                    {nombrePlato: 'Bacon',
                    precioPlato: '325',
                    descripcionPlato: 'crocante y cocinado a la plancha'}
                ],
                'Sandwiches': [
                    {nombrePlato: 'Croque madame',
                    precioPlato: '400.99',
                    descripcionPlato: 'sandwich de pan francés relleno de jamón y queso y cubierto de salsa blanca y queso gratinado'}
                ],
                'Vegano': [
                    {nombrePlato: 'vegano',
                    precioPlato: '325',
                    descripcionPlato: 'crocante y cocinado a la plancha'}
                ],
                'Promociones': [
                    {nombrePlato: 'promo',
                    precioPlato: '325',
                    descripcionPlato: 'crocante y cocinado a la plancha'}
                ],
                'Bebidas': [
                    {nombrePlato: 'chocolatada',
                    precioPlato: '325',
                    descripcionPlato: 'crocante y cocinado a la plancha'}
                ],
            }
        </script>

        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "Restaurant",
            "image": [
                "busquedaEstructurada.jpg"
            ],
            "name": "nombreTienda",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Calle 1234",
                "addressLocality": "Colegiales",
                "addressRegion": "CABA",
                "postalCode": "12345",
                "addressCountry": "Argentina"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                "@type": "Rating",
                "ratingValue": "4.5",
                "bestRating": "5"
                },
                "author": {
                "@type": "Person",
                "name": "Lorena López"
                }
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 40.761293,
                "longitude": -73.982294
            },
            "url": "https://martinafernandezsuarez.com.ar/proyectos/menú/index.php",
            "telephone": "+544812-3456",
            "servesCuisine": "Argentina",
            "priceRange": "$$",
            "openingHoursSpecification": [
                {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday"
                ],
                "opens": "11:30",
                "closes": "22:00"
                },
                {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Wednesday",
                    "Thursday",
                    "Friday"
                ],
                "opens": "11:30",
                "closes": "23:00"
                },
                {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "16:00",
                "closes": "23:00"
                },
                {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Sunday",
                "opens": "16:00",
                "closes": "22:00"
                }
            ],
            "menu": "https://martinafernandezsuarez.com.ar/proyectos/menú/index.php",
            "acceptsReservations": "True"
            }
        </script>
    </head>

    <body>
    <div itemscope itemtype="https://schema.org/Restaurant">
        <header><!--NOTA: style="background-image: url([recursosTienda.imagenes[0].portadaHeaderDesktop])"-->
            <article id="header_background">
                <?php 
                    require("componentes/navBar.php");
                ?>
                <!--Header-->
                <section class="fontAca ocupaTodo flex_superCenter columnaFlex">
                    <div>
                        <img alt="Logo de la página" id="header_logo"><!--[recursosTienda.imagenes[0].logoBlanco]-->
                    </div>
                    <div>
                        <div id="header_lineaTop" class="header_linea"></div>
                        <h1 id="header_nombreTienda" class="textoBlanco textoGrande"></h1><!--[recursosTienda.textos[0].nombreTienda]-->
                        <div id="header_lineaBottom" class="header_linea"></div>
                    </div>
                    <div>
                        <h2 id="header_slogan" class="textoBlanco textoMediano"></h2><!--[recursosTienda.textos[0].slogan]-->
                    </div>
                </section>
            </article>
        </header>

        <main> 
            <article>
                <h3 class="textoGris textoMediano fontAca ocupaTodoElWidth textoBold">Categorías</h3>
                <section class="positionRelative ctn_cardSlider">
                    <div id="contenedorDeCards" class="flex_row flex_between overflowHidden owl-carousel">
                    </div>
                    <!--<div id="slider_GoLeft" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-left" style="background-color: transparent"></i>
                    </div>
                    <div id="slider_GoRight" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-right" style="background-color: transparent"></i>
                    </div>-->
                </section>
            </article>

            <article>
                <p id="tituloMenuCarta" class="textoGris textoMediano fontAca textoCentrado displayChange"></p>

                <ul id="ctn_menuCartaItems" class="displayChange">
                </ul>
            </article>

            <article id="lastSection" class="textoMediano fontAca textoCentrado ocupaElWidth">
                <p class="textoGris marginPadding0 textoBold">¿No sabés qué pedir?</p>
                <a href="menuRecomendado.php" class="marginPadding0">Apretá acá</a>
            </article>
        </main>

        <footer>
            <?php require("componentes/footer.php"); ?>
        </footer>
        </div>
        <!--Bootstrap--><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--JQuery--><script src="scripts/jquery.js"></script>
        <!--Owl Carousel--><script src="scripts/owl.carousel.min.js"></script>
        <script src="scripts/script.js"> </script>
    </body>

</html>
