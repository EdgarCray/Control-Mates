<div class="botones">
                <a href="index.php?pagina=pagos" class="btn btn-primary" style="background-color: #FFE7A0;">Registrar</a>
                <a href="index.php?pagina=pagos.mostrar" class="button" style="background-color: #D5DBDB;">Mostrar</a>
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
                            <input type="text" class="ml-2" style="width: 300px;">
                        </div>
                        
                        <div class="col-sm-4">
                            <label for="apellido">Apellido:</label>
                            <input type="text" class="ml-2" style="width: 300px;">
                        </div>
                        <div class="col-sm-4">
                            <label for="tipoPago">Tipo de pago:</label>
                            <select class="ml-2" style="width: 300px;">
                                <option value="1">Anual</option>
                                <option value="2">Mensual</option>
                                <option value="3">Quincenal</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="pago">Pago:</label>
                            <input type="number" class="ml-2" style="width: 300px;">
                        </div>
                        <div class="col-sm-4">
                            <label for="area">Área:</label>
                            <input type="text" class="ml-2" style="width: 300px;">
                        </div> <br>
                        <div class=" text-center"><br>
                        <a href="#" class="button">Enviar</a><br>
                        <p>.</p>
                        </div>
                    </div>
                </div>