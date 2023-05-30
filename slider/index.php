<?php	
	//include("../admin/library/clase_conexion_bd.php");
	//$conexion_bd = new conexion_bd();
	//$link = $conexion_bd->conectar_bd();
	//extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lof JSliderNews 2.0 - Jquery 1.7.x</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		// buttons for next and previous item						 
		var buttons = { previous:$('#jslidernews1 .button-previous') ,
						next:$('#jslidernews1 .button-next') };			
		 $('#jslidernews1').lofJSidernews( { interval : 4000,
											direction		: 'opacitys',	
											easing			: 'easeInOutExpo',
											duration		: 1200,
											auto		 	: true,
											maxItemDisplay  : 4,
											navPosition     : 'horizontal', // horizontal
											navigatorHeight : 50,
											navigatorWidth  : 100,
											mainWidth		: 660,
											buttons			: buttons } );	
	});
</script>

<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style></head>
<body>
	<div id="container"><!------------------------------------- THE CONTENT ------------------------------------------------->
<div id="jslidernews1" class="lof-slidecontent" style="width:660px; height:300px;">
	<div class="preload">
    <div></div></div>
    		 <!-- MAIN CONTENT -->
             <?php						
			$consulta = "select * from jp_noticias order by jpnot_id desc limit 0, 4";
			//$consultar_noticias = $conexion_bd->consultar_tabla($consulta, $link);
			//$numero_total = $conexion_bd->numero_registros_consulta_tabla($consultar_noticias);
			echo '<div class="main-slider-content" style="width:660px; height:300px;">
                <ul class="sliders-wrap-inner">';



$mysqli = new mysqli("localhost", "indersan_user", "Inder@2014", "indersan_inderbd",3306);
if ($mysqli === false){
    die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
  }

			echo '<tr>';			
			

if ($result = $mysqli->query($consulta) ){

    if ($result->num_rows > 0 ){
      while($row = $result->fetch_array() ){
                  
                  
                    
                    $jpnot_id =$row['jpnot_id'];
                    $jpnot_titulo =$row['jpnot_titulo'];
                    $jpnot_resumen =$row['jpnot_resumen'];
                    $jpnot_detalle =$row['jpnot_detalle'];
                    $jpnot_fecha =$row['jpnot_fecha'];
                    $jpnot_imagen1 =$row['jpnot_imagen1'];

                echo '<li>
                      <img src="../images/noticias/'.$jpnot_imagen1.'" width="660" height="300" title="'.$jpnot_titulo.'" >            
                        <div class="slider-description">
                          <div class="slider-meta"><i>'.$jpnot_fecha.'</i></div>
                            <h4>'.$jpnot_titulo.'</h4>
                            <p><a class="readmore" href="../noticias_detalle.php?id='.$jpnot_id.'" target="_parent">Leer Más</a></p>
                      </div>
                  </li>';
                  
                }
              }else{
                echo "@ER NO se realizó la acción.";
              }
            }else{
              echo "@ER Error: No fue posible ejecutar la consulta $sql ". $mysqli->error;
            }


			echo '</ul>  	
            </div>';
		?> 
              
 		   <!-- END MAIN CONTENT --> 
           <!-- NAVIGATOR -->
           <?php
			$consulta = "select * from jp_noticias order by jpnot_id desc limit 0, 4";
			
			echo '<div class="navigator-content">
                  <div class="button-next">Next</div>
                  <div class="navigator-wrapper">
				  <ul class="navigator-wrap-inner">';		


if ($result = $mysqli->query($consulta) ){

    if ($result->num_rows > 0 ){
      while($row = $result->fetch_array() ){
                  
                  
                    
                    $jpnot_id =$row['jpnot_id'];
                    $jpnot_imagen1 =$row['jpnot_imagen1'];
        								
				echo '<li><img src="../images/noticias/'.$jpnot_imagen1.'" width="100" height="50" /></li>';
                  
                }
              }else{
                echo "@ER NO se realizó la acción.";
              }
            }else{
              echo "@ER Error: No fue posible ejecutar la consulta $sql ". $mysqli->error;
            }



			echo '</ul>
                  </div>
                  <div  class="button-previous">Previous</div> </div>';
		?>
           	 
          <!----------------- END OF NAVIGATOR --------------------->
          <!-- BUTTON PLAY-STOP -->
          <div class="button-control"><span></span></div>
           <!-- END OF BUTTON PLAY-STOP -->
          
 </div> 


<!------------------------------------- END OF THE CONTENT ------------------------------------------------->
 <p> 

    </div>
</body>
</html>
