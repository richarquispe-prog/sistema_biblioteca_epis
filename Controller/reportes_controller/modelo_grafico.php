
<?php
class Modelo_Grafico{
	
	function TraerDatosGraficoBar(){ // FUNCION DONDE HAREMOS LAS CONSULTAS sql PARA OBTENER DATOS DEL LIBRO DE LA BASE DE DATOS
		require ("../../Model/conexion.php");
		$sql = "SELECT * FROM libro JOIN boleta ON libro.n_control = boleta.n_control";	// CONSULTA SQL PARA LA TABLA LIBRO
		$arreglo = mysqli_query($conexion, $sql); //ENVIAMOS LA CONSULTA QUE ALMACENAMOS EN LA VARIABLE $sql 

			while ($consulta_VU = mysqli_fetch_array($arreglo)) {
				$arreglo_1[] = $consulta_VU;
			}
			return $arreglo_1;
		//}
	}

	function TraerDatosGraficoParametro($fechainicio, $fechafin){
		//consulta para mostrar los libros 
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