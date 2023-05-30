<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
.Estilo2 {font-family: Calibri, Arial, Helvetica, sans-serif}
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
        <td height="20" class="titulosN">Deporte Estudiantil y Formativo </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="subtitulosN"><span class="parrafo"><br />
              <br />
LIC. MIGUEL ANGEL REMOLINA MU&Ntilde;OZ&nbsp;<br />
Coordinador Deporte Estudiantil y Formativo&nbsp;<br />
Cel. 3108572478<br />
Correo Electronico:&nbsp;<a href="mailto:maremolina@hotmail.com" target="_blank" class="gris Estilo2">maremolina@hotmail.com</a>&nbsp;/&nbsp;<a href="mailto:destudiantil@indersantander.gov.co" target="_blank" class="gris Estilo2">destudiantil@indersantander.gov.co</a>&nbsp;<br />
TEL. 6352772 Ext. 120 - Escuelas de Formaci&oacute;n: Ext. 121</span></p>
          <p class="subtitulosN"><strong>Objetivo</strong></p>
          <p class="parrafo">Gestionar el desarrollo de  actividades para el fomento del deporte y la competencia a nivel estudiantil.<br />
            <strong><br />
            <span class="subtitulosN">Funciones</span></strong></p>
          <ul>
            <li class="parrafo">Impulsar actividades  deportivas, formativas y pedag&oacute;gicas en las instituciones educativas, centros y  escuelas deportivas, tendientes a conocer los talentos en el &aacute;rea del deporte a  esos niveles y prestar apoyo para el desarrollo y formaci&oacute;n del deportista  santandereano. </li>
            <li class="parrafo">Facilitar asistencia t&eacute;cnica  a los Institutos Municipales de Deportes, para la ejecuci&oacute;n de sus planes,  programas y proyectos relacionados con el deporte formativo y estudiantil y  eventos deportivos especiales. </li>
            <li class="parrafo">Programar actividades del  deporte formativo y eventos deportivos en todos los niveles de la Educaci&oacute;n  formal y no formal primaria b&aacute;sica, media vocacional y superior. </li>
            <li class="parrafo">Participar en la planeaci&oacute;n,  programaci&oacute;n, organizaci&oacute;n y ejecuci&oacute;n de todas las actividades encaminadas a  desarrollar los programas de deporte, educaci&oacute;n f&iacute;sica y recreaci&oacute;n.</li>
            <li><span class="parrafo">Coordinar la creaci&oacute;n, regulaci&oacute;n, control t&eacute;cnico  y administrativo de las Escuelas de Formaci&oacute;n Deportiva. Participar en el  dise&ntilde;o del plan departamental de capacitaci&oacute;n, recreaci&oacute;n y educaci&oacute;n f&iacute;sica.</span><br />
          </li>
          </ul>
          <table width="607" border="1" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#E1E1E1" class="parrafo">
            <tbody>
              
              <tr>
                <td width="401" class="subtitulosN">Escuelas Deportivas - Cartillas Escuelas Deportivas</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Cartilla parte 1.pdf</td>
                <td width="129"><a href="estudiantil/CARTILLAS%20ESCUELAS%20DEPORTIVAS%202.006%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Cartilla parte 2.pdf</td>
                <td><a href="estudiantil/CARTILLAS%20ESCUELAS%20DEPORTIVAS%202.006%20(C).2.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Cartilla parte 3.pdf</td>
                <td><a href="estudiantil/CARTILLAS%20ESCUELAS%20DEPORTIVAS%202.006%20(C).3.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Directorios Administrativos y T&eacute;cnicos</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Directorio Interno Indersantander.xls</td>
                <td><a href="estudiantil/DIRECTORIO%20INTERNO%20INDERSANTANDER.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Documentos para organizar una escuela</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Fichas Generales Escuelas.pdf</td>
                <td><a href="estudiantil/fichas%20generales%20escuelas%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Modelos normativos escuelas deportivas.pdf</td>
                <td><a href="estudiantil/MODELOS%20NORMATIVOS%20ESCUELAS%20DPTVAS%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Plan pedag&oacute;gico escuelas.pdf</td>
                <td><a href="estudiantil/PLAN%20PEDAGOGICO%20ESCUELAS%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Legislaci&oacute;n y normas</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Apartes Legislaci&oacute;n deportiva.pdf</td>
                <td><a href="estudiantil/APARTES%20LEGISLACION%20DEPORTIVA%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Decreto 2225 de 1985.pdf</td>
                <td><a href="estudiantil/DECRET%202225%20DEL%2085.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Proyecto de ley escuelas deportivas.pdf</td>
                <td><a href="estudiantil/PROYECTO%20DE%20LEY%20ESCUELAS%20DEPORTIVAS.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Real decreto 1913/1997.pdf</td>
                <td><a href="estudiantil/Real%20Decreto%201913.doceSCUELAS%20dEPORTIVAS%20ESPANA.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Resoluci&oacute;n 1909 de 1991 proyecto de escuelas deportivas.pdf</td>
                <td><a href="estudiantil/Resolucion%201909%20de%201991%20proyecto%20de%20Escuelas%20deportivas.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Resoluci&oacute;n E.D. 000058 se crea el proyecto de escuelas.pdf</td>
                <td><a href="estudiantil/Resolucion%20E.D.%20000058%20SE%20CREA%20EL%20PROYECTO%20DE%20ESCUELAS.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Resoluci&oacute;n funcionamiento escuelas deportivas santander.pdf</td>
                <td><a href="estudiantil/RESOLUCION%20FUNCIONAMIENTO%20ESCUELAS%20DEPORTIVAS%20SANTANDER%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Temas Afines</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Art&iacute;culo documento escuelas.pdf</td>
                <td><a href="estudiantil/ARTICULO%20DOCUMENTO%20ESCUELAS.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Derechos del ni&ntilde;o.pdf</td>
                <td><a href="estudiantil/DERECHOS%20DEL%20NINO.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Plan pedag&oacute;gico escuelas.pdf</td>
                <td><a href="estudiantil/PLAN%20PEDAGOGICO%20ESCUELAS%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Requerimientos nutricionales en j&oacute;venes deportistas.pdf</td>
                <td><a href="estudiantil/REQUERIMIENTOS%20NUTRICIONALES%20EN%20JOVENES%20DEPORTISTAS.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Educaci&oacute;n f&iacute;sica - Legislaci&oacute;n y normas</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Apartes legislaci&oacute;n deportiva.pdf</td>
                <td><a href="estudiantil/eduFisica/APARTES%20LEGISLACION%20DEPORTIVA%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Seminario Coldeportes administraci&oacute;n y legislaci&oacute;n deportiva.pdf</td>
                <td><a href="estudiantil/eduFisica/SEMINARIO%20COLDEPORTE%20ADMINISTRACION%20Y%20LEGISLACION%20DEPORTIVA%201.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Proyectos</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Proyecto programas educaci&oacute;n f&iacute;sica.pdf</td>
                <td><a href="estudiantil/eduFisica/PROYECTO%20PROGRAMAS%20EDUCACION%20FISICA%202.009.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Temas afines</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Centros de educaci&oacute;n f&iacute;sica parte1.pdf</td>
                <td><a href="estudiantil/eduFisica/C.E.F.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Centros de educaci&oacute;n f&iacute;sica parte2.pdf</td>
                <td><a href="estudiantil/eduFisica/C.E.F.2.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Centros de educaci&oacute;n f&iacute;sica parte3.pdf</td>
                <td><a href="estudiantil/eduFisica/C.E.F.3.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Conceptos de educaci&oacute;n f&iacute;sica.pdf</td>
                <td><a href="estudiantil/eduFisica/CONCEPTOS%20EDUCACION%20FISICA.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Innovaciones y desaf&iacute;os en la evaluaci&oacute;n.pdf</td>
                <td><a href="estudiantil/eduFisica/INNOVACIONES%20Y%20DESAFIOS%20EN%20LA%20EVALUACION.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Juegos deportivos escolares - Circulares y boletines</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Circulares JES - JIN</td>
                <td><a href="estudiantil/escolares/CIRCULARES%20JES-JIN%202009.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Legislaci&oacute;n y normatividad deportiva</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Apartes legislacion deportiva.pdf</td>
                <td><a href="estudiantil/escolares/APARTES%20LEGISLACION%20DEPORTIVA%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Decreto 1191 de 1978.pdf</td>
                <td><a href="estudiantil/escolares/DECRET%201191%20DE%2078.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Decreto 2225 de 1985.pdf</td>
                <td><a href="estudiantil/escolares/DECRET%202225%20DEL%2085.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Ley 375 de 1997 de la juvnetud.hmt</td>
                <td><a href="estudiantil/escolares/Ley%20375%20de%201997%20de%20la%20Juventud.htm"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Ley 375 de 1997 de la juvnetud.hmt</td>
                <td><a href="estudiantil/escolares/Ley%20934%20del%202.004%20Educ.%20Fisica.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Ley 934 de 2004 Desarrollo de la Educaci&oacute;n F&iacute;sica.hmt</td>
                <td><a href="estudiantil/escolares/Ley%20934%20de%202004%20Desarrollo%20de%20la%20Educacion%20Fisica.htm"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Ley 934 de 2004 Educaci&oacute;n F&iacute;sica.pdf</td>
                <td><a href="estudiantil/escolares/Ley%20934%20del%202.004%20Educ.%20Fisica.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Cronograma de actividades JES</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Cronograma de actividades JES.xls</td>
                <td><a href="estudiantil/escolares/CRONOGRAMA%20DE%20ACTIVIDADES%20JES%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Organizaci&oacute;n t&eacute;cnica y operativa</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Delegaci&oacute;n fase provincial y final departamental JES 2.009.xls</td>
                <td><a href="estudiantil/escolares/DELEGACION%20FASE%20PROVINCIAL%20Y%20FINAL%20DEPTAL%20JES%202.009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Juegos escolares edades.xls</td>
                <td><a href="estudiantil/escolares/JES%20DEP-EDADES%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Mapa provincias Santander.pdf</td>
                <td><a href="estudiantil/escolares/MAPA%20PROVINCIAS%20SANTANDER.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Participantes y estadia final departamental 2.009.xls</td>
                <td><a href="estudiantil/escolares/PARTICIPANTES%20Y%20ESTADIA%20FINAL%20DEPTAL%20J.%20ES.%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Planilla atletismo JES departamental 2.009.xls</td>
                <td><a href="estudiantil/escolares/PLANILLA%20ATLETISMO%20JES%20DEPTAL%202.009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Planilla inscripci&oacute;n JES 2.009.xls</td>
                <td><a href="estudiantil/escolares/PLANILLA%20INSCRIPCION%20JES%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Zonificaci&oacute;n departamento JES.pdf</td>
                <td><a href="estudiantil/escolares/ZONIFICACION%20DEPARTAMENTO%20JES%202009.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Programaci&oacute;n general final departamental JES 2.009</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Programaci&oacute;n final departamental JES 2009.xls</td>
                <td><a href="estudiantil/escolares/PROGRAMACION%20GRAL%20FINAL%20DPTAL%20JES%202.009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Juegos Intercolegiados - Circulares y boletines </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Circulares JES-JIN 009.pdf</td>
                <td><a href="estudiantil/intercolegiados/CIRCULARES%20JES-JIN%202009.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Legislaci&oacute;n y normatividad deportiva</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Apartes legislaci&oacute;n deportiva.pdf</td>
                <td><a href="estudiantil/intercolegiados/APARTES%20LEGISLACION%20DEPORTIVA%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Decreto 1191 de 1978.pdf</td>
                <td><a href="estudiantil/intercolegiados/DECRET%201191%20DEL%2078.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Ley 375 de 1997 de la Jueventud.htm</td>
                <td><a href="estudiantil/intercolegiados/Ley%20375%20de%201997%20de%20la%20Juventud.htm"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Ley 934 del 2004 Educ. F&iacute;sica.pdf</td>
                <td><a href="estudiantil/intercolegiados/Ley%20934%20del%202.004%20Educ.%20Fisica.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Organizaci&oacute;n t&eacute;cnica y operativa</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Cronograma de actividades JES-JIN.xls</td>
                <td><a href="estudiantil/intercolegiados/CRONOGRAMA%20DE%20ACTIVIDADES%20JES%20-%20JIN%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Estad&iacute;sticas JES-JIN instituciones educativas 2.008.xls</td>
                <td><a href="estudiantil/intercolegiados/ESTADISTICAS%20JES%20JIN%20INSTITUCIONES%20EDUCATIVAS%202.008.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Formulario datos generales instituciones educativas de Santander.xls</td>
                <td><a href="estudiantil/intercolegiados/FORMULARIO%20DATOS%20GENERALES%20INSTITUCIONES%20EDUCATIVAS%20DE%20SANTANDER.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>JIN - DEP - EDADES 2009.xls</td>
                <td><a href="estudiantil/intercolegiados/JIN-DEP-EDADES%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Planilla atletismo JES-JIN departamental 2.009.xls</td>
                <td><a href="estudiantil/intercolegiados/PLANILLA%20ATLETISMO%20JES%20JIN%20DEPTAL%202.009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Zonificaci&oacute;n departamento JIN 2009.pdf</td>
                <td><a href="estudiantil/intercolegiados/ZONIFICACION%20DEPARTAMENTO%20JIN%202009.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Programaciones y resultados</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Programaci&oacute;n general final departamental JIN 2009.xls</td>
                <td><a href="estudiantil/intercolegiados/PROGRAMACION%20GRAL%20FINAL%20DPTAL%20JIN%202.009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Programaci&oacute;n general zonal nacional JIN 2009.xls</td>
                <td><a href="estudiantil/intercolegiados/PROGRAMACION%20GRAL%20ZONAL%20NAL%20JIN%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Juegos de la Juventud - Legislaci&oacute;n y normatividad deportiva</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Apartes legislaci&oacute;n deportiva.pdf</td>
                <td><a href="estudiantil/juventud/APARTES%20LEGISLACION%20DEPORTIVA%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Preguntas y respuestas Coldeportes.pdf</td>
                <td><a href="estudiantil/juventud/PREGUNTAS%20Y%20RESPUESTAS%20COLDEPORTES.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Organizaci&oacute;n t&eacute;cnica y operativa</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Delegaci&oacute;n fase provincial y final departamental 2009.xls</td>
                <td><a href="estudiantil/juventud/DELEGACION%20FASE%20PROVINCIAL%20Y%20FINAL%20DEPTAL%20JDSJ%20%202.009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Preguntas y respuestas Coldeportes.pdf</td>
                <td><a href="estudiantil/juventud/PREGUNTAS%20Y%20RESPUESTAS%20COLDEPORTES.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Participantes y estadia final departamental.xls</td>
                <td><a href="estudiantil/juventud/PARTICIPANTES%20Y%20ESTADIA%20FINAL%20DEPTAL%20J.D.S.J.%20%202009.xls"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>Zonificaci&oacute;n departamento 2009.pdf</td>
                <td><a href="estudiantil/juventud/ZONIFICACION%20DEPARTAMENTO%20JDSJ%202009.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Legislaci&oacute;n y normatividad deportiva</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Apartes legislaci&oacute;n deportiva.pdf</td>
                <td><a href="estudiantil/juventud/APARTES%20LEGISLACION%20DEPORTIVA%20(C).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
          <p class="parrafo">&nbsp;</p>
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
