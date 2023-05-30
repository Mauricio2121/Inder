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
        <td height="20" class="titulosN">Estructura y Organigrama </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="parrafo"><span class="subtitulosN">Estructura org&aacute;nica</span><br />
  La direcci&oacute;n y administraci&oacute;n del Instituto Departamental de Recreaci&oacute;n y Deporte de Santander &ndash; INDERSANTANDER, estar&aacute; a cargo de una Junta Directiva y un Director, que ser&aacute; su Representante Legal respectivamente. La Junta Directiva estar&aacute; conformada por seis (6) miembros, con sus respectivos suplentes, discriminados as&iacute;:</p>
          <p class="parrafo">El Gobernador del Departamento o su Delegado. El Secretario de Educaci&oacute;n del Departamento o su Delegado.. Un Representante de las Ligas Departamentales. Un Representante de los Institutos Deportivos municipales. Un Representante de Coldeportes Nacional. Un Representante de los Discapacitados.</p>
          <p class="parrafo">La Junta Directiva determinar&aacute; la estructura org&aacute;nica del Instituto Departamental de Recreaci&oacute;n y Deporte de Santander INDERSANTANDER as&iacute;:&nbsp;<br />
  Teniendo en cuenta el Instituto contribuye en el apoyo a los municipios intentando llegar a todas la poblaciones a trav&eacute;s de los institutos municipales o de la entidad designada por las alcald&iacute;as para promover la actividad deportiva y recreativa en el municipio.</p>
          <p class="parrafo"><strong>Unidades del Nivel Directivo</strong>: ser&aacute; ejercida por el Director como Representante Legal del Instituto. Unidades del<strong>Nivel Asesor</strong>: que cumplen funciones de asesorar, coordinar y evaluar las actividades que realice el Instituto.<strong>Unidades Operativas</strong>: Que incluye los servicios administrativos internos Grupo Administrativo y financiero, cumplen funciones de coordinar, programar, controlar y evaluar todas las actividades Administrativas y Financieras.<br />
              <strong>Unidades para decisi&oacute;n de Asuntos Especiales</strong>: que cumple todas las funciones de dirigir, coordinar, controlar y evaluar todas las actividades deportivas a nivel asociado.</p>
          <p class="subtitulosN">Organigrama</p>
          <p class="parrafo">La estructura administrativa del Indersantander  corresponde con la pol&iacute;tica&nbsp; p&uacute;blica de  apoyar el deporte social y comunitario, el deporte estudiantil y formativo, el deporte  asociado y el deporte de alto rendimiento para proyectar el nivel de competencia  de alto rendimiento de los deportistas de manera integral en las &aacute;reas  biom&eacute;dica, metodol&oacute;gica, t&eacute;cnica aplicando est&aacute;ndares de rendimiento&nbsp; estad&iacute;stico que garanticen alcanzar ciertamente  las marcas m&iacute;nimas&nbsp; requeridas para  participar en juegos regionales, nacionales e internacionales.</p>
          
          <a href="archivos/RECURSOHUMANO2015.pdf" target="_blank" class="gris"><strong><p class="subtitulo">Descarga el archivo de planta de personal aqu&iacute;</p></strong></a>
          <p class="parrafo"><img src="images/organigrama.jpg" width="630" height="382" /></p>
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
