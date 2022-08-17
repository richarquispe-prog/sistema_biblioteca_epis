<?php
//METODOS Y CONSULTAS PARA ELIMINAR LIBRO


include '../Model/conexion.php';
	$n_control = $_GET['n_control']; //variable que tendra el metodo _GET para obtener el numero de control del libro de la base de datos.
	

	$eliminar="DELETE  FROM libro  WHERE  n_control=$n_control"; //consulta sql para eliminar libro de la base de datos

	//PVERIFICAR LA CONEXION Y SI  ES TRUE NS ENVIARA UN MENSAJE EN UN ALERT

	if(mysqli_query($conexion,$eliminar)){ //condicional para eliminar libro
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro  </div>";
             header("location: ../View/libros/acervo.php"); //si el libro se elimina nos envia al ACERBO BIBLIOGRAFICO.

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>