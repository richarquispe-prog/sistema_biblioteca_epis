
<?php
//METODOS Y CONSULTAS PARA ACTUALIZAR LIBRO

//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include '../Model/conexion.php';
	$n_controls = $_POST['n_control']; //variable que contiene el metodo _POST que hará que al editar libro de guarde la actualización
	$deweweys = $_POST['dewewey'];
	$titulos=$_POST['titulo'];
	$autors=$_POST['autor'];
	$fechas=$_POST['fecha'];
	$editorials=$_POST['editorial'];
	$cantidads=$_POST["cantidad"];
	$fecha_ads=$_POST['fecha_ad'];
	$imagens=$_POST["imagen"];
	$estados=$_POST['estado'];
	$generos=$_POST['genero'];
	$formatos=$_POST['formato'];
	$PDF=$_POST['PDF'];
	//CONSULTAS  SQL PARA ACTUALIZAR LOS DATOS QUE S VA MODIFICAR DEL LIBRO EXISTENTE 
	$actualizar="UPDATE  libro SET  dewey='$deweweys',titulo='$titulos',autor='$autors', fecha_edicion='$fechas',editorial='$editorials',cantidad='$cantidads',fecha_adquisicion='$fecha_ads',imagen='$imagens',estado='$estados',genero='$generos',formato='$formatos',PDF='$PDF' WHERE n_control=$n_controls";

	//FUNCION PARA VER SI LA CONSULTA SE REALIZO CORRECTAMENTE 
	if(mysqli_query($conexion,$actualizar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro actualizado </div>";
             header("location: ../View/libros/acervo.php");

	}else{ // SI ALHO VA MAL EN LA CONSULTA NOS ENVIARA UNMENSAJE DE ERROR 
		/*mysqli_error();*/
		echo"error";
	}
?>