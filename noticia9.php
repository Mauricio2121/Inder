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
        <td height="20" class="titulosN">Director de Inder Santander cumple un a&ntilde;o al frente de la Instituci&oacute;n</td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top" class="Estilo1">Bucaramanga, Febrero 8 de 2014 </td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="center"><span class="parrafo"><img src="slider/images/noticias/unperiodoeninder.jpg" width="600" height="400" hspace="10" vspace="10" /></span></div></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="parrafo"><em>&ldquo;Estoy muy contento de poder  mostrar a los santandereanos el avance que ha tenido el departamento en materia  deportiva; gracias al gobierno departamental en cabeza del se&ntilde;or gobernador,  hemos logrado llegar a los diferentes municipios con implementaci&oacute;n deportiva,  construcci&oacute;n de escenarios, y diferentes eventos de integraci&oacute;n, buscando  siempre el bienestar del deportista santandereano&rdquo;.</em><br />
              <br />
              Son  las palabras del Director del Indersantander Lic. Willams Andr&eacute;s Garc&iacute;a  Becerra, durante un recorrido de supervisi&oacute;n realizado por las diferentes obras  que se ejecutan en el complejo deportivo Alfonso L&oacute;pez.</p>
          <p class="parrafo"><em>&ldquo;En el 2013 de la mano del  gobierno departamental construimos entre otras, obras de gran magnitud como  son, la primera cancha p&uacute;blica de f&uacute;tbol con c&eacute;sped sint&eacute;tico, ubicada en el  barrio Kennedy al norte de la ciudad, canchas en diferentes municipios como  Vetas y Gambita; empezamos con la construcci&oacute;n de la cancha La Juventud, que  tendr&aacute; torres de iluminaci&oacute;n y un gramado sint&eacute;tico de alta calidad&rdquo;</em>,  dijo el directivo. </p>
          <p class="parrafo">Algunos  de los eventos sobresalientes en 2014 fueron, la realizaci&oacute;n de los Juegos  Departamentales Sup&eacute;rate Inter-colegiados, evento exitoso en todas sus etapas;  as&iacute; mismo se dio cumplimiento a los III Juegos Departamentales Paral&iacute;mpicos,  buscando integrar a todos los atletas de esta categor&iacute;a, evento que cont&oacute; con  la participaci&oacute;n de 364 atletas en 15 disciplinas. </p>
          <p class="parrafo"><strong>Obras para el 2014</strong></p>
          <p align="center" class="parrafo"><img src="slider/images/noticias/unperiodoeninder2.jpg" width="600" height="400" hspace="10" vspace="10" /></p>
          <p class="parrafo">Con  presupuesto 2014 se realizar&aacute;n obras como la recuperaci&oacute;n del coliseo de  v&oacute;leibol, construcci&oacute;n del&nbsp; coliseo de  deportes de combate, este &uacute;ltimo integrar&aacute; a deportes como, lucha, karate y  judo, disciplinas que han entregado grandes triunfos a nivel departamental y  nacional.</p>
          <p class="parrafo">El  pueblo deportivo santandereano contar&aacute; en este a&ntilde;o con el Gimnasio Multi-fuerza  y&nbsp; gimnasios al aire libre, que estar&aacute;n  ubicados dentro del complejo deportivo Alfonso L&oacute;pez; de igual forma la  construcci&oacute;n de la primera cancha p&uacute;blica de squash tambi&eacute;n ser&aacute; una realidad.</p>
          <p class="parrafo">Dentro  de la recuperaci&oacute;n de escenarios deportivos, tema que ser&aacute; prioridad en este  periodo, se encuentra, el cambio de alumbrado de la villa ol&iacute;mpica, obra que  garantiza seguridad y comodidad a las personas que a diario realizan ejercicios  f&iacute;sicos en el lugar. As&iacute; como la culminaci&oacute;n de las obras de mantenimiento y  adecuaci&oacute;n del estadio Alfonso L&oacute;pez, entre otras.</p>
          <p class="parrafo"><strong>Deportistas y entrenadores</strong></p>
          <p align="center" class="parrafo"><img src="slider/images/noticias/unperiodoeninder3.jpg" width="600" height="400" hspace="10" vspace="10" /></p>
          <span class="parrafo">Para el tema el Director del Instituto  Departamental de Recreaci&oacute;n y Deportes de Santander, Indersantander, ratific&oacute;  que en los primeros d&iacute;as de marzo se contratar&aacute; a entrenadores y se dar&aacute; el  apoyo a deportistas de alto rendimiento, buscando de esta forma obtener un buen  desempe&ntilde;o de los atletas hormigueros en todas las competencias deportivas. </span>
          <p class="parrafo"><br />
          </p>
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
