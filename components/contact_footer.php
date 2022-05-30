    <section id="ctn_emailSender" class="fadeInBottom" >
        <div>
            <form action="" method="POST">
                <p class="title">Mandame un mail</p>
                
                <label for="nombreAsunto">Nombre</label>
                <input type="text" name="nombreAsunto" placeholder="Ingresá tu nombre" autocomplete="name" required>

                <label for="emisor">Mail</label>
                <input type="email" name="emisor" autocomplete="email" placeholder="Ingresá tu mail" required>

                <textarea name="mensaje" style="resize: none;" placeholder="Escribí tu mensaje acá" required></textarea>

                <input type="submit" name="enviarMail" id="enviarMail">
            </form>

            <!--MODAL-->
            <?php  
                if(isset($_POST["enviarMail"])) {
                    $emisor = $_POST['emisor'];
                    if(isset($_POST['emisor']) && $emisor = filter_var($emisor, FILTER_VALIDATE_EMAIL)) {
                        $mensajeMail = $_POST['mensaje'];
                        $mensajeMail = wordwrap( $mensajeMail, 70, "\r\n" );
                        $asunto = $_POST['nombreAsunto'] . " - Contacta desde mi página";
                        mail('martina.fernandez.sa@gmail.com', $asunto, $mensajeMail, "From: " . $emisor); //destinatario, asunto, mensaje, quien lo envía
                        $mensaje = "Gracias por su mensaje! Lo contestaré a la brevedad";
                    } else {
                        $mensaje = "Por favor, inserta una dirección de mail válida";
                    }
                }

                if(isset($mensaje)) { //Si $mensaje existe...
                    echo "<section id='contenedorDeModal'>
                        <div>
                            <div>
                                <p>" . $mensaje . "</p>
                            </div>
                        </div>
                    </section>";
                }
            ?>
        </div>

        <div>
            <img src="img/index/contact.svg" alt=""> 
        </div>
    </section>
</main>
<footer>
    <section class="text_center">
        <p>Gracias por visitar mi página!</p>
        <article class="socialLinks">
            <div><a href="index.php"><img src="img/social/gh.svg" alt="GitHub"></a></div>
            <div><a href="index.php"><img src="img/social/ig.svg" alt="LinkedIn"></a></div>
            <div><a href="index.php"><img src="img/social/in.svg" alt="Instagram"></a></div>
        </article>
        <p>Martina Fernández Suárez</p>
    </section>
    <div id="backToTop">
        <a href="#page_top">Volver al inicio <i class="fas fa-angle-down" style=""></i> </a>
    </div>               
</footer>
<script src="scripts/scripts.js"></script>