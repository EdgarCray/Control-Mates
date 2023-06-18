var imagenes = [
    "/Img/imagen.jpg",
    "/Img/imagen1.jpg",
    "/Img/imagen2.jpg"
    ];
    var index = 0;
  var tiempoIntervalo = 5000; // Cambiar imagen cada 5 segundos
    
    function cambiarImagen() {
    document.getElementById("imagen").src = imagenes[index];
    index++;
    if (index === imagenes.length) {
        index = 0;
    }
}
    setInterval(cambiarImagen, tiempoIntervalo);

/*==================== MENU SHOW Y HIDDEN ====================*/
const  navMenu = document.getElementById('nav-menu'), 
navToggle = document.getElementById('nav-toggle'), 
navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))