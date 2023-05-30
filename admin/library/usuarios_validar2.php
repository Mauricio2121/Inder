<?php
	ob_start();
	include("clase_sesion.php");
	$sesion = new sesion();
	$sesion->abrir_sesion("usuario");
	
	include("clase_conexion_bd.php");
	$conexion_bd = new conexion_bd();
	$link = $conexion_bd->conectar_bd();		
	extract($_POST);	
	
	//Validamos si el login y password son váildos
	$consulta = "select * from jp_registros where jpreg_email = '$email' and jpreg_clave = '$clave' and jpreg_estado = 1";
	$consultar_registros = $conexion_bd->consultar_tabla($consulta, $link);
	if($conexion_bd->recorrer_consulta_tabla($consultar_registros)) {
		$id_usuario = $conexion_bd->mostrar_campo_consulta_tabla("jpreg_id");
		$nombre_usuario = $conexion_bd->mostrar_campo_consulta_tabla("jpreg_nombre");
		$email_usuario = $conexion_bd->mostrar_campo_consulta_tabla("jpreg_email");
		$nivel_acceso = 2;				
		$_SESSION["autentificado"] = 1;
		$_SESSION["nivelacceso_sesion"] = $nivel_acceso;
		//$_SESSION["ultimo_acceso"] = date("Y-m-d H:i:s");
		$_SESSION["id_usuario_sesion"] = $id_usuario;
		$_SESSION["usuario"] = $usuario;
		$_SESSION["nombre_usuario"] = $nombre_usuario;
		$_SESSION["email"] = $email_usuario;
		//login y password válidos, definimos una sesion y se guardan datos
		//$fecha_actual = date("Y-m-d H:i:s");
		/*$consulta = "update jp_usuarios set jpusu_fechaing = '$fecha_actual' where jpusu_id = $id_usuario";
		$actualizar_usuarios = $conexion_bd->consultar_tabla($consulta, $link);*/
		header("Location:../../biblioteca_ver.php"); 		
	}
	else {
		//si no existe le mando otra vez a la portada 
		header("Location:../../biblioteca.php?usuario_invalido=si"); 
	}
	ob_end_flush()
?> 
