<?php	
	// Clase que manipula la conexión con la base de datos
	class conexion_bd {
		var $servidor;
		var $puerto;
		var $base_datos;
		var $usuario;
		var $clave;
		var $conexion_base_datos;
		var $resultado_consulta_tabla;
		var $valores_consulta_tabla;
		
		// Constructor
		function conexion_bd() {
			$this->servidor = "localhost";
			$this->puerto = "3306"; // Mysql			
			$this->base_datos = "indersan_inderbd";
			$this->usuario = "indersan_user";
			$this->clave = "Inder@2014";
		}
	
		// Funcion para abrir la conexion con la base de datos
		/*function conectar_bd() {
			if(!($this->conexion_base_datos = mysql_connect($this->servidor, $this->usuario, $this->clave))) {
				echo "Error concectando con el servidor";
				exit();									
			}
			if(!mysql_select_db($this->base_datos, $this->conexion_base_datos)) {
				echo "Error seleccionando la base de datos.";
    	  		exit();
			}
			return $this->conexion_base_datos; 
		}
		*/
		
		function conectar_bd(){
    try {
        $conexion = new PDO('puerto:host=servidor;dbname=base_datos', 'usuario', 'clave');
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}
	
		
		// Funcion para cerrar la conexion con la base de datos
		function cerrar_conexion_bd($link) {
			unset($link);
			mysql_close($link);
			return true;
		}
		
		
		
		// Funcion para realizar una consulta sql
		function consultar_tabla($sql, $conexion) {			
			$this->resultado_consulta_tabla = mysqli_query($sql, $conexion);			
			return $this->resultado_consulta_tabla;
		}
		
		// Funcion para obtener el resultado de una consulta sql
		function recorrer_consulta_tabla($resultado) {			
			$this->valores_consulta_tabla = mysqli_fetch_array($resultado);
			return $this->valores_consulta_tabla;
		}
		
		// Funcion para obtener el valor de los campos del resultado de una consulta sql
		function mostrar_campo_consulta_tabla($campo) {
			return $this->valores_consulta_tabla[$campo];			
		}
		
		// Funcion para obtener el numero de registros de una consulta sql
		function numero_registros_consulta_tabla($resultado) {
			$this->cantidad_consulta_tabla = mysqli_num_rows($resultado);
			return $this->cantidad_consulta_tabla;
		}
	}	
?>