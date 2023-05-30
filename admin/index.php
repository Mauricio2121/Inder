<?php 	
	//header('Content-Type: text/html; charset=UTF-8');
	ini_set('allow_url_include', 1);
	include("library/clase_sesion.php");
	$sesion = new sesion();
	$sesion->abrir_sesion("administrador");
	if($_GET["usuario_invalido"] == "si")
		$url = "index.php?usuario_invalido=si";
	else
		$url = "index.php";
	$sesion->cerrar_sesion("administrador", $url);	
	$nivel_acceso = $_SESSION["nivelacceso_sesion"];
	$id_usuario = $_SESSION["id_usuario_sesion"];		
	
	include("library/clase_conexion_bd.php");
	$conexion_bd = new conexion_bd();
	$link = $conexion_bd->conectar_bd();
	extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo Administrador - Consulta Especialistas</title>
<!-- Libreria General -->
<script type="text/javascript">
	function validar_formulario() {
		var contador = 0;
		var mensaje = "";
		if(document.getElementById("usuario").value == "") {	
			mensaje = mensaje + "\nUsuario";
			contador = 1;
		}
		if(document.getElementById("clave").value == "") {	
			mensaje = mensaje + "\nContrase\xF1a";
			contador = 1;
		}		
		if(contador == 1) {
			alert("Datos Incompletos, por favor ingrese:" + mensaje);
		}
		else {
			document.getElementById("formulario_usuarios").submit();
		}
	}
</script>
<script type="text/javascript" src="http://www.ingjpballesteros.com/library/js/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="library/estilos.css" media="screen"/>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
</div>
	<div id="mod_panelusu">
    	<form action="library/usuarios_validar.php" method="post" name="formulario_usuarios" id="formulario_usuarios">
        <table width="401" height="238" border="0" cellpadding="2" cellspacing="2" background="images/panel_ingreso.png"> 
        <tr>
        <td height="32" colspan="2" class="mod_titulo2" style="padding: 10px 0px 0px 20px; text-align:left">PANEL DE INGRESO</td> 
        </tr>
        <tr>
        <td height="10" colspan="2"><div style="margin: 0px 20px 0px 20px; background-color: #fce980; height: 1px;"></div></td> 
        </tr>
        <tr>
        <td height="23" colspan="2" align="center"><span class="advertencia" style="font-weight: bold;"><?php if($_GET["usuario_invalido"] == "si") echo "Datos Incorrectos"; ?></span>&nbsp;</td> 
        </tr>
        <tr> 
        <td width="117" height="26" align="left" style="padding-left: 20px;" class="mod_titulo2">USUARIO </td> 
        <td width="270"><input type="text" name="usuario" id="usuario" size="20" maxlength="50" onKeyPress="return validar_numerosletras(event)" class="mod_descripcion2" onpaste="return false"></td>
        </tr>
        <tr> 
        <td height="26" align="left" style="padding-left: 20px;" class="mod_titulo2">CONTRASE&Ntilde;A</td> 
        <td><input type="password" name="clave" id="clave" size="20" maxlength="50" onKeyPress="return validar_numerosletras(event)" class="mod_descripcion2" onpaste="return false"></td>
        </tr> 
        <tr> 
        <td height="40" colspan="2" align="center" style="padding: 10px 0px 10px 0px;"><a href="#" onClick="validar_formulario();" class="mod_titulo" style="color:#900; font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:bold;">Entrar</a></td>                     
        </tr>
        </table> 
        </form>                                         		
  	</div><!-- end of div mod_usuarioact -->
</body>
</html>