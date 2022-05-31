<?php 
    $mejoresTiendas = [
        ["nombre" => "Lego",
        "portada" => "portada.jpg",
        "nombreCarpeta" => "lego",
        "logo" => "logo_lego.webp",
        "altLogo" => "Lego",
        "link" => "#",
        "primerProducto" => "primerProducto.webp",
        "segundoProducto" => "segundoProducto.webp",
        "tercerProducto" => "tercerProducto.webp",
        "alt_productoUno" => "Robot de lego",
        "alt_productoDos" => "Dinosaurio de lego",
        "alt_productoTres" => "Capitán américa de lego",
        ],
        ["nombre" => "Citroën Repuestos",
        "portada" => "portada.jpg",
        "nombreCarpeta" => "citroen",
        "logo" => "logo_citroen.webp",
        "altLogo" => "SeaGate",
        "link" => "#",
        "primerProducto" => "primerProducto.webp",
        "segundoProducto" => "segundoProducto.webp",
        "tercerProducto" => "tercerProducto.webp",
        "alt_productoUno" => "Alfombra para autos",
        "alt_productoDos" => "Asientos de autos",
        "alt_productoTres" => "Aceite para autos",
        ],
        ["nombre" => "Samsung",
        "portada" => "portada_samsung.jpg",
        "nombreCarpeta" => "Samsung",
        "logo" => "logo-samsung.svg",
        "altLogo" => "Samsung",
        "link" => "#",
        "primerProducto" => "primerProducto.jpg",
        "segundoProducto" => "segundoProducto.jpg",
        "tercerProducto" => "tercerProducto.jpg",
        "alt_productoUno" => "Celular",
        "alt_productoDos" => "Heladera inteligente",
        "alt_productoTres" => "Lavarropas",
        ],
        ["nombre" => "Philips",
        "portada" => "portada.jpg",
        "nombreCarpeta" => "Philips",
        "logo" => "logo_philips.webp",
        "altLogo" => "SeaGate",
        "link" => "#",
        "primerProducto" => "primerProducto.webp",
        "segundoProducto" => "segundoProducto.webp",
        "tercerProducto" => "tercerProducto.webp",
        "alt_productoUno" => "Secadora de pelo",
        "alt_productoDos" => "Estantes",
        "alt_productoTres" => "Freídora de aire",
        ],
        ["nombre" => "LG",
        "portada" => "portada.jpg",
        "nombreCarpeta" => "LG",
        "logo" => "logo-lg.svg",
        "altLogo" => "SeaGate",
        "link" => "#",
        "primerProducto" => "primerProducto.jpg",
        "segundoProducto" => "segundoProducto.jpg",
        "tercerProducto" => "tercerProducto.jpg",
        "alt_productoUno" => "Anteojos inteligentes",
        "alt_productoDos" => "Celular",
        "alt_productoTres" => "Heladera inteligente",
        ],
        ["nombre" => "HP Tienda Oficial",
        "portada" => "",
        "nombreCarpeta" => "HP",
        "logo" => "logo-hp.png",
        "altLogo" => "HP",
        "link" => "#",
        "primerProducto" => "primerProducto.jpg",
        "segundoProducto" => "segundoProducto.jpg",
        "tercerProducto" => "tercerProducto.jpg",
        "alt_productoUno" => "Computadora",
        "alt_productoDos" => "Netook",
        "alt_productoTres" => "Impresora",
        ],
        ["nombre" => "Frávega",
        "portada" => "portada_fravega.jpg",
        "nombreCarpeta" => "Fravega",
        "logo" => "logo-fravega.png",
        "altLogo" => "Frávega",
        "link" => "#",
        "primerProducto" => "primerProducto.jpg",
        "segundoProducto" => "segundoProducto.jpg",
        "tercerProducto" => "tercerProducto.jpg",
        "alt_productoUno" => "Afeitadora",
        "alt_productoDos" => "Sandwichera",
        "alt_productoTres" => "Microondas",
        ],
    ];

    $lengthMejoresTiendas = count($mejoresTiendas);
    echo '<section class="seccionProductos">
        <h2 class="encabezado fontLato">Las mejores tiendas te esperan</h2> 
        <a href="#"><p class="link_encabezado textoMediano">Ver tiendas</p></a>
                
        <div id="ctn_card_mejoresTiendas" class="swiper mejoresTiendasSwiper">
            <div class="swiper-wrapper">';
        for($i = 0; $i < $lengthMejoresTiendas; $i++) {
        echo '<a href="' . $mejoresTiendas[$i]["link"] . '" class="swiper-slide">
            <div class="card_mejoresTiendas background_border_shadow">
                <div class="card_mejoresTiendas_portada" style="background-image: url(img/index/mejores_tiendas/' . $mejoresTiendas[$i]["nombreCarpeta"] . '/'. $mejoresTiendas[$i]["portada"] . ')">
                </div>

                <div class="card_mejoresTiendas_bajoPortada">
                    <p class="fontPoppins textoGris textoMedianoGrande">' . $mejoresTiendas[$i]["nombre"] . '</p>
                    <div class="card_mejoresTiendas_ctn_productos flexBetween">
                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/' . $mejoresTiendas[$i]["nombreCarpeta"] . '/' . $mejoresTiendas[$i]["primerProducto"] . '" alt="' . $mejoresTiendas[$i]["alt_productoUno"] . '"></div>
                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/' . $mejoresTiendas[$i]["nombreCarpeta"] . '/' . $mejoresTiendas[$i]["segundoProducto"] . '" alt="' . $mejoresTiendas[$i]["alt_productoDos"] . '"></div>
                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/' . $mejoresTiendas[$i]["nombreCarpeta"] . '/' . $mejoresTiendas[$i]["tercerProducto"] . '" alt="' . $mejoresTiendas[$i]["alt_productoTres"] . '"></div>
                    </div>
                    <div class="card_mejoresTiendas_logoFlotante">
                        <img src="img/index/mejores_tiendas/' . $mejoresTiendas[$i]["nombreCarpeta"] . '/' . $mejoresTiendas[$i]["logo"] . '" alt="' . $mejoresTiendas[$i]["nombre"] . '">
                    </div>
                    <p class="textoGris textoNormal textoChico">Ver tienda</p>
                </div>
            </div>
        </a>';
    }
    echo '
            </div>
        <div class="swiper-button-next flecha_cards"></div>
        <div class="swiper-button-prev flecha_cards"></div>
    </div>
    </section>';
?>