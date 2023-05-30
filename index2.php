
<?php
	//include("admin/library/clase_conexion_bd.php");
	//$conexion_bd = new conexion_bd();
	//$link = $conexion_bd->conectar_bd();
	extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Instituto Departamental de Recreaci&oacute;n y Deportes de Santander</title>
<LINK REL="SHORTCUT ICON" HREF="ic.ico" />
<style type="text/css">
<!--
.Estilo1 {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}
.EstiloEncfecha {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #ffffff;
}
.Estilomasnoti {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #ffffff;
}
.EstiloMenu {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #ffffff;
}
body {
	background-image: url(images/fondo.jpg);
	background-repeat: repeat-x;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #FFFF99;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
a.gris:link {
	color: #333333;
	text-decoration: none;
}
a.gris:visited {
	text-decoration: none;
	color: #333333;
}
a.gris:hover {
	text-decoration: underline;
	color: #777777;
}
a.gris:active {
	text-decoration: none;
	color: #333333;
}
-->
</style>
</head>
<script language="Javascript"> 
var muestra;
function makeArray(n){
  this.length = n;
  for (i=1;i<=n;i++){
    this[i]=0;
  }
  return this;
}

function Muestrafecha() {
//arreglo de los meses
  var meses = new makeArray(12);
  meses[0]  = "Enero";
  meses[1]  = "Febrero";
  meses[2]  = "Marzo";
  meses[3]  = "Abril";
  meses[4]  = "Mayo";
  meses[5]  = "Junio";
  meses[6]  = "Julio";
  meses[7]  = "Agosto";
  meses[8]  = "Septiembre";
  meses[9]  = "Octubre";
  meses[10] = "Noviembre";
  meses[11] = "Deciembre";

//arreglo de los dias
  var dias_de_la_semana = new makeArray(7);
  dias_de_la_semana[0]  = "Domingo";
  dias_de_la_semana[1]  = "Lunes";
  dias_de_la_semana[2]  = "Martes";
  dias_de_la_semana[3]  = "Miércoles";
  dias_de_la_semana[4]  = "Jueves";
  dias_de_la_semana[5]  = "Viernes";
  dias_de_la_semana[6]  = "Sábado";

  var today = new Date();
  var day   = today.getDate();
  var month = today.getMonth();
  var year  = today.getYear();
  var dia = today.getDay();
  
  if (year < 1000) {year += 1900; }

// mostrar la fecha	
return( "<strong>Bucaramanga.</strong> Hoy es " + dias_de_la_semana[dia] + ", " + day + " de " + meses[month] + " del " + year);
}
</script>
<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" style="margin-bottom:0; margin-left:0; margin-right:0; margin-top:0" >
<?php include("header.php"); ?><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="660" height="20" align="left" valign="top"><iframe src="slider/index.php"  allowtransparency="allowtransparency" name="frameindex" width="660" height="300" marginwidth="0" marginheight="0" align="auto" scrolling="No" frameborder="0" id="contenedor"> </iframe></td>
    <td width="340" align="right" valign="top" bgcolor="#000000"><table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="20" align="right" valign="top">
		<iframe width="330" height="260" src="https://www.youtube.com/embed/videoseries?list=PL_-ddufnuLdXFneo5Cq7nojdz4UVw61Dk" frameborder="0" allowfullscreen></iframe>
		</td>
      </tr>
      <tr>
        <td height="20" align="center" valign="middle"><a href="http://www.youtube.com/user/PrensaInderSantander" target="_blank"><img src="images/masvideos.png" width="304" height="27" vspace="5" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="32" align="center" valign="top"><img src="images/sombra.png" width="900" height="26" /></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="300" height="20"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
     
      <tr>
        <td height="20"><a href="http://www.flickr.com/photos/prensainder/" target="_blank"><img src="images/banner_galeria.png" width="298" height="91" border="0" /></a></td>
      </tr>
		<tr>
        <td height="20"><a href="http://indersantander.gov.co/transparencia.php" target="_blank"><img src="images/transparencia.png" width="298" height="81" border="0" /></a></td>
      </tr>
    </table></td>
    <td width="700" align="center" valign="top"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="20" valign="bottom"><img src="images/fondo_masnoticias.png" width="700" height="34" /></td>
      </tr>
      <tr>
        <td height="150" align="center" valign="top" bgcolor="#000000">
        <table width="680" border="0" align="center" cellpadding="0" cellspacing="0">        	
          <!--DWLayoutTable-->
           <?php
			$consulta = "select * from jp_noticias order by jpnot_id desc limit 4, 4";
			

$mysqli = new mysqli("localhost", "indersan_user", "Inder@2014", "indersan_inderbd",3306);
if ($mysqli === false){
    die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
  }

			echo '<tr>';			
			

if ($result = $mysqli->query($consulta) ){

    if ($result->num_rows > 0 ){
      while($row = $result->fetch_array() ){
                  
                  
                    
                    $jpnot_id =$row['jpnot_id'];
                    $jpnot_imagen2 =$row['jpnot_imagen2'];
                   
                    echo '<td height="20" align="center" valign="middle"><a href="noticias_detalle.php?id='.$jpnot_id.'"><img src="images/noticias/'.$jpnot_imagen2.'" width="160" height="108" hspace="5" vspace="5" border="0" /></a></td>';
                
                  
                }
              }else{
                echo "@ER NO se realizó la acción.";
              }
            }else{
              echo "@ER Error: No fue posible ejecutar la consulta $sql ". $mysqli->error;
            }

			echo '</tr>';
			
			$consulta = "select * from jp_noticias order by jpnot_id desc limit 4, 4";

			echo '<tr>';

      
$mysqli->next_result();

if ($result = $mysqli->query($consulta) ){

    if ($result->num_rows > 0 ){
      while($row = $result->fetch_array() ){
                  
                  
                    
                    $jpnot_id =$row['jpnot_id'];
                    $jpnot_titulo =$row['jpnot_titulo'];
                    $jpnot_resumen =$row['jpnot_resumen'];
                    $jpnot_detalle =$row['jpnot_detalle'];
                    $jpnot_fecha=$row['jpnot_fecha'];

                    
                    echo '<td height="20" align="center" valign="top" class="Estilomasnoti"><strong>'.$jpnot_fecha.'</strong><br />
              <ahref="noticias_detalle.php?id='.$jpnot_id.'">'.$jpnot_titulo.'</a></td>';
                
                  
                }
              }else{
                echo "@ER NO se realizó la acción.";
              }
            }else{
              echo "@ER Error: No fue posible ejecutar la consulta $sql ". $mysqli->error;
            }

			echo '</tr>';


$mysqli->close(); 


		?>
        </table></td>
      </tr>
      <tr>
        <td height="20" valign="top"><img src="images/fondo_masnoticias2.png" width="700" height="13" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
	
	<tr>
        <td height="20"><a href="https://goo.gl/forms/3C0f81icdkeEhKdl1" target="_blank"><img src="images/encuestausuario.png" width="288" height="81" border="0" /></a></td>
      </tr>
	
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="300" height="20"><img src="images/siguenos_facebook.png" width="188" height="39" /></td>
    <td width="50">&nbsp;</td>
    <td width="300"><img src="images/siguenos_twitter.png" width="185" height="38" /></td>
    <td width="50">&nbsp;</td>
    <td width="300"><img src="images/audios_recientes.png" width="275" height="49" /></td>
  </tr>
  <tr>
    <td height="20" align="left" valign="top">
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/Indersantander-1403310499970432" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
    </td>
    <td>&nbsp;</td>
    <td align="left" valign="top"><a class="twitter-timeline" href="https://twitter.com/indersantander" data-widget-id="430609044080824321">Tweets por @indersantander</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </td>
    <td>&nbsp;</td>
    <td align="left" valign="top"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="20"><iframe width="100%" height="520" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/78586724&auto_play=false&auto_advance=false&buying=false&liking=true&download=true&sharing=true&show_artwork=false&show_comments=false&show_playcount=false&show_user=false&hide_related=false&visual=false&start_track=0&callback=true"></iframe></td>
      </tr>
      <tr>
        <td height="20"><a href="http://soundcloud.com/indersantander" target="_blank"><img src="images/banco_audios.jpg" width="301" height="42" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table><?php include("footer.php"); ?>
</body>
</html>
