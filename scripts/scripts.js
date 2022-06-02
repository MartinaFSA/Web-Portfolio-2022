//Hamburger menu
var menu_hamburger = document.querySelector('.menu_hamburger');
var navbar_ul = document.querySelector('.navbar_ul');
var navBar_social = document.querySelector('.navBar_social');
var overlayForMenu = document.querySelector('#overlayForMenu');
overlayForMenu.style.display = 'none';
menu_hamburger.addEventListener('click', controlMenu);

function controlMenu() {
    if(overlayForMenu.style.display == 'none'){
        menu_hamburger.classList.add('active');
        navbar_ul.classList.add('active');
        navBar_social.classList.add('active');
        overlayForMenu.style.display = 'block';
    } else {
        menu_hamburger.classList.remove('active');
        navbar_ul.classList.remove('active');
        navBar_social.classList.remove('active');
        overlayForMenu.style.display = 'none';
    }
} 

window.addEventListener('click', clickOutsideMenu); 
function clickOutsideMenu(evento){
    if(evento.target == overlayForMenu){
        menu_hamburger.classList.remove('active');
        navbar_ul.classList.remove('active');
        navBar_social.classList.remove('active');
        overlayForMenu.style.display = 'none';
    }
}

//fade in effect
function reveal() {
    var fadeInBottoms = document.querySelectorAll(".fadeInBottom");
    for (var i = 0; i < fadeInBottoms.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = fadeInBottoms[i].getBoundingClientRect().top; //distance from the top of the viewport
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
            fadeInBottoms[i].classList.add("active");
        } else {
            fadeInBottoms[i].classList.remove("active");
        }
    }
} 
window.addEventListener("scroll", reveal);

//footer
let footer_arrow_up = document.getElementById('footer_arrow_up');
let backToTop = document.getElementById('backToTop');
function backToTop_hover() {
    footer_arrow_up.style.fill = '#537959'
}
backToTop.onmouseenter(backToTop_hover);
