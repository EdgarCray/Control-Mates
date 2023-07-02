<div class="botones">
                <a href="index.php?pagina=usuarios" class="btn btn-primary">Registrar</a>
                <a href="index.php?pagina=usuarios.mostrar" class="button">Mostrar</a>
                </div>
                <div class="formUsuarios">
                <script>function cambiarTamaño() {
            var midiv = document.getElementById('formUsuarios');
            if (window.innerWidth <= 767) {
                midiv.style.width = 100;
            } 
        }
          // Llamar a la función al cargar la página
            cambiarTamaño();
          // Agregar evento de redimensionamiento de ventana
        window.addEventListener("resize", cambiarTamaño);</script>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="ml-2">
                        </div>
                        <div class="col-sm-4">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="ml-2">
                        </div>
                        <div class="col-sm-4">
                            <label for="edad">Edad:</label>
                            <input type="number" class="ml-2">
                        </div>
                        <div class="col-sm-4">
                            <label for="telefono">Número de teléfono:</label>
                            <input type="text" class="ml-2">
                        </div>
                        <div class="col-sm-4">
                            <label for="correo">Correo Electrónico:</label>
                            <input type="text" class="ml-2">
                        </div>
                        <div class="col-sm-4">
                            <label for="nacimiento">Fecha de Nacimiento:</label>
                            <input type="date" class="ml-2">
                        </div><br>
                        <div class="col-sm-4">
                            <label for="genero">Género:</label>
                            <select class="ml-2">
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="area">Área:</label>
                            <input type="text" class="ml-2">
                        </div> <br>
                        <div class=" text-center"><br>
                        <a href="#" class="button">Mostrar</a><br>
                        <p>.</p>
                        </div>
                    </div>
                </div>