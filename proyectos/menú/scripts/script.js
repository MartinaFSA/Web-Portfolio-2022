/*RECOMENDACIONES DE MENÚS*/
/*En estas variables escribiré las recomendaciones
let menu_entrada = document.getElementById('menu_entrada');
let menu_principal = document.getElementById('menu_principal');
let menu_postre = document.getElementById('menu_postre');
let menu_imagen = document.getElementById('menu_imagen');

Junto los arrays de los menús en una matriz
function outputMenus() { 
	var menusNested = {
		'menu': [
			{nombreDelMenú: 'Había hambre, che',
			entrada: 'Salpicón de pollo',
			principal: 'Bife con papas fritas',
			postre: 'Bocha de helado sobre panqueque con dulce de leche',
			img: 'imagen1'},
		
			{nombreDelMenú: 'La navideña',
			entrada: 'Porción de arollado primavera',
			principal: 'Vitel Toné acompañado de ensalada rusa',
			postre: 'Frutilas con crema chantilly',
			img: 'imagen2'}
		]
	}
	let cantidad = menusNested.menu.length;
	console.log('Hay ' + cantidad + ' opciones de menús disponibles');
	
	for (var indice=0; indice<cantidad; indice++) {
		document.write('Entrada del menú ' + menusNested.menu[indice].entrada + '<br>');
		console.log('weyy');
	}
};
outputMenus();
*/

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*Armo el random number cuando se clickee el link
let tirameUnMenu = getElementById('');
tirameUnMenu.addEventListener('click', () => {
	let numeroRandom = Math.round(Math.random() * (menuMatriz.length - 0) + 0);
	menu_postre.innerHTML = menuMatriz[numeroRandom];
});
*/

/*MODIFICO EL HEAD CON LOS OBJETOS*/
//Meta Keywords
var createMetaKeywords = document.createElement('meta');
createMetaKeywords.setAttribute('name', 'keywords');
createMetaKeywords.content = 'restaurante, menú, menú digital, ' + recursosTienda.textos[0].metaPalabrasClave;
document.getElementsByTagName('head')[0].appendChild(createMetaKeywords);

//Meta Description
var createMetaDescription = document.createElement('meta');
createMetaDescription.setAttribute('name', 'description');
createMetaDescription.content = recursosTienda.textos[0].metaDescripcion;
document.getElementsByTagName('head')[0].appendChild(createMetaDescription);

//FavIcon
var createFavIcon = document.createElement('link');
createFavIcon.setAttribute('rel', 'icon');
createFavIcon.setAttribute('href', 'img/' + recursosTienda.imagenes[0].favIcon + '.svg');
document.getElementsByTagName('head')[0].appendChild(createFavIcon);

//Title
var createTitle = document.createElement('title');
createTitle.innerHTML = recursosTienda.textos[0].nombreTienda + ' - Menú';
document.getElementsByTagName('head')[0].appendChild(createTitle);

/*MODIFICO EL CUERPO DEL DOCUMENT CON LOS OBJETOS*/
//Header
document.getElementById('header_background').setAttribute('style', 'background-image: linear-gradient(342.39deg, rgba(34, 34, 34, 0.9) 0%, rgba(39, 39, 39, 0.5) 100%), url("img/' + recursosTienda.imagenes[0].portadaHeaderMobile + '.JPG")');
let whatsappLi = document.getElementById('whatsAppLink');
let whatsappChild = whatsappLi.appendChild(document.createElement('a'));
whatsappChild.setAttribute('href', 'https://wa.me/' + recursosTienda.contacto[0].whatsapp + '?text=Hola!%20Quiero%20hacer%20un%20pedido');
whatsappChild.setAttribute('class', 'textoBeige')
whatsappChild.innerHTML = 'Whatsapp';

/*HEADER*/
//Hamburger menu
var menuHamburguesa = document.querySelector('.menuHamburguesa');
var menuHamburguesa_ul = document.querySelector('.menuHamburguesa_ul');
var headerNav = document.querySelector('.navigationBar');

menuHamburguesa.addEventListener('click', openMenu);

function openMenu() {
    menuHamburguesa.classList.toggle('active');
    menuHamburguesa_ul.classList.toggle('active');
	headerNav.classList.toggle('active');    
}

//logo, nombreTienda y slogan
let header_logo = document.getElementById('header_logo');
header_logo.setAttribute('src', 'img/' + recursosTienda.imagenes[0].logoBlanco + '.svg');

let header_nombreTienda = document.getElementById('header_nombreTienda');
header_nombreTienda.innerHTML = recursosTienda.textos[0].nombreTienda;

let header_slogan = document.getElementById('header_slogan');
header_slogan.innerHTML = recursosTienda.textos[0].slogan;

