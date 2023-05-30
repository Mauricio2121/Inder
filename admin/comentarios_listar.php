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
	
	$consulta = "select * from jp_comentarios order by jpcom_id asc";
	$consultar_comentarios = $conexion_bd->consultar_tabla($consulta, $link);
	$numero_total = $conexion_bd->numero_registros_consulta_tabla($consultar_comentarios);	
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
<a href="comentarios_ingresar.php" target="_parent" title="Nuevo usuario">NUEVO COMENTARIO</a><br /><br />
    <a href="menu_principal.php">IR AL MENU PRINCIPAL</a>
<table id="tabla_listar">
    <tr style="background-color:#f58634;"><td width="281">ID</td><td width="162">AUTOR</td><td width="106">&nbsp;</td></tr>
    <?php
		$i = 1; 
		while($conexion_bd->recorrer_consulta_tabla($consultar_comentarios)) {
			$jpcom_id = $conexion_bd->mostrar_campo_consulta_tabla("jpcom_id");
			$jpcom_detalle = $conexion_bd->mostrar_campo_consulta_tabla("jpcom_detalle");
			$jpcom_autor = $conexion_bd->mostrar_campo_consulta_tabla("jpcom_autor");		
			echo '<tr style="font-size: 11px;"><td>'.$jpcom_id.'</td><td>'.$jpcom_autor.'</td><td><a href="comentarios_editar.php?id='.$jpcom_id.'" target="_parent"><img src="images/btn_editar.png" width="35" height="35" border="0" alt="Editar comentario" /></a>&nbsp;&nbsp;<a href="comentarios_eliminar.php?id='.$jpcom_id.'" target="_parent"><img src="images/btn_eliminar.png" width="35" height="35" border="0" alt="Eliminar comentario" /></a></td></tr>';
			$i ++;
		}
	?>
    </table>
</div><!-- end of div formulario -->
</body>
</html>