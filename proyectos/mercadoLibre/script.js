/*NavigationBar categorías*/
let categorias = document.getElementById("categorias");
let categorias_indicador = document.getElementById("categorias_indicador");
function categoriasDisplay() {
    categorias.style.display = "block";
    categorias_indicador.style.display = "block";
};
function categoriasHidden() {
    categorias.style.display = "none";
    categorias_indicador.style.display = "none";
}

/*NavigationBar tecnología*/
let tecnologia = document.getElementById("tecnologia");
function tecnologiaDisplay() {
    tecnologia.style.display = "block";
};
function tecnologiaHidden() {
    tecnologia.style.display = "none";
}

//Hamburger menu
var menuHamburguesa = document.querySelector('.menuHamburguesa');
var menuHamburguesa_ul = document.querySelector('.menuHamburguesa_ul');

menuHamburguesa.addEventListener('click', openMenu);

function openMenu() {
    menuHamburguesa.classList.toggle('active');
    menuHamburguesa_ul.classList.toggle('active'); 
}

var input = document.getElementById('input_search');
input.focus();

/*Carrusel*/
const carrusel = document.getElementById("carrusel");
carrusel.onmouseenter = function () {
    document.getElementById("carrusel_flechaFondo_izquierda").style.display = "flex";
    document.getElementById("carrusel_flechaFondo_derecha").style.display = "flex";
}
carrusel.onmouseleave = function () {
    document.getElementById("carrusel_flechaFondo_izquierda").style.display = "none";
    document.getElementById("carrusel_flechaFondo_derecha").style.display = "none";
}

/*Mejores Tiendas, display flecha on hover*/
const mejoresTiendas = document.getElementById("ctn_card_mejoresTiendas");
mejoresTiendas.onmouseenter = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "flex"
}
mejoresTiendas.onmouseleave = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "none"
}

/*Ofertas, display flecha on hover*/
const flecha_ofertas = document.getElementById("ctn_ofertas");
flecha_ofertas.onmouseenter = function () {
    document.getElementById("flecha_ofertas").style.display = "flex"
}
flecha_ofertas.onmouseleave = function () {
    document.getElementById("flecha_ofertas").style.display = "none"
}
/*Display textos y corazon on hover super mal hecho pero bueno por lo menos está :(*/
var card_ofertas = document.getElementsByClassName("card_ofertas");
let textosHidden = document.getElementsByClassName("card_textoHidden");
let textosHidden_segundo = document.getElementsByClassName("card_segundo_textoHidden");
let corazonHidden = document.getElementsByClassName("card_ofertas_corazon");

for (var i = 0; i < card_ofertas.length; i++) {
    card_ofertas[i].addEventListener("mouseenter", muestroTextos);
    card_ofertas[i].addEventListener("mouseleave", muestroTextos);

    function muestroTextos() {
        textosHidden[i].classList.toggle("active");
        textosHidden_segundo[i].classList.toggle("active");
        corazonHidden[i].classList.toggle("active");
    }
    break;
};
for (var y = 1; y < card_ofertas.length; y++) {
    card_ofertas[y].addEventListener("mouseenter", muestroTextos);
    card_ofertas[y].addEventListener("mouseleave", muestroTextos);

    function muestroTextos() {
        textosHidden[y].classList.toggle("active");
        textosHidden_segundo[y].classList.toggle("active");
        corazonHidden[y].classList.toggle("active");
    }
    break;
};
for (var t = 2; t < card_ofertas.length; t++) {
    card_ofertas[t].addEventListener("mouseenter", muestroTextos);
    card_ofertas[t].addEventListener("mouseleave", muestroTextos);

    function muestroTextos() {
        textosHidden[t].classList.toggle("active");
        textosHidden_segundo[t].classList.toggle("active");
        corazonHidden[t].classList.toggle("active");
    }
    break;
};
for (var o = 3; o < card_ofertas.length; o++) {
    card_ofertas[o].addEventListener("mouseenter", muestroTextos);
    card_ofertas[o].addEventListener("mouseleave", muestroTextos);

    function muestroTextos() {
        textosHidden[o].classList.toggle("active");
        textosHidden_segundo[o].classList.toggle("active");
        corazonHidden[o].classList.toggle("active");
    }
    break;
};
for (var u = 4; u < card_ofertas.length; u++) {
    card_ofertas[u].addEventListener("mouseenter", muestroTextos);
    card_ofertas[u].addEventListener("mouseleave", muestroTextos);

    function muestroTextos() {
        textosHidden[u].classList.toggle("active");
        textosHidden_segundo[u].classList.toggle("active");
        corazonHidden[u].classList.toggle("active");
    }
    break;
};

/*Categorías populares*/
let categoria = document.querySelectorAll("div.categoria");
categoria.onmouseenter = function () {
    document.querySelectorAll("div.categoria").style.backgroundColor = "#4d8efa"
}
categoria.onmouseleave = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "none"
}

const categoriasPopulares = document.getElementById("ctn_categorias_flecha");
categoriasPopulares.onmouseenter = function () {
    document.getElementById("flecha_mejoresCategorias").style.display = "flex"
}
categoriasPopulares.onmouseleave = function () {
    document.getElementById("flecha_mejoresCategorias").style.display = "none"
}

/*Footer más información despliegue*/
let botonMasInfo = document.getElementById("masInformacion_btn");
function despliegueInformacion() {
    if (botonMasInfo.style.backgroundColor == "transparent") {
        botonMasInfo.style.backgroundColor = "#f7f7f7";
        document.getElementById("links_masInformacion").style.display = "flex";
        document.getElementById("icon_masInformacion").style.transform = "rotate(180deg)";
        document.getElementById("icon_masInformacion").style.paddingLeft = "0px";
        document.getElementById("icon_masInformacion").style.paddingRight = "5px";
    } else {
        botonMasInfo.style.backgroundColor = "transparent";
        document.getElementById("links_masInformacion").style.display = "none";
        document.getElementById("icon_masInformacion").style.transform = "rotate(0deg)";
        document.getElementById("icon_masInformacion").style.paddingLeft = "5px";
        document.getElementById("icon_masInformacion").style.paddingRight = "0px";
    }
};

/* Overlay */
let overlay_opcionesPago = document.getElementById('overlay_opcionesPago');

function masOpcionesPago() {
    overlay_opcionesPago.style.display = 'flex';
    window.addEventListener('click', clickOutsideModal);
} 
function close_masOpcionesPago() {
    overlay_opcionesPago.style.display = 'none';
    
} function clickOutsideModal(evento){
    if(evento.target == overlay_opcionesPago){
        overlay_opcionesPago.style.display = "none";
    }
}