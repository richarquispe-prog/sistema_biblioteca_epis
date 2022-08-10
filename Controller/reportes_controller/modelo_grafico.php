
<?php
class Modelo_Grafico{
	//private $conexion;
	//function __construct()
	//{
	//	require('../../Model/conexion.php');
	//	$this->conexion = new Conexion("localhost", "root", "", "bibliotecaepis");
	//	$this->conexion->conectar();
	//}



	function TraerDatosGraficoBar(){
		require ("../../Model/conexion.php");
		$sql = "SELECT * FROM libro JOIN boleta ON libro.n_control = boleta.n_control";	
		$arreglo = mysqli_query($conexion, $sql);
		//if ($consulta = mysqli_fetch_array($arreglo)) {

			while ($consulta_VU = mysqli_fetch_array($arreglo)) {
				$arreglo_1[] = $consulta_VU;
			}
			return $arreglo_1;
		//}
	}

	function TraerDatosGraficoParametro($fechainicio, $fechafin){
		$sql = "SELECT libro.titulo, boleta.fecha_entrega FROM libro JOIN boleta on libro.n_control	 = boleta.n_control";	
		$arreglo = array();
		if ($consulta = $this->conexion->conexion->query($sql)) {

			while ($consulta_VU = mysqli_fetch_array($consulta)) {
				$arreglo[] = $consulta_VU;
			}
			return $arreglo;
			$this->conexion->cerrar();	
		}
	}
}
?>