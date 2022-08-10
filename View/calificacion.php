
<?php

session_start();

if (!isset($_SESSION['user']) ){
	header("Location: ../");
}
include('../Model/conexion.php'); 
include('includes/menu_estudiante.php');


?>
	<div class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Correo</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Escriba su correo institucional">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Codigo</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Escriba su codigo institucional">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">pregunta 1</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Escriba su apreciación">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Pregunta 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Escriba su apreciación">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Lugar</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-select">
      <option selected>Elegir...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Terminos y condiciones
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Calificar</button>
  </div>
</form>
</div>

