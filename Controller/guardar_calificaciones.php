<?php
include '../Model/conexion.php';
if ($_POST) {
 $codigo=$_POST["codigo"];
 $calificar=$_POST["calificacion"];
 $caracteristica=$_POST["caracteristica"];
 $comentario=$_POST["comentario"];
$insertar = "INSERT INTO calificacion (codigo,calificar,caracteristica,comentario)
                           VALUES  ('$codigo','$calificar','$caracteristica','$comentario') ";

$query = mysqli_query($conexion, $insertar);

if($query){

   echo "<script> alert('se registro con exito');
 
   location: '../View/calificacion.php';
   </script>";

}else{
    echo "<script> alert('upss ,ucurrio un error ');
    location.href ='../View/calificacion.php';
    </script>";
}
}
?>