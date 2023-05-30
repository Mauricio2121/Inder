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
        $consulta = "select jparc_id from jp_archivos order by jparc_id desc";
        $consultar_archivos = $conexion_bd->consultar_tabla($consulta, $link);
        $cantidad_archivos = $conexion_bd->numero_registros_consulta_tabla($consultar_archivos);
        if($cantidad_archivos == 0) {
            $jparc_id = 1;
        }
        else {
            if($conexion_bd->recorrer_consulta_tabla($consultar_archivos)) {
                $jparc_id = $conexion_bd->mostrar_campo_consulta_tabla("jparc_id");
                $jparc_id ++;
            }
        }
        
        $campos_consulta = "jparc_id";
        $valores_consulta = $jparc_id;
        
        if($jparc_titulo != "") {
            $campos_consulta .= ", jparc_titulo";
            $valores_consulta .= ", '".$jparc_titulo."'";
        }		
		if($jparc_tipo != "") {
            $campos_consulta .= ", jparc_tipo";
            $valores_consulta .= ", ".$jparc_tipo;
        }		
		if($jparc_archivo != "") {
            $campos_consulta .= ", jparc_archivo";
            $valores_consulta .= ", '".$jparc_archivo."'";
        }
		
		$consulta = "insert into jp_archivos ($campos_consulta) values ($valores_consulta)";
        if(@$ingresar_archivos = $conexion_bd->consultar_tabla($consulta, $link)) {
            //$mensaje .= '<img src="../images/registro_guardado.png" width="440" height="440" border="0" />';
            $mensaje .= "DATOS GUARDADOS<br />";
        }
        else {
            //$mensaje .= '<img src="../images/registro_noguardado.png" width="440" height="440" border="0" />';
            $mensaje .= "DATOS NO GUARDADOS<br />";
        }
		
		// Traemos la imagen datos del archivo adjunto
		$directorio = "../archivos/";
		$campo = "jparc_archivo";
		$nombre_archivo = trim($_FILES[$campo]['name']);
		$tamano_archivo = trim($_FILES[$campo]['size']);
		$tipo_archivo = trim($_FILES[$campo]['type']);
		$temp_archivo = trim($_FILES[$campo]['tmp_name']);
		$extension_archivo = explode(".",$nombre_archivo);
		$nombre_archivo2 = "archivo_".$jparc_id."_".$jparc_tipo.".pdf";
		if($nombre_archivo != "") 	// Guardamos el registro con imagen
			if($extension_archivo[1] == "pdf") {
				if(copy($temp_archivo,$directorio."".$nombre_archivo2)) {
					if($nombre_archivo != "") {
						$campos_consulta = "jparc_archivo = '".$nombre_archivo2."'";
						$condicion_consulta = "where jparc_id = ".$jparc_id;
					}
					$mensaje .= "ARCHIVO GUARDADO SERVIDOR<br />";
					$consulta = "update jp_archivos set $campos_consulta $condicion_consulta";
					if(@$ingresar_imagen = $conexion_bd->consultar_tabla($consulta, $link)) {
						$mensaje .= "ARCHIVO GUARDADO BD<br />";
					}
					else {
						$mensaje .= "ARCHIVO NO GUARDADO BD<br />";
						unlink($directorio."".$nombre_archivo2);
					}
				}			
				else {
					$mensaje .= "ARCHIVO NO GUARDADO SERVIDOR<br />";
				}
			}
			else{
				$mensaje .= "ERROR, EL ARCHIVO NO ES DE EXTENSI&Oacute;N .pdf<br />";
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