<?php
	
include '../Model/conexion.php';//LLAMANDO A LA CONEXION CON LA BASE DE DATOS

$n_controls= $_GET['n_control']; 
//CONSULTA SQL PARA EDITAR LIBRO 
$sql="SELECT * from libro WHERE n_control='$n_controls'";
$result=mysqli_query($conexion,$sql);
//VERIFICA LA CONEXION Y SI  ES TRUE NOS ENVIARA A KA SIGUIENTE PESTAÑA DE EDITAR LIBRO

while($mostrar=mysqli_fetch_array($result)){

    //include("../View/libros/ed_libro.php");
    //print_r($mostrar);


    include("../View/libros/ed_libro.php");

}

?>