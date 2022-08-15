<?php

session_start();

if (!isset($_SESSION['user']) ){
	header("Location: ../");
}
include('../Model/conexion.php'); 
include('includes/menu_estudiante.php');

?>
<div class="container-fluid">
    <div id="main-containe">
        <div class="card shadow mb-4">
            <div class="container">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label"><strong>Codigo de estudiante</strong>
                            </label>
                            <!-- <input type="email" class="form-control" id="inputMail" required pattern="[a-z]{1,15}" > -->
                            <input type="number" class="form-control" name="codigo" required="required"
                                oninvalid="setCustomValidity('Díganos tu email')" oninput="setCustomValidity('')">
                        </div>
                        
                       
                            
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><p> <strong>¿Como calificarias tu experencia general a la biblioteca?</strong> </p></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" satisfactoria, Insatisfactoria, Neutra">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><p> <strong><p> <strong> ¿Cuales son los 2 caracteristicas que te gusto de la biblioteca?</strong> </p></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Diseño,Funcionabilidad">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"><strong>Comentario o sugerencia</strong>
                            </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                required></textarea>
                        </div>
                       
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>