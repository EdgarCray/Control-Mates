<div class="botones">
    <a href="index.php?pagina=usuarios" class="btn btn-primary" style="background-color: #D5DBDB;">Registrar</a>
    <a href="index.php?pagina=usuarios.mostrar" class="button" style="background-color: #FFE7A0;">Mostrar</a>
</div>
<div class="formUsuarios">
    <script>
        function cambiarTamaño() {
            var midiv = document.getElementById('formUsuarios');
            if (window.innerWidth <= 767) {
                midiv.style.width = 100;
            }
        }
        // Llamar a la función al cargar la página
        cambiarTamaño();
        // Agregar evento de redimensionamiento de ventana
        window.addEventListener("resize", cambiarTamaño);
    </script>
    <div class="row">
        <div class="col-sm-4">
            <label for="mostrarU">Mostrar Usuarios:</label>
            <input type="text" id="inputUsuario">
        </div>
        <label for="">Usuarios</label>
        <table class="tablaUsuarios">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Área</th>
                    <th></th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Activo</td>
                    <td>General</td>
                    <td><div class="btns">
                        <a href="index.php?pagina=usuarios.editar" class="button"><i class="uil uil-edit"></i></a>
                        <a href="#" class="button"><i class="uil uil-trash-alt"></i></a>
                    </div></td>
                </tr>
                <tr>
                    <td>Alan</td>
                    <td>Inactivo</td>
                    <td>Zumba</td>
                    <td><div class="btns">
                        <a href="index.php?pagina=usuarios.editar" class="button"><i class="uil uil-edit"></i></a>
                        <a href="#" class="button"><i class="uil uil-trash-alt"></i></a>
                    </div></td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>Activo</td>
                    <td>General</td>
                    <td><div class="btns">
                        <a href="index.php?pagina=usuarios.editar" class="button"><i class="uil uil-edit"></i></a>
                        <a href="#" class="button"><i class="uil uil-trash-alt"></i></a>
                    </div></td>
                </tr>
            </tbody>
        </table>
        <div class=" text-center"><br>
            <a href="#" class="button">Mostrar</a><br>
            <p>.</p>
        </div>
    </div>
</div>