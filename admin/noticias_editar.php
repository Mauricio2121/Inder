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
	
	$consulta = "select * from jp_noticias where jpnot_id = $id";
	$consultar_noticias = $conexion_bd->consultar_tabla($consulta, $link);
	if($conexion_bd->recorrer_consulta_tabla($consultar_noticias)) {
		$jpnot_id = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_id");
		$jpnot_titulo = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_titulo");
		$jpnot_resumen = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_resumen");
		$jpnot_detalle = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_detalle");
		$jpnot_imagen1 = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_imagen1");
		$jpnot_imagen2 = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_imagen2");		
		$jpnot_fecha = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_fecha");
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
		if(document.getElementById("jpnot_titulo").value == "") {   
            mensaje = mensaje + "\nTitulo de la noticia";
            contador = 1;
        }        
        if(document.getElementById("jpnot_fecha").value == "") {   
            mensaje = mensaje + "\nFecha de la noticia";
            contador = 1;
        }
		if(contador == 1) {
			alert("Datos Incompletos, por favor ingrese:" + mensaje);
		}
		else {
			document.getElementById("actualizar").value = 1;
			document.getElementById("formulario_noticias").submit();
		}
	}
</script>
<!-- Libreria Ckeditor -->
<script language="javascript" src="library/ckeditor/ckeditor.js" type="text/javascript"></script>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
<div id="formulario">
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />    <form name="formulario_noticias" id="formulario_noticias" action="noticias_actualizar.php" method="post" enctype="multipart/form-data">
    <table width="432" border="0" cellspacing="0" cellpadding="0">      
      <tr>            
        <td><u>T</u>itulo</td>
        <td><input type="text" name="jpnot_titulo" id="jpnot_titulo" size="40" accesskey="t" tabindex="1" value="<?php echo $jpnot_titulo; ?>" /></td>
      </tr>
      <tr>
        <td width="152"><u>R</u>resumen</td>
        <td width="280"><textarea name="jpnot_resumen" id="jpnot_resumen" class="ckeditor" cols="50" rows="4" accesskey="r" tabindex="2"><?php echo $jpnot_resumen; ?></textarea></td>
      </tr>
      <tr>
        <td width="152"><u>D</u>etalle</td>
        <td width="280"><textarea name="jpnot_detalle" id="jpnot_detalle" class="ckeditor" cols="50" rows="4" accesskey="d" tabindex="3"><?php echo $jpnot_detalle; ?></textarea></td>
      </tr>
      <tr>            
        <td><u>F</u>echa</td>
        <td><input type="text" name="jpnot_fecha" id="jpnot_fecha" size="40" accesskey="f" tabindex="4" value="<?php echo $jpnot_fecha; ?>" /></td>
      </tr> 
      <tr>            
        <td><u>I</u>magen 1</td>
        <td><input type="file" name="jpnot_imagen1" id="jpnot_imagen1" size="40" accesskey="i" tabindex="5" /><br /><img src="../images/noticias/<?php echo $jpnot_imagen1; ?>" width="50" height="50" border="0" /></td>
      </tr>
      <tr>            
        <td><u>I</u>magen 2</td>
        <td><input type="file" name="jpnot_imagen2" id="jpnot_imagen2" size="40" accesskey="i" tabindex="6" /><br /><img src="../images/noticias/<?php echo $jpnot_imagen2; ?>" width="50" height="50" border="0" /></td>
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
    <input type="hidden" name="jpnot_id" id="jpnot_id" value="<?php echo $jpnot_id; ?>" />
    </form>
</div><!-- end of div formulario -->
</body>
</html>