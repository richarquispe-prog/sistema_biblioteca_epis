<?php
	session_start();

	if (!isset($_SESSION['user']) ){
		header("Location: ../");
	}

	include('includes/menu_estudiante.php');
	include '../Model/conexion.php';

 ?>
<!--iconoooo-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->


<div class="container-fluid">
    <div id="main-containe">
        <!--<center><h1>BOLETAS</h1></center>-->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <center>
                    <h3>BOLETAS PENDIENTES</h3>
                </center>
            </div>
            <div class="container">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <td>CODIGO BOLETA </td>
                                    <td>DNI </td>
                                    <td>LIBRO</td>
                                    <td>NUMERO DE CONTROL</td>
                                    <td>FECHA DE ENTREGA</td>
                                    <td>FECHA DE DEVOLUCION</td>
                                    <td>Accion</td>
                                </tr>
                            </thead>
                            <?php
								$var=$_SESSION['DNI'];
							?>

                            <?php 
							$sql="SELECT boleta.codigo_boleta, boleta.DNI, libro.titulo, boleta.n_control, boleta.fecha_entrega, boleta.fecha_devolucion from boleta  INNER JOIN libro ON boleta.n_control = libro.n_control WHERE DNI=$var";
							$result=mysqli_query($conexion,$sql);					
							while($mostrar = mysqli_fetch_array($result)){		
							?>

                            <tr>
                                <td><?php echo $mostrar['codigo_boleta'] ?></td>
                                <td><?php echo $mostrar['DNI'] ?></td>
                                <td><?php echo $mostrar['titulo'] ?></td>
                                <td><?php echo $mostrar['n_control'] ?></td>
                                <td><?php echo $mostrar['fecha_entrega'] ?></td>
                                <td><?php echo $mostrar['fecha_devolucion'] ?></td>
                                <td><a target="_black"
                                        href="fpdf.php?codigo_boleta= <?php echo $mostrar['codigo_boleta'];?>"
                                        class="btn btn-outline-success">Boleta</a></td>

                            </tr>
                            <?php 
							}
							?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <!--  <script src="popper/popper.min.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>

    <script type="text/javascript" src="formato.js"></script>
    <br><br> <br><br>
    <br><br>

    <?php include('includes/footer.php');?>

    </body>

    </html>