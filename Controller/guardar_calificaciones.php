<?php
include '../Model/conexion.php';
if ($_POST) {
 $codigo=$_POST["codigo"];
 $calificar=$_POST["calificacion"];
 $caracteristica=$_POST["caracteristica"];
 $comentario=$_POST["comentario"];
 //UTILIZAMOS LAS CONSULTAS DE MYSQL PAR AGREGAR LOS DATOS A LA TABLA CALIFICACION
$insertar = "INSERT INTO calificacion (codigo,calificar,caracteristica,comentario)
                           VALUES('$codigo','$calificar','$caracteristica','$comentario')";
//PASAMOS COMO PARAMETRO A MYSQLI_QUERY LA CONEXION Y LA VARIABLE INSERTAR

$query = mysqli_query($conexion, $insertar);
//PVERIFICAR LA CONEXION Y SI  ES TRUE NS ENVIARA UN MENSAJE EN UN ALERT
if($query){

   echo "<script> alert('se registro con exito');
   location.href ='../View/calificacion.php';
   </script>";
 //  header("location: ../View/calificacion.php");

}else{
    echo "<script> alert('upss ,ucurrio un error ');
    location.href ='../View/calificacion.php';
    </script>";
}
}
?>