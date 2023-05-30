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
	
	$consulta = "select * from jp_banner where jpban_id = $id";
	$consultar_banners = $conexion_bd->consultar_tabla($consulta, $link);
	if($conexion_bd->recorrer_consulta_tabla($consultar_banners)) {
		$jpban_id = $conexion_bd->mostrar_campo_consulta_tabla("jpban_id");		
		$jpban_detalle = $conexion_bd->mostrar_campo_consulta_tabla("jpban_detalle");
		$jpban_url = $conexion_bd->mostrar_campo_consulta_tabla("jpban_url");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo Administrador</title>
<!-- Libreria General -->
<link rel="stylesheet" type="text/css" href="library/estilos.css" media="screen"/>
<script language="javascript" src="../../library/js/funciones.js" type="text/javascript"></script>
<script type="text/javascript">
	function validar_formulario() {
		var contador = 0;
		var mensaje = "";
		if(document.getElementById("jpban_detalle").value == "") {	
			mensaje = mensaje + "\nDetalle del banner";
			contador = 1;
		}
		if(document.getElementById("jpban_url").value == "") {	
			mensaje = mensaje + "\nLink del banner";
			contador = 1;
		}
		if(contador == 1) {
			alert("Datos Incompletos, por favor ingrese:" + mensaje);
		}
		else {
			document.getElementById("actualizar").value = 1;
			document.getElementById("formulario_banners").submit();
		}
	}
</script>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
<div id="formulario">
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />
    <form name="formulario_banners" id="formulario_banners" action="banners_actualizar.php" method="post">
    <table width="432" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><u>D</u>etalle</td>
        <td><textarea name="jpban_detalle" id="jpban_detalle" cols="50" rows="4" accesskey="d" tabindex="1" ><?php echo $jpban_detalle; ?></textarea></td>
      </tr>
      <tr>
        <td><u>U</u>rl</td>
        <td><input type="text" name="jpban_url" id="jpban_url" accesskey="u" tabindex="2" size="50" value="<?php echo $jpban_url; ?>" /></td>
      </tr>     
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><a href="#" onclick="validar_formulario();">GUARDAR</a></td>
      </tr>
    </table>
    <input type="hidden" name="actualizar" id="actualizar" value="" />
    <input type="hidden" name="jpban_id" id="jpban_id" value="<?php echo $jpban_id; ?>" />
    </form>
</div><!-- end of div formulario -->
</body>
</html>