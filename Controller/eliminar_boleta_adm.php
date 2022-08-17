<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include '../Model/conexion.php';
	$codigo = $_GET['codigo_boleta'];
	
// CONSULTA SQL PARA PARA VER LA LISTA DE LAS BOLETAS 
	$eliminar="DELETE  FROM boleta  WHERE  codigo_boleta=$codigo";

	//PVERIFICAR LA CONEXION Y SI  ES TRUE NS ENVIARA UN MENSAJE EN UN ALERT

	if(mysqli_query($conexion,$eliminar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro actualizado </div>";
             header("location: ../View/boletas/boletas_admi.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>