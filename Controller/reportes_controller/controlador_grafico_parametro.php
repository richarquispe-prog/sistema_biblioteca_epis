<?php 
    require 'conexion.php';//llando a la conexion 
    require 'modelo_grafico.php';// llmando al archivo modelo grafico 
    $fechainicio = $_POST['inicio'];
    $fechafin = $_POST['fin'];
    $MG = new Modelo_Grafico;
    $consulta = $MG -> TraerDatosGraficoParametro($fechainicio, $fechafin);

    echo json_encode($consulta);


?>