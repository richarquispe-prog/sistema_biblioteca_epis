<?php

session_start();

if (!isset($_SESSION['user']) ){
	header("Location: ../");
}
include('../Model/conexion.php'); 
include('includes/menu_estudiante.php');


?>


<?php 


if($_POST){
	$archivo =$_FILES['imagen']['tmp_name'];

	$destino = "../resources/imagenes/".$_FILES['imagen']['name'];
	move_uploaded_file($archivo, $destino);
}else{

	include_once('../Model/conexion.php');

	$sql="SELECT * from libro";
	$result=mysqli_query($conexion,$sql);
?>



<div class="card shadow mb-4" style="width: 97%">
    <div class="text-center sidebar-brand-text mx-2 ">
        <br>
        <h1>CATÁLOGO</h1>
    </div>
    <div class="container overflow-hidden">
        <div class="contenedor col-6">
            <input id="example" type="text" placeholder="Buscar libro" class="form-control"><br>

            <div class="portada ">


                <?php 
					while($mostrar=mysqli_fetch_array($result)){
						if ($mostrar['cantidad'] == 1) {
							$estado = '<span class="badge bg-success">Disponible</span>';
						} else {
							$estado = '<span class="badge bg-danger">Prestado</span>';
						}?>
                <!--<td>PORTADA</td>-->
                <?php											
						if (trim($mostrar["imagen"], 'imagenes/') == ""){ ?>
                <div class="port border bg-light portfolio-thumbnail" id="card">
                    <div class="border bg-light">
                        <img style="width: 100%" src='<?php echo "../resources/img/portada-no-disponible.jpg" ?>'>
                    </div>
                    <!--<td>TITULO DE LIBRO</td>-->
                    <div class="title">
                        <div class="name-libro">
                            <h6>
                                <p><?php echo $mostrar["titulo"]?></p>
                            </h6>
                        </div>
                        <div class="title-inf" id="example">
                            <span class="badge bg-warning text-dark"><?php echo $mostrar["formato"]?></span>
                            <span class="badge bg-secondary"><?php echo $mostrar["genero"]?></span>
                            <p><?php echo $estado; ?></p>
                        </div>
                        <div class="pie">
                            <?php
									if ($mostrar['cantidad'] == 1) {?>
                            <td><br><br>
                                <a href="visualizar.php?n_control= <?php echo $mostrar['n_control']?>"
                                    class="btn ">Solicitar Libro</a>
                            </td>

                            <?php } else {?>
                            <br><br><a class="btn">No Disponible</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
										}else{ 
									?>
                <!--<td>PORTADA IMAGEN</td>-->
                <div class="port p-3 border bg-light portfolio-thumbnail" id="card">
                    <div class=" border bg-light">
                        <img style="width: 100%" alt="Formato de imagen no compatible"
                            src=' <?php echo "../resources/".$mostrar["imagen"] ?>'>
                    </div>

                    <div class="title ">
                        <!--<td>TITULO DE LIBRO</td>-->
                        <div class="name-libro">
                            <h6>
                                <p><?php echo $mostrar["titulo"]?></p>
                            </h6>
                        </div>
                        <!--<td>INFORMACION DE LIBRO</td>-->
                        <div class=" title-inf">
                            <span class="badge bg-warning text-dark"><?php echo $mostrar["formato"]?></span>
                            <span class="badge bg-secondary"><?php echo $mostrar["genero"]?></span>
                            <p><?php echo $estado; ?></p>
                        </div>
                        <!--<td>SOLICITAR LIBRO</td>-->
                        <div class="pie">
                            <?php
									if ($mostrar['cantidad'] == 1) {?>
                            <td><br><br>
                                <a href="visualizar.php?n_control= <?php echo $mostrar['n_control']?>"
                                    class="btn ">Solicitar Libro</a>
                            </td>
                            <?php } else {?>
                            <td>
                                <br><br><a class="btn">No Disponible</a>

                            </td>
                            <?php } ?>
                        </div>


                    </div>
                </div>
                <?php } }}?>
            </div>

        </div>

    </div>
</div>

</div>






<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="../assets/jquery/jquery-3.3.1.min.js"></script>
<!--  <script src="popper/popper.min.js"></script>-->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

<!-- datatables JS -->
<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

<script type="text/javascript" src="../assets/formato.js"></script>
<?php include('includes/footer.php');?>

</body>

</html>