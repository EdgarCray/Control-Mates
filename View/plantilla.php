<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="http://localhost/Control%20Mates/Img/logo_gimnasio.png" type="image/x-icon">

        <!--==================== FONT AWESOME ====================-->
        <script src="https://kit.fontawesome.com/ed9d230dd4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="http://localhost/Control%20Mates/Css/menu.css">
        <link rel="stylesheet" href="http://localhost/Control%20Mates/Css/main.css">

        <title>Minos Gym | Inicio</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header>
            <div class="container-fluid">
                <div class="headerm">
                    <p id="logo__texto"><a href="index.php?pagina=inicio" class="logo ">Minos Gym</a>
                    </p>
                    <div class="headerm-right">
                        <img src="http://localhost/Control%20Mates/Img/logo_gimnasio.png" alt="Logo" width="65" >
                    </div>
                    </div> 
            </div>
        </header>
        <!--=================== MENU =====================-->
        <div class="header" id="header" style="background-color: transparent;">
            <nav class="nav container">
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">

                        <?php if (isset($_GET["pagina"])) : ?>
                            
                            <?php if ($_GET["pagina"] == "inicio") : ?>
                                <li class="nav__item">
                            <a href="index.php?pagina=inicio" class="nav__link"> 
                                <i class="uil uil-estate nav__icon"></i> Inicio
                            </a>
                        </li>
                                <?php else : ?>
                        <li class="nav__item">
                            <a href="index.php?pagina=inicio" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i> Inicio
                            </a>
                        </li>
                                    <?php endif ?>

                                    <?php if ($_GET["pagina"] == "usuarios") : ?>
                                        <li class="nav__item">
                            <a href="index.php?pagina=usuarios" class="nav__link"> 
                                <i class="uil uil-user nav__icon"></i> Usuarios
                            </a>
                        </li>
                        <?php else :?>
                        <li class="nav__item">
                            <a href="index.php?pagina=usuarios" class="nav__link"> 
                                <i class="uil uil-user nav__icon"></i> Usuarios
                            </a>
                        </li>
                            <?php endif ?>

                            <?php if ($_GET["pagina"] == "pagos") : ?>
                                <li class="nav__item">
                            <a href="index.php?pagina=pagos" class="nav__link">
                                <i class="uil uil-money-bill nav__icon"></i> Pagos
                            </a>
                        </li>
                        <?php else :?>
                        <li class="nav__item">
                            <a href="index.php?pagina=pagos" class="nav__link">
                                <i class="uil uil-money-bill nav__icon"></i> Pagos
                            </a>
                        </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "estadisticas") : ?>
                        <li class="nav__item">
                            <a href="index.php?pagina=estadisticas" class="nav__link">
                                <i class="uil uil-chart-line nav__icon"></i> Estadísticas
                            </a>
                        </li>
                            <?php else :?>
                                <li class="nav__item">
                            <a href="index.php?pagina=estadisticas" class="nav__link">
                                <i class="uil uil-chart-line nav__icon"></i> Estadísticas
                            </a>
                        </li>
                        <?php endif?>

                        <?php if ($_GET["pagina"] == "areas") :?>
                        <li class="nav__item">
                            <a href="index.php?pagina=areas" class="nav__link">
                                <i class="uil uil-dumbbell nav__icon"></i> Áreas
                            </a>
                        </li>
                        <?php else :?>
                            <li class="nav__item">
                            <a href="index.php?pagina=areas" class="nav__link">
                                <i class="uil uil-dumbbell nav__icon"></i> Áreas
                            </a>
                        </li>
                        <?php endif?>

                        <?php if ($_GET["pagina"] == "escaner") : ?>
                        <li class="nav__item">
                            <a href="index.php?pagina=escaner" class="nav__link">
                                <i class="uil uil-qrcode-scan nav__icon"></i> Escáner
                            </a>
                        </li>
                        <?php else :?>
                            <li class="nav__item">
                            <a href="index.php?pagina=escaner" class="nav__link">
                                <i class="uil uil-qrcode-scan nav__icon"></i> Escáner
                            </a>
                        </li>
                        <?php endif?>
                        <?php else : ?>

                            <li class="nav__item">
                            <a href="index.php?pagina=inicio" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i> Inicio
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="index.php?pagina=usuarios" class="nav__link"> 
                                <i class="uil uil-user nav__icon"></i> Usuarios
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="index.php?pagina=pagos" class="nav__link">
                                <i class="uil uil-money-bill nav__icon"></i> Pagos
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="index.php?pagina=estadisticas" class="nav__link">
                                <i class="uil uil-chart-line nav__icon"></i> Estadísticas
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="index.php?pagina=areas" class="nav__link">
                                <i class="uil uil-dumbbell nav__icon"></i> Áreas
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="index.php?pagina=escaner" class="nav__link">
                                <i class="uil uil-qrcode-scan nav__icon"></i> Escáner
                            </a>
                        </li>
                        <?php endif ?>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
            </nav>
            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </div>

        <!--================ MENU PARA COMPUTADORAS ==================-->
        <div class="rectangulo" id="rectangulo" style="display: block;">
            <i class="uil uil-house-user"></i> Inicio
        </div>    
        <script>function ocultarRectangulo() {
            var midiv = document.getElementById('rectangulo');
            if (window.innerWidth <= 760) {
                midiv.style.display = "none";
            } else {
                midiv.style.display = "block";
            }
        }
          // Llamar a la función al cargar la página
            ocultarRectangulo();
          // Agregar evento de redimensionamiento de ventana
        window.addEventListener("resize", ocultarRectangulo);</script>

        <div class="principal">
            <div class="menues" id="menu" style="display: block;">
                <script>
                    function ocultarDivEnCelular() {
                        var innerDiv = document.getElementById('menu');
                        if (window.innerWidth <= 767) {
                            innerDiv.style.display = "none";
                        } else {
                            innerDiv.style.display = "block";
                        }
                    }
                    
                    // Llamar a la función al cargar la página
                    ocultarDivEnCelular();
                    
                    // Agregar evento de redimensionamiento de ventana
                    window.addEventListener("resize", ocultarDivEnCelular);
                </script>
                <nav>
                    <ul>
                        <?php if (isset($_GET["pagina"])) : ?>


                            <?php if ($_GET["pagina"] == "usuarios") : ?>
                                <li class="opciones">
                            <a href="index.php?pagina=inicio"><i class="uil uil-airplay"></i>
                            </i> Inicio</a></li><br>
                            <?php else : ?>
                        <li class="opciones">
                            <a href="index.php?pagina=usuarios"><i class="uil uil-users-alt"></i>
                            </i> Usuarios</a></li><br>
                            <?php endif ?>

                            <?php if ($_GET["pagina"] == "pagos") : ?>
                                <li><a href="index.php?pagina=inicio"><i class="uil uil-airplay"></i>
                            Inicio</a></li><br>
                                <?php else : ?>
                        <li><a href="index.php?pagina=pagos"><i class="uil uil-money-bill-stack"></i>
                            Pagos</a></li><br>
                                    <?php endif ?>

                            <?php if ($_GET["pagina"] == "estadisticas") : ?>
                                <li><a href="index.php?pagina=inicio"><i class="uil uil-airplay"></i>
                            Inicio</a></li><br>
                            <?php else : ?>
                        <li><a href="index.php?pagina=estadisticas"><i class="uil uil-comparison"></i>
                            Estadísticas</a></li><br>
                                <?php endif ?>

                            <?php if ($_GET["pagina"] == "areas") : ?>
                                <li><a href="index.php?pagina=inicio"><i class="uil uil-airplay"></i>
                            Inicio</a></li><br>
                            <?php else :?>
                        <li><a href="index.php?pagina=areas"><i class="uil uil-dumbbell"></i>
                            Áreas</a></li><br>
                            <?php endif ?>

                            <?php if ($_GET["pagina"] == "escaner") :?>
                                <li><a href="index.php?pagina=inicio"><i class="uil uil-airplay"></i>
                            Inicio</a></li>
                            <?php else :?>
                        <li><a href="index.php?pagina=escaner"><i class="uil uil-qrcode-scan"></i>
                            Escáner</a></li>
                            <?php endif;?>
                            <?php else : ?>

                                <li class="opciones">
                            <a href="index.php?pagina=usuarios"><i class="uil uil-users-alt"></i>
                            </i> Usuarios</a></li><br>
                        <li><a href="index.php?pagina=pagos"><i class="uil uil-money-bill-stack"></i>
                            Pagos</a></li><br>
                        <li><a href="index.php?pagina=estadisticas"><i class="uil uil-comparison"></i>
                            Estadísticas</a></li><br>
                        <li><a href="index.php?pagina=areas"><i class="uil uil-dumbbell"></i>
                            Áreas</a></li><br>
                        <li><a href="index.php?pagina=escaner"><i class="uil uil-qrcode-scan"></i>
                            Escáner</a></li>
                            <?php endif ?>
                    </ul>
                </nav>
            </div>
        <!-- =================== Secciones ==================-->
            <div class="secciones" id="secciones" style="width: 70%;">
                <?php 
                if (isset($_GET["pagina"])) {

                    if ($_GET["pagina"] == "inicio" ||
                        $_GET["pagina"] == "usuarios" ||
                        $_GET["pagina"] == "pagos" ||
                        $_GET["pagina"] == "estadisticas" ||
                        $_GET["pagina"] == "areas" ||
                        $_GET["pagina"] == "escaner")
                        {
                            include "Paginas/" . $_GET["pagina"] . ".php";
                } else {
                    include "Paginas/error404.php";
                }
            } else {
                include "Paginas/inicio.php";
            }
                ?>
            </div>
            </div>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
        
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        

        <!--==================== SWIPER JS ====================-->
        <script src="http://localhost/Control%20Mates/JS/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="http://localhost/Control%20Mates/JS/principal.js"></script>
    </body>
</html>