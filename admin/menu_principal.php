<?php 
	header('Content-Type: text/html; charset=UTF-8');
	include("library/clase_sesion.php");
	$sesion = new sesion();
	$sesion->abrir_sesion("administrador");
	$nivel_acceso = $_SESSION["nivelacceso_sesion"];
	$id_usuario = $_SESSION["id_usuario_sesion"];
	$usuario = $_SESSION["usuario"];	
	extract($_GET);	
	
	//if($nivel_acceso != 1)
	if($nivel_acceso > 2)
		$_SESSION["autentificado"] = 0;
	$sesion->comprobar_seguridad_sesion($_SESSION["autentificado"], "index.php");
	
	include("library/clase_conexion_bd.php");
	$conexion_bd = new conexion_bd();
	$link = $conexion_bd->conectar_bd();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo Administrador</title>
<link rel="stylesheet" type="text/css" href="library/estilos.css" media="screen"/>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
<div id="contenido">
	<div id="menu">        
        <a href="noticias_listar.php" target="_parent"><img src="images/img_noticias.png" width="208" height="126" border="0" /></a>
        <a href="archivos_listar.php" target="_parent"><img src="images/img_archivos.png" width="208" height="126" border="0" /></a>
        <br /><br />
        <a href="index.php">CERRAR SESI&Oacute;N</a>
    </div>
</div><!-- end of div contenido -->
</body>
</html>