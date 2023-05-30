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
        if(document.getElementById("jpcom_detalle").value == "") {   
            mensaje = mensaje + "\nComentario";
            contador = 1;
        }
        if(document.getElementById("jpcom_autor").value == "") {   
            mensaje = mensaje + "\nAutor del comentario";
            contador = 1;
        }
        if(contador == 1) {
            alert("Datos Incompletos, por favor ingrese:" + mensaje);
        }
        else {
            document.getElementById("guardar").value = 1;
            document.getElementById("formulario_comentarios").submit();
        }
    }
</script>
</head>

<body>
<div id="cabecera">
	<img src="images/img_cabecera.jpg" width="900" height="180" border="0" />
</div>
<div id="formulario">
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />    <form name="formulario_comentarios" id="formulario_comentarios" action="comentarios_guardar.php" method="post">
    <table width="432" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="152"><u>D</u>etalle</td>
        <td width="280"><textarea name="jpcom_detalle" id="jpcom_detalle" cols="50" rows="4" accesskey="d" tabindex="1"></textarea></td>
      </tr>            
        <td><u>A</u>utor</td>
        <td><input type="text" name="jpcom_autor" id="jpcom_autor" size="40" accesskey="a" tabindex="2" /></td>
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