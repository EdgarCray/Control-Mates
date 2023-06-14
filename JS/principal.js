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

