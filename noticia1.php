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
.parrafo {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #333333;
}
.titulos {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #333333;
}
.subtitulos {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 17px;
	color: #333333;
}
.parrafoN {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #333333;
}
.titulosN {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #333333;
}
.subtitulosN {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 17px;
	font-weight: bold;
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
<?php include("header.php"); ?>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="650" height="20"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="50" align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="300" align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="20" align="left" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="30" bgcolor="#666666" class="Estilo1">&nbsp;&nbsp;<a href="index.php">Regresar al Inicio</a> | <a href="noticias.php">Archivo de Noticias </a></td>
      </tr>
      <tr>
        <td height="20" class="titulosN">Comunicado a la opini&oacute;n p&uacute;blica</td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top" class="Estilo1">Bucaramanga, Enero 27 de 2014 </td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="center"><span class="parrafo"><img src="slider/images/noticias/comunicadoopinion600.jpg" width="600" height="400" hspace="10" vspace="10" /></span></div></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="parrafo">Frente a la situaci&oacute;n vivida en el Estadio Departamental Alfonso L&oacute;pez el domingo anterior, donde se present&oacute; ausencia de agua y energ&iacute;a el&eacute;ctrica,  que afect&oacute; el normal funcionamiento del escenario deportivo para asistentes y jugadores al encuentro entre Atl&eacute;tico Bucaramanga y Jaguares FC, el  Instituto Departamental de Recreaci&oacute;n y Deportes de Santander, INDERSANTANDER, se permite informar a la opini&oacute;n p&uacute;blica que el incidente se registr&oacute; por un corto circuito provocado cuando un gato dom&eacute;stico ingres&oacute; en una sub estaci&oacute;n el&eacute;ctrica del escenario. </p>
          <p class="parrafo">El director de Indersantander, Lic. Willams Andr&eacute;s Garc&iacute;a Becerra, se pronunci&oacute; sobre el hecho, &ldquo;fue un incidente que se present&oacute; antes del medio d&iacute;a cuando todo estaba listo para el compromiso deportivo. Yo hice presencia en el escenario sobre las 9:00 de la ma&ntilde;ana, estaban funcionando los servicios  normalmente. El corto provocado por el felino produjo da&ntilde;os en tres fusibles de 100 amperios (unidad de intensidad de corriente el&eacute;ctrica), los cuales no fue posible conseguirlos  en la ciudad&rdquo;. Sin electricidad las motobombas que prestan el servicio de agua no funcionan, a&ntilde;adi&oacute; el funcionario.</p>
          <p class="parrafo">&ldquo;Quiero expresar excusas a los hinchas, integrantes de los equipos, personal de los medios de comunicaci&oacute;n y comunidad en general por lo sucedido, pero entender&aacute;n que fue un imprevisto de &uacute;ltima hora&rdquo;, agreg&oacute; el directivo. De la misma forma asegur&oacute; que habr&aacute; personal disponible especializado en el tema para el siguiente compromiso en condici&oacute;n de local del Atl&eacute;tico Bucaramanga a realizarse el 8 de febrero pr&oacute;ximo. </p>
          <p class="parrafo">De igual manera, el Director del Inder Santander se pronunci&oacute; sobre los trabajos de mantenimiento y adecuaci&oacute;n del escenario, &ldquo;estamos trabajando de la mano con la gobernaci&oacute;n en aras de mejorar el funcionamiento del estadio y ponerlo a tono para todos los santandereanos. Hacia mediados de febrero estaremos entregando cabinas remodeladas, servicios sanitarios, cafeter&iacute;as y tribunas en condiciones optimas de uso, es una inversi&oacute;n bastante importante en la cual ya estamos caminando sobre el 75%&rdquo;. </p>
          <p class="parrafo">El lunes en la tarde se restableci&oacute; el servicio de energ&iacute;a el&eacute;ctrica en todo el complejo deportivo Alfonso L&oacute;pez. </p>
        </div></td>
      </tr>
    </table></td>
    <td align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="top"><?php include("lat.php"); ?></td>
  </tr>
  <tr>
    <td height="20"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
<?php include("footer.php"); ?>
</body>
</html>
