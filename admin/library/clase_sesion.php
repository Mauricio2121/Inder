<?php	
	// Clase que manipula las sesiones
	class sesion {
		var $ultimo_acceso;		
		var $actual_acceso;
		var $tiempo_transcurrido;
		
		// Constructor
		function sesion() {
			return true;
		}
			
		function abrir_sesion($usuario) {
			// Inicializa la sesion
			session_name($usuario);			
			session_start();
			return true;			
		}
		
		// Funcion para comprobar la seguridad de la sesion
		function comprobar_seguridad_sesion($variable_comprobacion, $url_incorrecta) {
			if(!$variable_comprobacion) {
				header("Location:".$url_incorrecta);
				exit();
			}
			else {
				$this->ultimo_acceso = $_SESSION["ultimo_acceso"]; 
				$this->actual_acceso = date("Y-n-j H:i:s"); 
				$this->tiempo_transcurrido = (strtotime($this->actual_acceso)-strtotime($this->ultimo_acceso));
				/*if($this->tiempo_transcurrido >= 600) {
					//si pasaron 10 minutos o más 
					header("Location:".$url_incorrecta);
					exit();
				}
				else {
					$_SESSION["ultimo_acceso"] = $this->actual_acceso;					
					return true;
				}*/
			}
			return true;
		}		
		
		// Funcion para destruir una sesion
		function cerrar_sesion($usuario, $url_index) {
			// Destruye todas las variables de la sesión
			$_SESSION = array();
			// Destruye la variable de usuario de la sesion
			unset($_SESSION[$usuario]);
			// Destruye la sesion
			session_destroy();
			// Borra las cookies asociadas a la sesión con una petición http para el navegador
			/*if(isset($_COOKIE[$usuario])) {
				if(setcookie(session_name(), '', time()-3600, '/')) {
					header("Location:".$url_index);
					exit();
				}
			}*/
			return true;
		}
	}		
?>