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
        <td height="20" class="titulosN">30 mil millones de pesos están listos para ser invertidos en el estadio Alfonso López</td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top" class="Estilo1">Bucaramanga, Febrero 13 de 2014 </td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="center"><span class="parrafo"><img src="slider/images/noticias/02132014_estadio1.jpg" width="600" height="400" hspace="10" vspace="10" /></span></div></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="parrafo">En  un recorrido de inspecci&oacute;n por la diferentes obras que se realizan en el  estadio departamental Alfonso L&oacute;pez, el gobernador de Santander Dr. Richard  Aguilar Villa, anunci&oacute; la construcci&oacute;n del anillo (tribuna alta) para el sector  oriental de este escenario deportivo, a si mismo, el primer mandatario de los  santandereanos, inform&oacute; que los estudios de sismo-resistencia se entregar&aacute;n el  28 de febrero pr&oacute;ximo.</p>
          <p class="parrafo">&ldquo;<em>Quiero dejar un estadio digno para los  santandereanos. Tenemos 30 mil millones de pesos asignados; las obras de  reforzamiento estructural estar&iacute;an por el orden de los 20 mil millones, nos  sobrar&iacute;an 10 mil para la construcci&oacute;n del anillo de la tribuna oriental, como  el recurso es insuficiente, he pedido al gobierno nacional a trav&eacute;s de  Coldeportes que nos apoyen con otros 30 mil millones para invertir en el  escenario&rdquo;, dijo el Gobernador de Santander, Dr. Richard Aguilar Villa.</em></p>
          <p class="parrafo">A  cerca del estudio de sismo-resistencia que se adelanta en el escenario  deportivo, Aguilar Villa, expres&oacute;. <em>&ldquo;El  estudio arroja que sus estructuras est&aacute;n perfectas, simplemente hay que hacerle  un reforzamiento para dar cumplimiento a la nueva normatividad.</em> <br />
            <br />
  &ldquo;<em>Una vez tengamos los resultados, se pasar&aacute;n  al juzgado que lleva el fallo de la acci&oacute;n popular y abogaremos para que se  pueda utilizar el resto de las tribunas al tiempo que se realicen las obras. No  podemos perder este escenario por un reforzamiento&rdquo;, </em>dijo el Gobernador.</p>
          <p align="center" class="parrafo"><img src="slider/images/noticias/02132014_estadio2.jpg" width="600" height="400" /></p>
          <p class="parrafo">&ldquo;<em>As&iacute; como gestion&eacute; el contrato plan para  Santander, trabajar&eacute; para que el Gobierno Nacional nos apoye con recursos  adicionales&rdquo;, </em>expres&oacute; Aguilar Villa. </p>
          <p class="parrafo">Actualmente  se cumplen obras de mantenimiento y adecuaci&oacute;n en el estadio como son, arreglo  en tribunas, parqueaderos, ba&ntilde;os, palcos, torres de iluminaci&oacute;n, entre otras,  por un costo cercano a los 5 mil millones de pesos. Obras que se entregar&aacute;n en  un t&eacute;rmino no superior a 45 d&iacute;as.</p>
          <p class="parrafo"><strong>Contrataci&oacute;n y apoyo a  deportistas de alto rendimiento. &nbsp;</strong></p>
          <span class="parrafo">Respecto al tema, el gobernante confirm&oacute; lo  dicho por el director del Indersantander, Lic. Willams Andr&eacute;s Garc&iacute;a Becerra,  quien anunci&oacute; que en el mes de marzo pr&oacute;ximo, se realizar&aacute;n las respectivas  contrataciones, buscando mejorar el rendimiento del deporte &ldquo;hormiguero&rdquo; en los  Juegos Nacionales del pr&oacute;ximo a&ntilde;o.</span>
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
