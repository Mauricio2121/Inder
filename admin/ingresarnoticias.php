
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="UTF-8">
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
            document.getElementById("guardar").value = 1;
            document.getElementById("formulario_noticias").submit();
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
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />    <form name="formulario_noticias" id="formulario_noticias" action="noticias_guardar.php" method="post" enctype="multipart/form-data">
    <table width="432" border="0" cellspacing="0" cellpadding="0">
      <tr>            
        <td><u>T</u>itulo</td>
        <td><input type="text" name="jpnot_titulo" id="jpnot_titulo" size="40" accesskey="t" tabindex="1" /></td>
      </tr>
      <tr>
        <td width="152"><u>R</u>esumen</td>
        <td width="280"><textarea name="jpnot_resumen" id="jpnot_resumen" class="ckeditor" cols="50" rows="4" accesskey="r" tabindex="2"></textarea></td>
      </tr>
      <tr>
        <td width="152"><u>D</u>etalle</td>
        <td width="280"><textarea name="jpnot_detalle" id="jpnot_detalle" class="ckeditor" cols="50" rows="4" accesskey="d" tabindex="3"></textarea></td>
      </tr>
      <tr>            
        <td><u>F</u>echa</td>
        <td><input type="text" name="jpnot_fecha" id="jpnot_fecha" size="40" accesskey="f" tabindex="4" /></td>
      </tr>
      <tr>            
        <td><u>I</u>magen 1</td>
        <td><input type="file" name="jpnot_imagen1" id="jpnot_imagen1" size="40" accesskey="i" tabindex="5" /></td>
      </tr>
      <tr>            
        <td><u>I</u>magen 2</td>
        <td><input type="file" name="jpnot_imagen2" id="jpnot_imagen2" size="40" accesskey="i" tabindex="6" /></td>
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