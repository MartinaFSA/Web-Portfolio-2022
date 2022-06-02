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
                        $mensaje = "Tu mensaje fue enviado con éxito!";
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
            <img src="img/index/contact.svg" alt="Ilustracion de una chica mirando una computadora que notifica que alguien está escribiendo un mensaje."> 
        </div>
    </section>
</main>
<footer>
    <section class="text_center">
        <p>Gracias por visitar mi página!</p>
        <article class="socialLinks">
            <div><a href="https://github.com/MartinaFSA"><img src="img/social/gh.svg" alt="GitHub"></a></div>
            <div><a href="https://www.linkedin.com/in/martina-fernandez-suarez-anzorena/"><img src="img/social/ig.svg" alt="LinkedIn"></a></div>
            <div><a href="https://www.instagram.com/mafesa._/"><img src="img/social/in.svg" alt="Instagram"></a></div>
        </article>
        <button><a href="img/docs/CV_MartinaFernandezSuarezAnzorena.pdf" download="CV_MartinaFernandezSuarezAnzorena">Descargá mi CV</a></button>
    </section>
    <a href="#page_top">
        <div id="backToTop">
            Volver arriba
            <svg  id="footer_arrow_up" width="15" height="15" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0003 52.5002C28.4644 52.5002 28.9095 52.3158 29.2377 51.9876C29.5659 51.6594 29.7503 51.2143 29.7503 50.7502V9.4747L40.7613 20.4892C41.0899 20.8178 41.5355 21.0024 42.0003 21.0024C42.465 21.0024 42.9107 20.8178 43.2393 20.4892C43.5679 20.1606 43.7525 19.7149 43.7525 19.2502C43.7525 18.7855 43.5679 18.3398 43.2393 18.0112L29.2393 4.0112C29.0767 3.84823 28.8836 3.71893 28.671 3.6307C28.4584 3.54248 28.2304 3.49707 28.0003 3.49707C27.7701 3.49707 27.5421 3.54248 27.3295 3.6307C27.1169 3.71893 26.9238 3.84823 26.7613 4.0112L12.7613 18.0112C12.5985 18.1739 12.4695 18.3671 12.3814 18.5797C12.2934 18.7922 12.248 19.0201 12.248 19.2502C12.248 19.7149 12.4327 20.1606 12.7613 20.4892C13.0899 20.8178 13.5355 21.0024 14.0003 21.0024C14.465 21.0024 14.9107 20.8178 15.2393 20.4892L26.2503 9.4747V50.7502C26.2503 51.2143 26.4346 51.6594 26.7628 51.9876C27.091 52.3158 27.5361 52.5002 28.0003 52.5002Z"/>
            </svg>
        </div>          
    </a>

</footer>
<script src="scripts/scripts.js"></script>