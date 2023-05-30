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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo Administrador</title>
<script src="library/elfinder/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="library/elfinder/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="library/elfinder/js/ui-lightness/jquery-ui-1.8.14.custom.css" type="text/css" media="screen" charset="utf-8">
<script src="library/elfinder/js/elfinder.min.js" type="text/javascript" charset="utf-8"></script>
<script src="library/elfinder/js/i18n/elfinder.es.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="library/elfinder/css/elfinder.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" charset="utf-8">
	$().ready(function(){
		$('#gestor_documentos').elfinder({
			url : 'library/elfinder/connectors/php/connector.php',
			lang : 'es'
		})
	});
</script>
<link rel="stylesheet" type="text/css" href="library/estilos.css" media="screen"/>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
<div id="formulario">
    <a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />
    <div id="gestor_documentos">
    </div><!-- end div of gestor_documentos -->
</div>
</body>
</html>