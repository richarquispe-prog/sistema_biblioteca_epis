<?php 
    require '../../Model/conexion.php';//llamando al aconexion 
    require 'modelo_grafico.php';
    $MG = new Modelo_Grafico;
    $consulta = $MG -> TraerDatosGraficoBar();

    echo json_encode($consulta);


?>