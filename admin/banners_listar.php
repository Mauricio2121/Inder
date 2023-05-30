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
	extract($_GET);
	
	$consulta = "select * from jp_banner where jpban_id = 1";
	$consultar_banners = $conexion_bd->consultar_tabla($consulta, $link);
	$numero_total = $conexion_bd->numero_registros_consulta_tabla($consultar_banners);	
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
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />
<table id="tabla_listar">
    <tr style="background-color:#f58634;"><td width="281">TITULO</td><td width="106">&nbsp;</td></tr>
    <?php
		$i = 1; 
		while($conexion_bd->recorrer_consulta_tabla($consultar_banners)) {
			$jpban_id = $conexion_bd->mostrar_campo_consulta_tabla("jpban_id");			
			$jpban_detalle = $conexion_bd->mostrar_campo_consulta_tabla("jpban_detalle");
			echo '<tr style="font-size: 11px;"><td>'.$jpban_detalle.'</td><td><a href="banners_editar.php?id='.$jpban_id.'" target="_parent"><img src="images/btn_editar.png" width="35" height="35" border="0" alt="Editar banner" /></a></td></tr>';
			$i ++;
		}
	?>
    </table>
</div><!-- end of div formulario -->
</body>
</html>