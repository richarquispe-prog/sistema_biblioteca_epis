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
                    <form action="../../Controller/guardar_calificaciones.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="number" name="codigo" class="form-control" id="exampleInputEmail1"
                               >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" name="calificacion" class="form-control" id="exampleInputPass">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" name="caracteristica" class="form-control" id="exampl">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" name="comentario" class="form-control" id="exampleInpu">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <form method="post" action="../Controller/guardar_calificaciones.php" class="row g-3">
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label"><strong>Codigo de estudiante</strong>
                            </label>
                            <!-- <input type="email" class="form-control" id="inputMail" required pattern="[a-z]{1,15}" > -->
<!-- <input type="number" class="form-control" name="codigo" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><p> <strong>¿Como calificarias tu experencia general a la biblioteca?</strong> </p></label>
                            <input type="text" class="form-control" name="calificacion" id="exampleInputPassword1" placeholder=" satisfactoria, Insatisfactoria, Neutra">
                        </div> -->

<!-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><p> <strong><p> <strong> ¿Cuales son los 2 caracteristicas que te gusto de la biblioteca?</strong> </p></label>
                            <input type="text" class="form-control" name="caracteristica" id="exampleInputPassword1" placeholder="Diseño,Funcionabilidad">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> <strong><p>Comentario o sugerencia</strong> </p></label>
                            <input type="text" class="form-control" name="comentario" id="exampleInputPassword1" placeholder="Diseño,Funcionabilidad">
                        </div> -->

<!-- <div class="form-group">
                            <label for="exampleFormControlTextarea1"><strong>Comentario o sugerencia</strong>
                            </label>
                            <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"
                                required></textarea>
                        </div> -->

<!-- <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form> --> -->