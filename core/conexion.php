	<?php
		error_reporting(E_ERROR);

		function crearConexion(){
			$conexion = mysql_connect("localhost", "root", "", "prog_web_2");
			mysql_select_db($db);
			return $conexion;
		}

		function cerrarConexion($conexion){
			if ($conexion) {
				mysql_close($conexion);	
			}
		}

		function ejecutarQuery($query){
			if (count($query) > 0) {
				crearConexion();
				$retorno = mysql_query($query);
				$retorno = mysql_fetch_array($retorno, MYSQL_ASSOC);
				echo $retorno;
				cerrarConexion();
				return $retorno;
			}

			return false;
		}

		function obtenerEntidad($nombreTabla, $condicion){
			$query = 'SELECT * FROM `' .$nombreTabla .'`';
			if(isset($condicion)){
				$query .= " WHERE ";
				foreach ($condicion as $key => $value) {
					$query .= '`'.$key . "`=" . $value; 
				}
			}
			return ejecutarQuery($query);
		}
	?>