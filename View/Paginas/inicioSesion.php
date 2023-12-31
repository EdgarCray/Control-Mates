<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minos Gym</title>
    <link rel="shortcut icon" href="/Img/logo_gimnasio.png" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Control%20Mates/Css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Frameworks-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body style="background-color: black;">
    <!-- Contenedor Principal-->
<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!-- Contenedor del registro-->
    <div class="row border rounded-5 p-3 bg-white shadow box-are">

    <!-- Caja Izquierda-->
        <div class="left-box" id="div-rojo" style="background-color: #CD1818; display: block;">
            <script>function ocultarDivEnCelular() {
                var midiv = document.getElementById('div-rojo');
                if (window.innerWidth <= 760) {
                    midiv.style.display = "none";
                } else {
                    midiv.style.display = "block";
                }
            }
              // Llamar a la función al cargar la página
                ocultarDivEnCelular();
              // Agregar evento de redimensionamiento de ventana
            window.addEventListener("resize", ocultarDivEnCelular);</script> 
            <div class="featured-image mb-3">
                <img src="http://localhost/Control%20Mates/Img/imagen.jpg" id="imagen" class="img-fluid mx-auto d-block">
            </div>
        </div>
    <!-- Caja Derecha-->
    <div class="col-md-6 right-box" style="background-image: url(http://localhost/Control%20Mates/Img/fondo.png);">
            <div class="row align-items-center" id="login">
                <div class="header-text mb-4">
                    <img id="logo" class="img-fluid mx-auto d-block" src="http://localhost/Control%20Mates/Img/logo_gimnasio.png">
                </div>
                <script>
                    var imagenes = [
    "http://localhost/Control%20Mates/Img/imagen.jpg",
    "http://localhost/Control%20Mates/Img/imagen1.jpg",
    "http://localhost/Control%20Mates/Img/imagen2.jpg"
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
                </script>
                <div class="input-group mb-3 ">
                    <!-- Campos de Texto-->
                    <form action="" class="form__content">
                    <div class="form__box "></div>
                    <!-- Usuario-->
                        <span></span>
                        <input type="email" name="" id="" class="form__input" placeholder="Ingresa tu usuario">
                        <label for="" class="form__label">Ingresa tu usuario</label>
                        <div class="form__shadow"></div>
                        
                </div>
                <div class="input-group mb-1">
                    <!-- Contraseña-->
                    <div class="form__box"></div>
                    <input type="password" name="" id="mostrar" class="form__input" placeholder="Ingresa tu contraseña">
                    <label for="" class="form__label">Ingresa tu contraseña</label>
                    <div class="form__shadow"></div>
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <label class="switch">
                            <input type="checkbox" id="password">
                            <span class="slider"></span>
                            </label>
                            <label id="mostrarContraseña">Mostrar contraseña</label>
                    </div>
                    <script>
    // Mostrar ocultar la contraseña //
    var checkbox = document.getElementById("password");
    var mostrar = document.getElementById("mostrar");
    checkbox.addEventListener("change", function() {
        if (password.checked) {
        mostrar.type = "text";
    } else {
    mostrar.type = "password";
    }
});
                    </script>
                    <!---->
                    <div class="forgot">
                        <small><a id="olvidar" href="#">¿Olvidaste tu contraseña?</a></small>
                    </div>
                </div>
                <!---->
                <div class="input-group mb3">
                    <!-- Boton-->
                    <div class="form__button">
                        <input type="submit" class="form__submit" value="Iniciar Sesión" style="background-color: #CD1818;">
                    </div>
                </div>
            </form>
            </div>
    </div>
    </div>
    </div>
</body>
</html>