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
        <td height="20" class="titulosN">Liga Santandereana de ajedrez definirá selección este próximo fin de semana</td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top" class="Estilo1">Bucaramanga, Febrero 13 de 2014 </td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="center"><span class="parrafo"><img src="slider/images/noticias/02132014_ajedrez1.jpg" width="600" height="400" hspace="10" vspace="10" /></span></div></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="parrafo">Con  el objetivo de conformar la Selecci&oacute;n Santander que representar&aacute; al  departamento en las pr&oacute;ximas competencias, la Liga Santandereana de Ajedrez  realiza este fin de semana un torneo selectivo amateur para todas las  categor&iacute;as. El evento, adem&aacute;s, entrega clasificaci&oacute;n al pr&oacute;ximo campeonato  nacional a realizarse del 12 al 16 de marzo pr&oacute;ximo en Bucaramanga. </p>
          <p class="parrafo">La  competencia que se cumplir&aacute; en la sede de la liga santandereana&nbsp; de la disciplina a partir de las 2:00 p.m.  del s&aacute;bado 16 de febrero, espera reunir alrededor de 80 deportistas, quienes no  cuentan con puntuaci&oacute;n en el sistema Elo, (m&eacute;todo matem&aacute;tico para calcular la  habilidad relativa de los jugadores). </p>
          <p class="parrafo">&ldquo;El  selectivo es m&aacute;s que todo honor&iacute;fico, es tener la casilla para representar a  Santander en el pr&oacute;ximo campeonato nacional. Por su parte el torneo nacional a  realizarse en marzo, entrega una bolsa de premios cercana a los 8 millones de pesos&rdquo;,  expres&oacute; la presidenta de la Liga Santandereana de Ajedrez, Francisca&nbsp; Olivero Jaimes. </p>
          <p class="parrafo">Cuatro  ligas de diferentes partes del pa&iacute;s han confirmado la participaci&oacute;n de algunos  de sus deportistas en el campeonato nacional, evento que espera reunir cerca de  140 ajedrecistas. &ldquo;Es un evento importante, re&uacute;ne a los mejores jugadores del  pa&iacute;s que tienen menos de 2.000 puntos en el sistema Elo; el torneo entrega  casilla a la mejor dama y al mejor hombre en competencia para el mundial  amateur a realizarse en abril en Singapur&rdquo;, asegur&oacute; el entrenador de la Liga  Santandereana de Ajedrez, Pablo Ru&iacute;z Aguilar. </p>
          <ul>
            <li class="parrafo">El valor de inscripci&oacute;n para  el torneo selectivo es de 10 mil pesos.</li>
            <li class="parrafo">El valor de inscripci&oacute;n para  el campeonato nacional es de 70 mil pesos.</li>
            <li class="parrafo">El campeonato nacional se  jurar&aacute; por un sistema suizo a 9 rondas. </li>
          </ul>
          <p align="center" class="parrafo"><img src="slider/images/noticias/02132014_ajedrez2.jpg" width="600" height="400" /></p>
          <p class="parrafo">De  igual manera y con el objetivo de conformar el seleccionado santandereano&nbsp; en categor&iacute;as menores de 18 a&ntilde;os, que  competir&aacute;n en el pr&oacute;ximo zonal centro que se cumplir&aacute; en Manizales del 1 al 4  de mayo, la Liga santandereana de Ajedrez hace un llamado a deportistas, padres  de familia y empresa privada para que se unan y apoyen el deporte &ldquo;ciencia&rdquo;. </p>
          <p class="parrafo">&ldquo;La  escuela de formaci&oacute;n para los peque&ntilde;os quienes ser&aacute;n los representantes futuros  del ajedrez santandereano, abre inscripciones con horarios los s&aacute;bados de 8:00  a 10:00 a.m., para quienes no tienen conocimiento del deporte y de 10:00 a.m. a  12:00 m. para quienes ya lo practican&rdquo;, expres&oacute; la presidenta de la Liga  Santandereana de Ajedrez, Francisca Olivero. </p>
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
