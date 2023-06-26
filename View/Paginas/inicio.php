<div class="card-container">
    <div class="card">
      <h2 id="titulo__tarjeta">Nuevos Clientes</h2>
      <p>0</p>
    </div>
    <div class="card">
      <h2 id="titulo__tarjeta">Pagos Realizados</h2>
      <p>0</p>
    </div>
    <div class="card">
      <h2 id="titulo__tarjeta">Personas en el Gym</h2>
      <p>0</p>
    </div>
    <div class="card">
      <h2 id="titulo__tarjeta">Empleados</h2>
      <p>0</p>
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