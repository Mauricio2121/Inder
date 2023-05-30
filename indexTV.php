<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
.Estilo2 {
	font-size: 14px;
	font-weight: bold;
	color: #990000;
}
.Estilo3 {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo6 {color: #FFFFFF}
.Estilo7 {font-size: 14px; font-family: Calibri, Arial, Helvetica, sans-serif;}
.Estilo8 {color: #FF0000}
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
    <td width="480" height="20" align="left" valign="top" bgcolor="#000000">
	<iframe width="480" height="302" src="http://www.ustream.tv/embed/17023601?v=3&amp;wmode=direct" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>
<br /><a href="http://www.ustream.tv/" style="padding: 2px 0px 4px; width: 470px; background: #000000; display: block; color: #000000; font-weight: normal; font-size: 10px; text-decoration: underline; text-align: center;" target="_blank">Live streaming video by Ustream</a>
	
	</td>
    <td width="180" align="left" valign="top" bgcolor="#000000"><p class="Estilo1"><span class="Estilo2"><br />
          <span class="Estilo8">Transmisi&oacute;n En Vivo</span></span><br />
        <span class="Estilo6">Desde las 8:00 a.m.</span></p>
      <p class="Estilo3">Presentaci&oacute;n Primera Carrera por los santanderes.<br />
      <span class="Estilo7">Lugar: Cimitarra, Santander</span>   </p>      </td>
    <td width="340" align="right" valign="top" bgcolor="#000000"><table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="20" align="right" valign="top"><iframe src="youtube/about/index-default.html"  allowtransparency="allowtransparency" name="frameindex" width="330" height="260" marginwidth="0" marginheight="0" align="auto" scrolling="No" frameborder="0" id="contenedor"> </iframe></td>
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
        <td height="20"><a href="http://www.ustream.tv/channel/inder-santander" target="_blank"><img src="images/banner_indertv.png" width="281" height="82" border="0" title="Ir al Canal" /></a></td>
      </tr>
      <tr>
        <td height="20"><a href="http://www.flickr.com/photos/prensaindersantander/" target="_blank"><img src="images/banner_galeria.png" width="298" height="91" border="0" /></a></td>
      </tr>
    </table></td>
    <td width="700" align="center" valign="top"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="20" valign="bottom"><img src="images/fondo_masnoticias.png" width="700" height="34" /></td>
      </tr>
      <tr>
        <td height="150" align="center" valign="top" bgcolor="#000000"><table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td height="20" align="center" valign="middle"><a href="noticia4.php"><img src="slider/images/noticias/tatamijdo_0.jpg" width="160" height="108" border="0" /></a></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle"><a href="noticia3.php"><img src="slider/images/noticias/tresjudocas_0.jpg" width="160" height="108" border="0" /></a></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle"><a href="noticia2.php"><img src="slider/images/noticias/1departamentakaratedo_0.jpg" width="160" height="108" border="0" /></a></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle"><a href="noticia1.php"><img src="slider/images/noticias/comunicadoopinion.jpg" width="160" height="108" border="0" /></a></td>
          </tr>
          <tr>
            <td height="20" align="center" valign="middle" class="Estilomasnoti"><strong>Enero 30 de 2014</strong><br />
              <a href="noticia4.php">Director de Indersantander entregar&aacute;  Tatami a Liga de Judo</a></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle"><span class="Estilomasnoti"><strong>Enero 29 de 2014</strong><br />
                <a href="noticia3.php">Tres judocas santandereanos competir&aacute;n en Juegos Deportivos Sudamericanos </a></span></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle"><span class="Estilomasnoti"><strong>Enero 29 de 2014</strong><br />
                <a href="noticia2.php">1er Departamental de Karate Do</a></span></td>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle"><span class="Estilomasnoti"><strong>Enero 27 de 2014</strong><br />
                <a href="noticia1.php">Comunicado a la opini&oacute;n p&uacute;blica</a></span></td>
          </tr>
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
    <td height="20" align="left" valign="top"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FIndersantander%2F548915768549888&amp;width=300&amp;height=560&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=269308837147" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:590px;" allowTransparency="true"></iframe></td>
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
