<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Instituto Departamental de Recreaci&oacute;n y Deportes de Santander</title>
<LINK REL="SHORTCUT ICON" HREF="ic.ico" />
<style type="text/css">
<!--
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
        <td height="20" class="titulosN">Deporte Social Comunitario </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="subtitulosN"><span class="parrafo"><br />
LIC. DIEGO GUTIERREZ SARMIENTO&nbsp;<br />
              Coordinador Deporte Social y Comunitario
              <br />
              TEL. 6352772 Ext. 122</span></p>
          <p class="subtitulosN"><strong>Presentaci&oacute;n</strong></p>
          <p class="parrafo">El Deporte social comunitario está enmarcado dentro de las políticas del Gobierno Departamental encaminadas a brindar a la población Santandereana, los espacios que permitan mediante la actividad Física, la recreación, el deporte y la utilización del tiempo libre, mejorar la calidad de vida. </p>
          <p class="subtitulosN"><strong>Objetivo</strong></p>
          <p class="parrafo">Generar espacios de  esparcimiento y recreaci&oacute;n que contribuyan al mejoramiento de la calidad de  vida de la comunidad santandereana.</p>
          <p class="subtitulosN"><strong>Funciones</strong></p>
          <ul>
            <li class="parrafo">Dise&ntilde;ar programas especiales que fomenten y  estimulen la educaci&oacute;n f&iacute;sica, el deporte y la recreaci&oacute;n de las personas con  discapacidades f&iacute;sicas, ps&iacute;quicas y sensoriales y de la tercera edad. </li>
            <li class="parrafo">Dar asistencia t&eacute;cnica a los entes municipales  para la ejecuci&oacute;n de sus planes y proyectos relacionados con el deporte, la  recreaci&oacute;n y la educaci&oacute;n f&iacute;sica. </li>
            <li class="parrafo">Fomentar y estimular programas especiales  contemplados dentro del deporte social y comunitario, orientados a los  discapacitados, mujeres cabeza de familia, adulto mayor y senior master. </li>
            <li class="parrafo">Fomentar actividades recreativas orientadas a  los diferentes grupos poblacionales, tales como ni&ntilde;os j&oacute;venes y adultos. </li>
            <li class="parrafo">Supervisar el mantenimiento de los escenarios  deportivos y el pr&eacute;stamo de los mismos. </li>
            <li class="parrafo">Ejecutar planes y programas para el desarrollo  del deporte formativo, recreativo y social comunitario.</li>
            <li class="parrafo">Definir el plan anual de acci&oacute;n deportivo concatenado  al plan de desarrollo del departamento. </li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Descripci&oacute;n</span><br />
  De acuerdo a la ley 115 de 1995, en su art&iacute;culo 16, se considera que el Deporte social comunitario &ldquo;Es el aprovechamiento del deporte con fines de esparcimiento, recreaci&oacute;n y desarrollo f&iacute;sico de la comunidad. Procura integraci&oacute;n, descanso y creatividad. Se realiza mediante la acci&oacute;n interinstitucional y la participaci&oacute;n comunitaria para el mejoramiento de la calidad de vida&rdquo;&nbsp;<br />
            <br />
            Dando cumplimiento a la ley el instituto ha planteado en su plan de desarrollo y dentro de la L&iacute;nea estrat&eacute;gica 3, Ejercit&aacute;ndonos y Recre&aacute;ndonos para un futuro Mejor, ha planteado el programa de Actividad F&iacute;sica Comunitaria y Recreaci&oacute;n que contiene investigaci&oacute;n, capacitaci&oacute;n, redes de colaboraci&oacute;n, festivales recreativos y programas de actividad f&iacute;sica.&nbsp;<br />
            <br />
            Teniendo en cuenta el Instituto contribuye en el apoyo a los municipios intentando llegar a todas la poblaciones a trav&eacute;s de los institutos municipales o de la entidad designada por las alcald&iacute;as para promover la actividad deportiva y recreativa en el municipio.</p>
          <p class="parrafo"><span class="subtitulosN">Tr&aacute;mites y servicios</span><br />
  Los programas de deporte social comunitario est&aacute;n dise&ntilde;ados para toda la poblaci&oacute;n sin embargo en determinados casos que se cuente de un evento especial con reglamentaci&oacute;n espec&iacute;fica esta se har&aacute; llegar a los distintos municipios.</p>
          <p class="subtitulosN">Eventos</p>
          <ul>
            <li class="parrafo">Festival recre&aacute;ndonos ((municipales, provincial y departamental)</li>
            <li class="parrafo">Actividad f&iacute;sica sistematizada para la salud</li>
            <li class="parrafo">Capacitaci&oacute;n en recreaci&oacute;n comunitaria a 30 entes deportivos municipales</li>
            <li class="parrafo">Programa 'Santander Recreactivo y Social'  </li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Objetivos espec&iacute;ficos</span><br />
          </p>
          <ul>
            <li class="parrafo">Desarrollar una Pol&iacute;tica incluyente a trav&eacute;s de la participaci&oacute;n de los colombianos que practican actividades deportivas de forma recreativa.</li>
            <li class="parrafo">Promover la integraci&oacute;n de Localidades, Comunas, Barrios y Veredas a trav&eacute;s de actividades deportivas y recreativas de f&aacute;cil acceso.</li>
            <li class="parrafo">Generar las condiciones para motivar un desarrollo permanente del deporte recreativo a nivel comunal, frente a una estrategia de Deporte para Todos.</li>
            <li class="parrafo">Mejorar los &iacute;ndices de seguridad, salud y convivencia ciudadana en el Pa&iacute;s a trav&eacute;s del Deporte Social Comunitario</li>
            <li class="parrafo">Soportar la practica de la actividad deportiva comunitaria en una estructura organizada.</li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Formularios oficiales&nbsp;</span><br />
&Eacute;sta informaci&oacute;n estar&aacute; disponible pr&oacute;ximamente.</p>
          <p class="parrafo"><span class="subtitulosN">Normatividad</span><br />
  Constitucionalmente esta regulado la el deporte debe ser concebido y reivindicado como un derecho social. la pr&aacute;ctica deportiva y la actividad f&iacute;sica tienen unas innegables cualidades, contempladas por casi todos: mejora la salud f&iacute;sica y mental; socializa, sobre todo el deporte de equipo, y les son intr&iacute;nsecos una serie de valores fundamentales en la sociedad moderna( compa&ntilde;erismo, esp&iacute;ritu de superaci&oacute;n, autoestima, integraci&oacute;n, deportividad, juego limpio, no violencia; como derecho social, una de sus aspiraciones y pilares b&aacute;sicos debe ser la posibilidad de acceso de todos al mismo. en una sociedad igualitaria (la nuestra no lo es todav&iacute;a), cualquier persona, independientemente de su edad, condici&oacute;n o situaci&oacute;n debe tener garantizado el disfrute de todos los derechos.&nbsp;<br />
            <br />
            De acuerdo a la ley 115 de 1995, en su art&iacute;culo 16, se considera que el Deporte social comunitario &ldquo;Es el aprovechamiento del deporte con fines de esparcimiento, recreaci&oacute;n y desarrollo f&iacute;sico de la comunidad. Procura integraci&oacute;n, descanso y creatividad. Se realiza mediante la acci&oacute;n interinstitucional y la participaci&oacute;n comunitaria para el mejoramiento de la calidad de vida&rdquo;, de igual forma se regula por la Ley 181 de 1995.</p>
          <p class="parrafo">Notas a los estados financieros del Indersantander a 31 de diciembre de 2014.   (<a href="institucional/ADMINISTRACION-DEPORTIVA.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
          <p class="parrafo"><span class="subtitulosN">Horario de atenci&oacute;n&nbsp;</span><br />
  Lunes a viernes de 7:30 a 12:00 m y de 1:30 pm a 5:00pm&nbsp;</p>
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
