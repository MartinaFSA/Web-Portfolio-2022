<section class="seccionProductos" id="espacioPublicitario">
                    
    <?php 
    /*Matriz de publicidades*/
        $publicidades = [
            ["nombre" => "seagate",
            "imagen" => "seagate.jpg",
            "logo" => "seagate-logo.svg",
            "altLogo" => "SeaGate",
            "link" => "https://www.seagate.com/la/es/",
            "color" => "#998678",
            "primerParrafo" => "Espacio para todo",
            "segundoParrafo" => "La biblioteca de su vida",
            "colorTextos" => "#ffffff"
            ],
            ["nombre" => "HP",
            "imagen" => "HP.jpg",
            "logo" => "hp-hewlett-packard.svg",
            "altLogo" => "H.P",
            "link" => "https://www.hp.com/ar-es/home.html",
            "color" => "#e0dadc",
            "primerParrafo" => "Hasta 9 cuotas sin interés",
            "segundoParrafo" => "Descuentos increíbles + envíos gratis*",
            "colorTextos" => "#3e3b3c"
            ],
            ["nombre" => "legion by lenovo",
            "imagen" => "legion.jpg",
            "logo" => "lenovo-2.svg",
            "altLogo" => "Lenovo",
            "link" => "https://www.lenovo.com/ar/es/laptops/laptops-legion/legion-serie-y/c/legion-y-series?orgRef=https%253A%252F%252Fwww.google.com%252F&cid=ar:sem|se|google||Legion+Series|BR_Lenovo+-+Laptop+-+Legion|1635524619&cid=ar:sem|se|google|lenovo-laptop-legion|Legion+Series|legion|b|1635524619|64259582525|aud-620354251182:kwd-18367980|text|brand|all&gclid=CjwKCAjwp7eUBhBeEiwAZbHwkdQgHVnx4kd6bZB19e8qWcb92UxGzg-yIDC0vATHzY2i5ZFbYt1PwRoC5gUQAvD_BwE",
            "color" => "#020002",
            "primerParrafo" => "Hasta 6 cuotas sin interés",
            "segundoParrafo" => "Elegante por fuera, salvaje por dentro",
            "colorTextos" => "#ffffff"
            ]
        ];

        $lengthPublidades = count($publicidades); //largo de la matriz
        $numeroRandom = rand(1, $lengthPublidades); //random position de la matriz
        $numeroRandom = $numeroRandom - 1; //Le resto un número porque los arrays empiezan en 0
        echo '<article  style="background-color:' . $publicidades[$numeroRandom]["color"] . '">
            <a href="' . $publicidades[$numeroRandom]["link"] . '">
                <div id="espacioPublicitario_imagen">
                    <div id="imagenPublicitaria"></div>
                    <div id="espacioPublicitario_imagen_logo">
                        <img src="img/index/publicidades/logos/' . $publicidades[$numeroRandom]["logo"] . '" alt="' . $publicidades[$numeroRandom]["altLogo"]. '">
                    </div>
                </div>
                <div id="espacioPublicitario_textos">
                    <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins">' . $publicidades[$numeroRandom]["primerParrafo"] . '</p>
                    <p class="textoGrandeCardMayuscula fontPoppins">' . $publicidades[$numeroRandom]["segundoParrafo"] . '</p>
                    <p class="fontLato textoBlanco texto textoChico">Ver más <i class="fas fa-chevron-right"></i></p>
                </div>
            </a>
        </article>
        
        <style>
            #imagenPublicitaria {
                background-image: url("img/index/publicidades/'.$publicidades[$numeroRandom]["imagen"].'")
            } #espacioPublicitario_textos > p { color: '.$publicidades[$numeroRandom]["colorTextos"].'}
        </style>';
    ?> 
</section>