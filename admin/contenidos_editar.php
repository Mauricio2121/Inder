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
	
	$consulta = "select * from jp_contenidos where jpcon_id = $id";
	$consultar_usuarios = $conexion_bd->consultar_tabla($consulta, $link);
	if($conexion_bd->recorrer_consulta_tabla($consultar_usuarios)) {
		$jpcon_id = $conexion_bd->mostrar_campo_consulta_tabla("jpcon_id");
		$jpcon_titulo = $conexion_bd->mostrar_campo_consulta_tabla("jpcon_titulo");		
		$jpcon_detalle = $conexion_bd->mostrar_campo_consulta_tabla("jpcon_detalle");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo Administrador</title>
<!-- Libreria General -->
<link rel="stylesheet" type="text/css" href="library/estilos.css" media="screen"/>
<script language="javascript" src="library/js/funciones.js" type="text/javascript"></script>
<script type="text/javascript">
	function validar_formulario() {
		var contador = 0;
		var mensaje = "";
		if(document.getElementById("jpcon_detalle").value == "") {	
			mensaje = mensaje + "\nDetalle del contenido";
			contador = 1;
		}
		if(contador == 1) {
			alert("Datos Incompletos, por favor ingrese:" + mensaje);
		}
		else {
			document.getElementById("actualizar").value = 1;
			document.getElementById("formulario_contenidos").submit();
		}
	}
</script>
<!-- Libreria Ckeditor -->
<script language="javascript" src="library/ckeditor/ckeditor.js" type="text/javascript"></script>
<script language="javascript" src="library/ckfinder/ckfinder.js" type="text/javascript"></script>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
<div id="formulario">
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />
    <form name="formulario_contenidos" id="formulario_contenidos" action="contenidos_actualizar.php" method="post">
    <table width="432" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="152">Titulo</td>
        <td width="280"><?php echo $jpcon_titulo; ?></td>
      </tr>
      <tr>
        <td><u>D</u>etalle</td>
        <!--<td><textarea name="jpcon_detalle" id="jpcon_detalle" class="ckeditor" accesskey="d" tabindex="1" ><?php echo $jpcon_detalle; ?></textarea></td>-->
        <td>
        	<textarea name="jpcon_detalle" id="jpcon_detalle"  accesskey="d" tabindex="1" ><?php echo $jpcon_detalle; ?></textarea>
        	<script type="text/javascript">
			  var editor=CKEDITOR.replace('jpcon_detalle',{customConfig : 'myconfig.js'});
			  //editor.setData('<p>pulsa en el <b>boton</b></p>');
			  CKFinder.setupCKEditor(editor, 'library/ckfinder/') ;
			</script>
        </td>
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
    <input type="hidden" name="jpcon_id" id="jpcon_id" value="<?php echo $jpcon_id; ?>" />
    </form>
</div><!-- end of div formulario -->
</body>
</html>