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
        $consulta = "select jpusu_id from jp_usuarios order by jpusu_id desc";
        $consultar_usuarios = $conexion_bd->consultar_tabla($consulta, $link);
        $cantidad_usuarios = $conexion_bd->numero_registros_consulta_tabla($consultar_usuarios);
        if($cantidad_usuarios == 0) {
            $jpusu_id = 1;
        }
        else {
            if($conexion_bd->recorrer_consulta_tabla($consultar_usuarios)) {
                $jpusu_id = $conexion_bd->mostrar_campo_consulta_tabla("jpusu_id");
                $jpusu_id ++;
            }
        }
        
        $jpusu_estado = 1;
        $jpusu_fechaing = date("Y-m-d H:i:s");
        
        $campos_consulta = "jpusu_id";
        $valores_consulta = $jpusu_id;
        
        if($jpusu_nombre != "") {
            $campos_consulta .= ", jpusu_nombre";
            $valores_consulta .= ", '".$jpusu_nombre."'";
        }                   
        if($jpusu_correo != "") {
            $campos_consulta .= ", jpusu_correo";
            $valores_consulta .= ", '".$jpusu_correo."'";
        }   
        if($jpusu_usuario != "") {
            $campos_consulta .= ", jpusu_usuario";
            $valores_consulta .= ", '".$jpusu_usuario."'";
        }       
        if($jpusu_clave != "") {
            $campos_consulta .= ", jpusu_clave";
            $valores_consulta .= ", '".$jpusu_clave."'";
        }    
        if($jpusu_estado != "") {
            $campos_consulta .= ", jpusu_estado";
            $valores_consulta .= ", ".$jpusu_estado."";
        }
        
        $consulta = "insert into jp_usuarios ($campos_consulta) values ($valores_consulta)";
        if(@$ingresar_usuarios = $conexion_bd->consultar_tabla($consulta, $link)) {
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
<a href="menu_principal.php">IR AL MENU PRINCIPAL</a><br /><br />
<?php echo $mensaje; ?>
</div><!-- end of div formulario -->
</body>
</html>