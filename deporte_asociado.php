<?php
header("Status: 301 Moved Permanently");
header("Location: http://www.indersantander.gov.co/deporte-asociado.html");
exit;
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
        <td height="20" class="titulosN">Deporte Asociado </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="parrafo">&nbsp;</p>
          <p class="parrafo"><span class="subtitulosN">Lic. Ramiro Andrés Pabón Martínez  </span><br />
            Coordinador de Deporte Asociado<br />
            Cel. 320 4469705<br />
            Correo Electr&oacute;nico: asociado@indersantander.gov.co <br />
            TEL. 6352772 EXT.  124.</p>
          <p class="subtitulosN"><strong>Objetivo</strong></p>
          <p class="parrafo">Dise&ntilde;ar, crear, aplicar, evaluar,  controlar y coordinarlos diferentes planes, pol&iacute;ticas y programas  administrativos, as&iacute; como la formaci&oacute;n y capacitaci&oacute;n del talento humano de las  entidades que hacen parte del deporte asociado en el departamento, y con ello  garantizar el mejoramiento y/o optimizar del sector<br />
            </p>
          <p class="subtitulosN"><strong>Funciones</strong></p>
          <ul>
            <li class="parrafo">Asesorar a la Direcci&oacute;n en  los planes, programas y estrategias para el desarrollo del deporte asociado y  competitivo del Departamento. </li>
            <li class="parrafo">Asesorar a las ligas y  clubes en su organizaci&oacute;n, funcionamiento y desarrollo deportivo. </li>
            <li class="parrafo">Elaborar y presentar a la  direcci&oacute;n planes, programas y estrategias para el desarrollo deportivo del  departamento </li>
            <li class="parrafo">Presentar a la direcci&oacute;n  planes y programas relacionados con el deporte competitivo. </li>
            <li class="parrafo">Programar y facilitar la  capacitaci&oacute;n en administraci&oacute;n y legislaci&oacute;n deportiva y tramitar los  reconocimientos deportivos que por competencia le corresponden. </li>
            <li class="parrafo">Sugerir a la Direcci&oacute;n del  Instituto de acuerdo con su competencia y en coordinaci&oacute;n con las dem&aacute;s  dependencias de la Entidad, las pol&iacute;ticas para que se cumplan las funciones de  inspecci&oacute;n, vigilancia y control sobre los organismos deportivos pertenecientes  al Sistema Nacional del Deporte, de conformidad con las disposiciones legales y  reglamentarias. </li>
            <li class="parrafo">Asesorar a la Direcci&oacute;n en el apoyo y participaci&oacute;n  de los organismos del deporte asociado en los eventos, a nivel nacional e  internacional. </li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Que es ?</span><br />
            Es el desarrollado por un conjunto de entidades de car&aacute;cter privado organizados jerarquicamente; con el fin de desarrollar actividades y programas de deporte competitivo de orden municipal, departamental, nacional e internacional que tenga como objetivo el alto rendimiento de los deportistas afiliados a ellas.</p>
          <p class="subtitulosN">Servicios</p>
          <ul>
            <li class="parrafo">Preparaci&oacute;n a juegos nacionales y paral&iacute;mpicos nacionales</li>
            <li class="parrafo">Apoyo a deportistas elites y destacados</li>
            <li class="parrafo">Investigaci&oacute;n cient&iacute;fica</li>
            <li class="parrafo">Atenci&oacute;n medica, sicol&oacute;gica, alimenticia, y social.</li>
            <li class="parrafo">Juegos universitarios</li>
            <li class="parrafo">Juegos departamentales y paral&iacute;mpicos departamentales</li>
            <li class="parrafo">Asesor&iacute;a metodol&oacute;gica deportiva.</li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Beneficios</span></p>
          <ul>
            <li class="parrafo">Apoyo econ&oacute;mico para participar en competencias</li>
            <li class="parrafo">Implementaci&oacute;n deportiva</li>
            <li class="parrafo">Servicio de transporte, hospedaje y alimentaci&oacute;n.</li>
            <li class="parrafo">Uniformes de presentaci&oacute;n y competencias</li>
            <li class="parrafo">Educaci&oacute;n</li>
          </ul>
          <p class="subtitulosN">Tr&aacute;mites</p>
          <ul>
            <li class="parrafo"><strong>Proceso de inscripcion:</strong>&nbsp;en vista que es de acuerdo al calendario deportivo de cada uno de ellos. cuando inicie se dar&aacute; a conocer por escrito las fechas en las cuales se desarrollaran dichos eventos.</li>
            <li class="parrafo"><strong>Documentos que se deben acreditar:</strong>&nbsp;hay dos modalidades:</li>
            <ul>
              <li class="parrafo"><strong>Por resolucion:</strong>&nbsp;apoyo a deportistas<br />
&bull; Hoja de vida<br />
&bull; Seguro de vida vigente<br />
&bull; Pago de salud</li>
              <li class="parrafo"><strong>Por contrato apip (ligas, clubes)<br />
                </strong>&bull; Solicitud de la liga o club<br />
&bull; Contralor&iacute;a y procuradur&iacute;a de la disciplina deportiva y de su representante legal<br />
&bull; Certificado judicial R legal<br />
&bull; Fotocopia de la cedula rte legal<br />
&bull; Reconocimiento deportivo vigente<br />
&bull; Personer&iacute;a jur&iacute;dica<br />
&bull; Resoluci&oacute;n de dignatarios<br />
&bull; Certificado que se encuentra a paz y salvo con parafiscales.<br />
&bull; Cotizaciones si es el caso.</li>
            </ul>
          </ul>
          <p class="subtitulosN">Eventos</p>
          <ul>
            <li class="parrafo"><strong>Campeonatos Nacionales e Internacionales</strong>, seg&uacute;n programa de la federaci&oacute;n.</li>
            <li class="parrafo"><strong>Juegos Departamentales y Municipales</strong>, seg&uacute;n programa municipal o departamental.</li>
            <li class="parrafo"><strong>Campeonato Departamental</strong>, seg&uacute;n programa de la liga.</li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Formularios&nbsp;</span></p>
          <ul>
            <li class="parrafo">Calendario de Actividades</li>
            <li class="parrafo">Resultados Oficiales del organizador de las competencias</li>
            <li class="parrafo">Estudio Fotogr&aacute;fico.</li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Normatividad</span></p>
          <ul>
            <li class="parrafo">Ley 181 de 1995 y decretos reglamentarios.</li>
            <li class="parrafo">Constituci&oacute;n nacional y demas normas que amparen el deporte.</li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Horario</span><br />
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
