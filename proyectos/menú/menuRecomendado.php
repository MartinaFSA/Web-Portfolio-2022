<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
        
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="distribution" content="global"/>
        <meta name="author" content="Hecho por: MartinaFSA (Martina Fernández Suárez Anzorena)">
        
        <!--Bootstrap--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--Owl Carousel--><link rel="stylesheet" href="styles/owl.carousel.min.css">
        <link rel="stylesheet" href="styles/owl.theme.default.min.css">
        <!--FontAwesome--><script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="styles/estilos.css">

    </head>

    <body>
        <header><!--NOTA: style="background-image: url([recursosTienda.imagenes[0].portadaHeaderDesktop])"-->
            <?php require("componentes/navBar.php");?>
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
        </header>

        <main> 
            <article>
                <h3 class="textoGris textoMediano fontAca ocupaTodoElWidth textoBold">Categorías</h3>
                <section class="positionRelative ctn_cardSlider">
                </section>
            </article>

            <article id="lastSection" class="textoMediano fontAca textoCentrado ocupaElWidth">
                <p class="textoGris marginPadding0 textoBold">¿No te convence?</p>
                <a href="menuRecomendado.php">Recomendame otra cosa</a>
            </article>
        </main>

        <footer>
            <?php require("componentes/footer.php"); ?>
        </footer>
        
        <!--Bootstrap--><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--JQuery--><script src="scripts/jquery.js"></script>
        <!--Owl Carousel--><script src="scripts/owl.carousel.min.js"></script>
        <script src="scripts/script.js"> </script>
    </body>

</html>
