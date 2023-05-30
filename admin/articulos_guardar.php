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
    extract($_POST);

    if($guardar == 1) {
        // Calculamos el ultimo id guardado
        $consulta = "select jpart_id from jp_articulos order by jpart_id desc";
        $consultar_articulos = $conexion_bd->consultar_tabla($consulta, $link);
        $cantidad_articulos = $conexion_bd->numero_registros_consulta_tabla($consultar_articulos);
        if($cantidad_articulos == 0) {
            $jpart_id = 1;
        }
        else {
            if($conexion_bd->recorrer_consulta_tabla($consultar_articulos)) {
                $jpart_id = $conexion_bd->mostrar_campo_consulta_tabla("jpart_id");
                $jpart_id ++;
            }
        }
        
        $campos_consulta = "jpart_id";
        $valores_consulta = $jpart_id;
        
        if($jpart_titulo != "") {
            $campos_consulta .= ", jpart_titulo";
            $valores_consulta .= ", '".$jpart_titulo."'";
        }
        if($jpart_detalle != "") {
            $campos_consulta .= ", jpart_detalle";
            $valores_consulta .= ", '".$jpart_detalle."'";
        }                   
        if($jpart_fecha != "") {
            $campos_consulta .= ", jpart_fecha";
            $valores_consulta .= ", '".$jpart_fecha."'";
        }

        $consulta = "insert into jp_articulos ($campos_consulta) values ($valores_consulta)";
        if(@$ingresar_comentarios = $conexion_bd->consultar_tabla($consulta, $link)) {
            //$mensaje .= '<img src="../images/registro_guardado.png" width="440" height="440" border="0" />';
            $mensaje .= "DATOS GUARDADOS";
        }
        else {
            //$mensaje .= '<img src="../images/registro_noguardado.png" width="440" height="440" border="0" />';
            $mensaje .= "DATOS NO GUARDADOS";
        }       
    }
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
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br /><?php echo $mensaje; ?>
</div><!-- end of div formulario -->
</body>
</html>