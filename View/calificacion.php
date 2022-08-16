<?php

session_start();

if (!isset($_SESSION['user']) ){
	header("Location: ../");
}

include('includes/menu_estudiante.php');

?>
<div class="container-fluid">
    <div id="main-containe">
        <div class="card shadow mb-4">
            <div class="container">
                <div class="card-body">
                    <!-- FORMULARIO PARA INGRESAR LOS DATOS A TRAVES DE LOS IMPUTS  -->
                    <form  action="../../Controller/guardar_calificaciones.php" method="post" enctype="multipart/form-data">
                        <div  class="mb-3">
                            <label for="exampleCodigo" class="form-label"><strong>Codigo de estudiante</strong></label>
                            <input type="number" name="codigo" class="form-control" id="exampleCodigo">
                        </div>
                        <div class="mb-3">
                            <label for="calificacion" class="form-label"><strong>¿Como calificarias tu experencia general a la biblioteca?</strong></label>
                            <input type="text" name="calificacion"  class="form-control"  placeholder=" satisfactoria, Insatisfactoria, Neutra"id="examplecalificacion">
                        </div>
                        <div class="mb-3">
                            <label for="caracteristica" class="form-label"><strong> ¿Cuales son los 2 caracteristicas que te gusto de la biblioteca?</strong></label>
                            <input type="text" name="caracteristica" class="form-control"placeholder="Diseño,Funcionabilidad" id="caracteristicas">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1"><strong>Comentario o sugerencia</strong>
                            </label>
                            <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"
                                required></textarea>
                        </div>
                        <!-- BUTTON PARA ENVIAR LOS DATOS DE ESTE FORMULARIO -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
