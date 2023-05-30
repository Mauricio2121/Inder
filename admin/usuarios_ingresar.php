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
<!-- Libreria General -->
<link rel="stylesheet" type="text/css" href="library/estilos.css" media="screen"/>
<script language="javascript" src="../../library/js/funciones.js" type="text/javascript"></script>
<script type="text/javascript">
    function validar_formulario() {
        var contador = 0;
        var mensaje = "";
        if(document.getElementById("jpusu_nombre").value == "") {   
            mensaje = mensaje + "\nNombre(s) del usuario";
            contador = 1;
        }
        if(document.getElementById("jpusu_correo").value == "") {   
            mensaje = mensaje + "\nCorreo del usuario";
            contador = 1;
        }
        if(document.getElementById("jpusu_usuario").value == "") {  
            mensaje = mensaje + "\nNombre de usuario";
            contador = 1;
        }
        if(document.getElementById("jpusu_clave").value == "") {    
            mensaje = mensaje + "\nClave del Usuario";
            contador = 1;
        }
        if(contador == 1) {
            alert("Datos Incompletos, por favor ingrese:" + mensaje);
        }
        else {
            document.getElementById("guardar").value = 1;
            document.getElementById("formulario_usuarios").submit();
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
    <form name="formulario_usuarios" id="formulario_usuarios" action="usuarios_guardar.php" method="post">
    <table width="432" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="152"><u>N</u>ombre</td>
        <td width="280"><input type="text" name="jpusu_nombre" id="jpusu_nombre" onKeyUp="convertir_mayuscula('jpusu_nombre')" size="40" accesskey="n" tabindex="1" /></td>
      </tr>      
      <tr>
        <td><u>C</u>orreo E</td>
        <td><input type="text" name="jpusu_correo" id="jpusu_correo" onBlur="validar_email('jpusu_correo')" onKeyUp="convertir_minuscula('jpusu_correo')" size="40" accesskey="c" tabindex="2" /></td>
      </tr>     
      <tr>
        <td><u>U</u>suario</td>
        <td><input type="text" name="jpusu_usuario" id="jpusu_usuario" onKeyUp="convertir_minuscula('jpusu_usuario')" size="40" accesskey="u" tabindex="3" /></td>
      </tr>
      <tr>
        <td>C<u>l</u>ave</td>
        <td><input type="password" name="jpusu_clave" id="jpusu_clave" onKeyUp="convertir_mayuscula('jpusu_clave')" size="40" accesskey="l" tabindex="4" /></td>
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
    <input type="hidden" name="guardar" id="guardar" value="" />
    </form>
</div><!-- end of div formulario -->
</body>
</html>