/*CATEGORÍAS CARD SLIDER*/
$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		autoplay: true,
		autoplayhoverpause: true, 
		autoplaytimeout: 100,
		loop: false, //las cards no se mueven en círculo (si ponía true me rompía los links)
		nav: true, //muestra flechas de navegación
		margin: 8,
		checkVisibility: false, //ahorro tiempo
		responsiveBaseElement: "#contenedorDeCards",
		mouseDrag: false,
		responsive: {
			0: {
				items: 1, //muestra 1 sóla card
				stagePadding: 50, //muestra un poco de la siguiente card
			}, 320: {
				items: 2,
				stagePadding: 30,
			}, 500: {
				items: 3,
				stagePadding: 40,
			}, 900: {
				items: 4,
				stagePadding: 40,
			}, 1200: {
				items: 5,
				stagePadding: 40,
			}, 1500: {
				items: 6,
				stagePadding: 40,
			}
		}
	});
});

//DATOS ENRIQUECIDOS

//PÁGINA
var cantidadDeCategorias = categoriasTienda.categoria.length;
ctn_cards = document.getElementById('contenedorDeCards');
ctn_menuCartaItems = document.getElementById('ctn_menuCartaItems');

for (let i = 0; i < cantidadDeCategorias; i++) {
	console.log(i);
	//CARD
	cardForSlider_a = ctn_cards.appendChild(document.createElement('a'));
	cardForSlider_a.setAttribute('class', 'categorias_card_a');

	cardForSlider = cardForSlider_a.appendChild(document.createElement('div'));
	cardForSlider.setAttribute('class', 'categorias_card ocupaTodo fontAca textoMediano flex_superCenter columnaFlex');

	cardForSlider_icon = cardForSlider.appendChild(document.createElement('i'));
	cardForSlider_icon.setAttribute('class', categoriasTienda.categoria[i].iconCategoria + ' textoBeige iconMediano');

	cardForSlider_p = cardForSlider.appendChild(document.createElement('p'));
	cardForSlider_p.setAttribute('class', 'textoBeige textoMediano primeraLetraMayuscula');
	cardForSlider_p.innerHTML = categoriasTienda.categoria[i].nombreCategoria; 

	let j = i + 1;

/*MENÚ*/
	cardForSlider_a.addEventListener('click', function muestroMenúCarta() {
		//on click cambia el título del menú y se muestran los items.
		let tituloMenuCarta = document.getElementById('tituloMenuCarta')
		tituloMenuCarta.innerHTML = categoriasTienda.categoria[i].nombreCategoria;
		tituloMenuCarta.classList.toggle('active');
		for (let y = 0; y < j; y++) { //Imprimir un item for cada elemento del array 
			ctn_menuCartaItems.classList.toggle("active");
			menuCartaItem = ctn_menuCartaItems.appendChild(document.createElement('li'));
			menuCartaItem.setAttribute('class', 'ocupaElWidth menuCartaItem');
			menuCartaItem_nombrePrecio = menuCartaItem.appendChild(document.createElement('div'));
			menuCartaItem_nombrePrecio.setAttribute('class', 'flex_row textoChico flex_superCenter positionRelative');
			//item: bullet
			menuCartaItem_span = menuCartaItem_nombrePrecio.appendChild(document.createElement('span'));
			menuCartaItem_span.setAttribute('class', 'bulletMenuCarta');
			//item: nombre del plato
			menuCartaItem_nombrePlato = menuCartaItem_nombrePrecio.appendChild(document.createElement('p'));
			menuCartaItem_nombrePlato.setAttribute('class', 'textoGris');
			console.log(Object.getOwnPropertyNames(categoriasTienda.Postres));
			let p = 0;
			menuCartaItem_nombrePlato.innerHTML = categoriasTienda[j][p].nombrePlato;
			//item:precio del plato
			menuCartaItem_precioPlato = menuCartaItem_nombrePrecio.appendChild(document.createElement('p'));
			menuCartaItem_precioPlato.setAttribute('class', 'textoBeige');
			menuCartaItem_precioPlato.innerHTML = categoriasTienda[j].precioPlato;
			//item linea y descripcion
			menuCartaItem.appendChild(document.createElement('div')).setAttribute('class', 'lineaItemMenuCarta');
			menuCartaItem.appendChild(document.createElement('p')).setAttribute('class', 'textoGris cursivaMenosOpaco textoCentrado').innerHTML = categoriasTienda[j].precioPlato;
		} 
	})
}

/*FOOTER*/
document.getElementById('footer_logo').setAttribute('src', 'img/' + recursosTienda.imagenes[0].logoNegro + '.svg');
document.getElementById('footer_ubicacionTienda').innerHTML = recursosTienda.contacto[0].ubicacion;
document.getElementById('footer_telefonoTienda').innerHTML = recursosTienda.contacto[0].telefono;