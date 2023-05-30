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
        $consulta = "select jpnot_id from jp_noticias order by jpnot_id desc";
        $consultar_noticias = $conexion_bd->consultar_tabla($consulta, $link);
        $cantidad_noticias = $conexion_bd->numero_registros_consulta_tabla($consultar_noticias);
        if($cantidad_noticias == 0) {
            $jpnot_id = 1;
        }
        else {
            if($conexion_bd->recorrer_consulta_tabla($consultar_noticias)) {
                $jpnot_id = $conexion_bd->mostrar_campo_consulta_tabla("jpnot_id");
                $jpnot_id ++;
            }
        }
        
        $campos_consulta = "jpnot_id";
        $valores_consulta = $jpnot_id;
        
        if($jpnot_titulo != "") {
            $campos_consulta .= ", jpnot_titulo";
            $valores_consulta .= ", '".$jpnot_titulo."'";
        }
		if($jpnot_resumen != "") {
            $campos_consulta .= ", jpnot_resumen";
            $valores_consulta .= ", '".$jpnot_resumen."'";
        }
        if($jpnot_detalle != "") {
            $campos_consulta .= ", jpnot_detalle";
            $valores_consulta .= ", '".$jpnot_detalle."'";
        }                   
        if($jpnot_fecha != "") {
            $campos_consulta .= ", jpnot_fecha";
            $valores_consulta .= ", '".$jpnot_fecha."'";
        }
		if($jpnot_imagen1 != "") {
            $campos_consulta .= ", jpnot_imagen1";
            $valores_consulta .= ", '".$jpnot_imagen1."'";
        }
		if($jpnot_imagen2 != "") {
            $campos_consulta .= ", jpnot_imagen2";
            $valores_consulta .= ", '".$jpnot_imagen2."'";
        }
		
		$consulta = "insert into jp_noticias ($campos_consulta) values ($valores_consulta)";
        if(@$ingresar_noticias = $conexion_bd->consultar_tabla($consulta, $link)) {
            //$mensaje .= '<img src="../images/registro_guardado.png" width="440" height="440" border="0" />';
            $mensaje .= "DATOS GUARDADOS<br />";
        }
        else {
            //$mensaje .= '<img src="../images/registro_noguardado.png" width="440" height="440" border="0" />';
            $mensaje .= "DATOS NO GUARDADOS<br />";
        }
		
		// Traemos la imagen datos del archivo adjunto
		$directorio = "../images/noticias/";
		$campo = "jpnot_imagen1";
		$nombre_archivo = trim($_FILES[$campo]['name']);
		$tamano_archivo = trim($_FILES[$campo]['size']);
		$tipo_archivo = trim($_FILES[$campo]['type']);
		$temp_archivo = trim($_FILES[$campo]['tmp_name']);
		$extension_archivo = explode(".",$nombre_archivo);
		$nombre_archivo2 = "noticia_".$jpnot_id.".jpg";
		if($nombre_archivo != "") 	// Guardamos el registro con imagen
			if($extension_archivo[1] == "jpg") {
				if(copy($temp_archivo,$directorio."".$nombre_archivo2)) {
					if($nombre_archivo != "") {
						$campos_consulta = "jpnot_imagen1 = '".$nombre_archivo2."'";
						$condicion_consulta = "where jpnot_id = ".$jpnot_id;
					}
					$mensaje .= "IMAGEN 1 GUARDADA SERVIDOR<br />";
					$consulta = "update jp_noticias set $campos_consulta $condicion_consulta";
					if(@$ingresar_imagen = $conexion_bd->consultar_tabla($consulta, $link)) {
						$mensaje .= "IMAGEN 1 GUARDADA BD<br />";
					}
					else {
						$mensaje .= "IMAGEN 1 NO GUARDADA BD<br />";
						unlink($directorio."".$nombre_archivo2);
					}
				}			
				else {
					$mensaje .= "IMAGEN 1 NO GUARDADA SERVIDOR<br />";
				}
			}
			else{
				$mensaje .= "ERROR, LA IMAGEN 1 NO ES DE EXTENSI&Oacute;N .jpg<br />";
		}
		
		// Traemos la imagen datos del archivo adjunto
		$directorio = "../images/noticias/";
		$campo = "jpnot_imagen2";
		$nombre_archivo = trim($_FILES[$campo]['name']);
		$tamano_archivo = trim($_FILES[$campo]['size']);
		$tipo_archivo = trim($_FILES[$campo]['type']);
		$temp_archivo = trim($_FILES[$campo]['tmp_name']);
		$extension_archivo = explode(".",$nombre_archivo);
		$nombre_archivo2 = "noticia2_".$jpnot_id.".jpg";
		if($nombre_archivo != "") 	// Guardamos el registro con imagen
			if($extension_archivo[1] == "jpg") {
				if(copy($temp_archivo,$directorio."".$nombre_archivo2)) {
					if($nombre_archivo != "") {
						$campos_consulta = "jpnot_imagen2 = '".$nombre_archivo2."'";
						$condicion_consulta = "where jpnot_id = ".$jpnot_id;
					}
					$mensaje .= "IMAGEN 2 GUARDADA SERVIDOR<br />";
					$consulta = "update jp_noticias set $campos_consulta $condicion_consulta";
					if(@$ingresar_imagen = $conexion_bd->consultar_tabla($consulta, $link)) {
						$mensaje .= "IMAGEN 2 GUARDADA BD<br />";
					}
					else {
						$mensaje .= "IMAGEN 2 NO GUARDADA BD<br />";
						unlink($directorio."".$nombre_archivo2);
					}
				}			
				else {
					$mensaje .= "IMAGEN 2 NO GUARDADA SERVIDOR<br />";
				}
			}
			else{
				$mensaje .= "ERROR, LA IMAGEN 2 NO ES DE EXTENSI&Oacute;N .jpg<br />";
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