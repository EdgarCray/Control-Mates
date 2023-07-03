<div class="botones">
                <a href="index.php?pagina=pagos" class="btn btn-primary" style="background-color: #FFE7A0; margin-right:70%">Agregar +</a>
                <a href="index.php?pagina=pagos.mostrar" class="button" style="background-color: #D5DBDB;">Deshabilitar</a>
                </div>
<div class="card-container">
    <div class="card" style="width: 20%; height:50%">
        <h2 id="titulo__tarjeta">Área General</h2>
    </div>
    <div class="card" style="width: 20%; height:50%">
        <h2 id="titulo__tarjeta">Zumba</h2>
    </div>
    <div class="card" style="width: 20%; height:50%">
        <h2 id="titulo__tarjeta">Taekwondo</h2>
    </div>
    <div class="card" style="width: 20%; height:50%">
        <h2 id="titulo__tarjeta">Área General</h2>
    </div>
    <div class="card" style="width: 20%; height:50%">
        <h2 id="titulo__tarjeta">Área General</h2>
    </div> <div class="card" style="width: 20%; height:50%">
        <h2 id="titulo__tarjeta">Área General</h2>
    </div>
        <script>
        function cambiarTamaño (){
        var secciones = document.getElementById('secciones');
        if (window.innerWidth <= 767) {
            secciones.style.width = "90%";
            secciones.style.marginLeft = "10px";
        }
    }
    cambiarTamaño();
    // Agregar evento de redimensionamiento de ventana
    window.addEventListener("resize", cambiarTamaño);
    </script>
    </div>
  </div>