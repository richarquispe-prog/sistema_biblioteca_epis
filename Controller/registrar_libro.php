<?php
include '../Model/conexion.php';
if ($_POST) {
	$deweweys=$_POST["dewewey"];//Metodo post para recibir informacion del dewey
	$titulos=$_POST["titulo"];//Metodo post para recibir informacion del titulo
	$autors=$_POST["autor"];//Metodo post para recibir informacion del autor
	$fechas=$_POST["fecha"];//Metodo post para recibir informacion de la fecha
	$editorials=$_POST["editorial"];	//Metodo post para recibir informacion del  editorial 
	$fecha_ads=$_POST["fecha_ad"];//Metodo post para recibir informacion de la fecha add
	$archivo =$_FILES['imagen']['tmp_name'];//se guarda con file y se garda temporalmente
	$destino = "../resources/imagenes/".$_FILES['imagen']['name'];//carpeta de guardar
	move_uploaded_file($archivo, $destino);
	$estados=$_POST["estado"];
	$generos=$_POST["genero"];
	$formatos=$_POST["formato"];
	$archivo1 =$_FILES['pdf']['tmp_name'];
	$destino1 = "../resources/pdf/".$_FILES['pdf']['name'];
	move_uploaded_file($archivo1, $destino1);
	$insertar="INSERT INTO libro(n_control, dewey, titulo, autor, fecha_edicion, editorial, cantidad, fecha_adquisicion, imagen, estado, genero, formato,PDF) VALUES('', '$deweweys','$titulos','$autors','$fechas','$editorials','1','$fecha_ads', '$destino','$estados','$generos','$formatos','$destino1')";
	if(mysqli_query($conexion,$insertar)){
		/*echo" dato guardado";*/		
		// $alert = "<div  style='color: green;'>libro registrado </div>";
        // echo $alert;
        header("location: ../View/libros/acervo.php");
	}else{
		
		echo "error";
	}
}
?>
