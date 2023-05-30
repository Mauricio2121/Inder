<?php	
	header('Content-Type: text/html; charset=UTF-8');
    include("library/clase_sesion.php");
	$sesion = new sesion();
	$sesion->abrir_sesion("administrador");
	$nivel_acceso = $_SESSION["nivelacceso_sesion"];
	$id_usuario = $_SESSION["id_usuario_sesion"];
	$usuario = $_SESSION["usuario"];
	
	if($nivel_acceso != 1)
        $_SESSION["autentificado"] = 0;
    $sesion->comprobar_seguridad_sesion($_SESSION["autentificado"], "index.php");

    include("library/clase_conexion_bd.php");
    $conexion_bd = new conexion_bd();
    $link = $conexion_bd->conectar_bd();
	extract($_POST);	
	
	if($actualizar == 1) {
		$campos_consulta = "";
		$condicion = "jpart_id = $jpart_id";
		
		if($jpart_titulo != "") {
			if($campos_consulta != "")
				$campos_consulta .= ", jpart_titulo = '".$jpart_titulo."'";	
			else
				$campos_consulta .= "jpart_titulo = '".$jpart_titulo."'";		
		}
		if($jpart_detalle != "") {
			if($campos_consulta != "")
				$campos_consulta .= ", jpart_detalle = '".$jpart_detalle."'";	
			else
				$campos_consulta .= "jpart_detalle = '".$jpart_detalle."'";		
		}			
		if($jpart_fecha != "") {
			if($campos_consulta != "")
				$campos_consulta .= ", jpart_fecha = '".$jpart_fecha."'";
			else
				$campos_consulta .= "jpart_fecha = '".$jpart_fecha."'";		
		}			
		
		$consulta = "update jp_articulos set $campos_consulta where $condicion";
		if(@$actualizar_articulos = $conexion_bd->consultar_tabla($consulta, $link)) {
			//$mensaje .= '<img src="images/registro_actualizado.png" width="440" height="440" border="0" />';
			$mensaje .= "DATOS ACTUALIZADOS";
		}
		else {
			//$mensaje .= '<img src="images/registro_noactualizado.png" width="440" height="440" border="0" />';
			$mensaje .= "DATOS NO ACTUALIZADOS";
		}				
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo Administrador</title>
<!-- Libreria General -->
<link rel="stylesheet" type="text/css" href="library/estilos.css" media="screen"/>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
<div id="formulario">
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br /><?php echo $mensaje; ?>
</div><!-- end of div formulario -->
</body>
</html>