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
.Estilo4 {
	font-size: 18px;
	font-weight: bold;
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
        <td height="20" class="titulosN">Oficina Jur&iacute;dica </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p><span class="Estilo4">Abogada. Luz Marina Duarte Ayala&nbsp;</span><br />
Jefe Oficina Jur&iacute;dica<br />
Correo electr&oacute;nico: luzmarinaduarteayala@hotmail.com<br />
Tel: 6352772 ext &nbsp;120</p>
          <p class="subtitulosN">&nbsp;</p>
          <p class="parrafo"><span class="subtitulosN">C&oacute;digo del buen gobierno&nbsp;</span><br />
            Son disposiciones voluntarias de autorregulaci&oacute;n de quienes ejercen el gobierno en el Instituto Departamental de Recreaci&oacute;n y Deporte, que a manera de compromiso &eacute;tico buscan garantizar una gesti&oacute;n eficiente, &iacute;ntegra y transparente en la administraci&oacute;n p&uacute;blica.<br />
            <br />
            Este documento recoge las normas de conducta, mecanismos e instrumentos que deben adoptar las instancias de direcci&oacute;n, administraci&oacute;n y gesti&oacute;n del Instituto Departamental de Recreaci&oacute;n y Deporte INDERSANTANDER con el fin de generar confianza en los p&uacute;blicos internos y externos hacia el INDERSANTANDER.</p>
          <p class="parrafo"><span class="subtitulosN">Identificaci&oacute;n y naturaleza&nbsp;</span><br />
  Es un establecimiento p&uacute;blico descentralizado del orden departamental, con personer&iacute;a jur&iacute;dica, autonom&iacute;a administrativa y patrimonio independiente, cuyo objetivo primordial es la coordinaci&oacute;n del Plan Nacional del Deporte, la Recreaci&oacute;n y la Educaci&oacute;n f&iacute;sica en los t&eacute;rminos de la ley 181 de 1995..</p>
          <p class="parrafo"><span class="subtitulosN">Objetivo</span></p>
          <ul><li class="parrafo">Brindar  la orientaci&oacute;n requerida para el fortalecimiento del criterio en el proceso  decisorio, asegurando el cumplimiento de la gesti&oacute;n en el marco de los esquemas  legales y normativos aplicables.</li>
          </ul>
          <p class="parrafo"><span class="subtitulosN">Principios &eacute;ticos&nbsp;</span></p>
          <ul>
            <li class="parrafo">Inter&eacute;s general prevalece sobre el inter&eacute;s particular. Los bienes p&uacute;blicos son sagrados.</li>
            <li class="parrafo">El INDERSANTANDER contribuir&aacute; con el mejoramiento de las condiciones de vida de toda la poblaci&oacute;n.</li>
            <li class="parrafo">El servidor p&uacute;blico del INDERSANTANDER servir&aacute; a la ciudadan&iacute;a.</li>
            <li class="parrafo">El INDERSANTANDER rinde cuentas a la sociedad sobre la utilizaci&oacute;n y los resultados de la gesti&oacute;n de los recursos p&uacute;blicos.</li>
          </ul>
          <p class="subtitulosN">Valores Institucionales</p>
          <ul>
            <li class="parrafo">Respeto.</li>
            <li class="parrafo">Honestidad.</li>
            <li class="parrafo">Lealtad.</li>
            <li class="parrafo">Responsabilidad</li>
            <li class="parrafo">Transparencia.</li>
            <li class="parrafo">Colaboraci&oacute;n.</li>
            <li class="parrafo">Compromiso.</li>
          </ul>
          <p class="subtitulosN">Organos de control</p>
          <ul>
            <li class="parrafo">Contralor&iacute;a General de la Rep&uacute;blica.</li>
            <li class="parrafo">Procuradur&iacute;a General de la Naci&oacute;n.</li>
            <li class="parrafo">Coldeportes.</li>
            <li class="parrafo">Control Social de la ciudadan&iacute;a.</li>
            <li class="parrafo">Asamblea Departamental (&oacute;rgano de control pol&iacute;tico).</li>
            <li class="parrafo">Con quienes el INDERSANTANDER mantendr&aacute; relaciones arm&oacute;nicas y suministrar&aacute; la informaci&oacute;n que legalmente estos requieran en forma OPORTUNA, COMPLETA y VERAZ para que puedan desempe&ntilde;ar su labor.</li>
          </ul>
          <p class="subtitulosN">Politicas para la gesti&oacute;n de la &eacute;tica</p>
          <ul>
            <li class="parrafo">Compromiso con la integridad.</li>
            <li class="parrafo">Compromiso para la erradicaci&oacute;n de pr&aacute;cticas corruptas.</li>
            <li class="parrafo">Acciones para la integridad y la transparencia.</li>
            <li class="parrafo">Colaboraci&oacute;n interinstitucional en la erradicaci&oacute;n de pr&aacute;cticas corruptas.</li>
            <li class="parrafo">Compromiso en la Lucha Antipirateria.</li>
          </ul>
          <p class="subtitulosN">Politicas de comunicaci&oacute;n e informaci&oacute;n</p>
          <ul>
            <li class="parrafo">Car&aacute;cter de la comunicaci&oacute;n.</li>
            <li class="parrafo">Interrelaci&oacute;n comunicativa con los usuarios o clientes externos.</li>
            <li class="parrafo">Compromiso con la comunicaci&oacute;n p&uacute;blica.</li>
            <li class="parrafo">Compromiso con la comunicaci&oacute;n organizacional.</li>
            <li class="parrafo">Compromiso de confidencialidad.</li>
            <li class="parrafo">Compromiso con la circulaci&oacute;n y divulgaci&oacute;n de la informaci&oacute;n.</li>
            </ul>
          <p class="subtitulosN">Funciones</p>
          <ul>
              <li class="parrafo">Su funci&oacute;n b&aacute;sica es prestar  asesor&iacute;a jur&iacute;dica en forma eficiente, eficaz y oportuna a la Direcci&oacute;n, al  equipo directivo y a las diferentes dependencias de la Entidad en el  conocimiento, capacitaci&oacute;n e interpretaci&oacute;n de las normas aplicables.</li>
              <li class="parrafo">Coordinar las actividades  relacionadas con la presentaci&oacute;n&nbsp; y/o  elaboraci&oacute;n de los informes establecidos o solicitados por la Junta Directiva y  por parte de la Direcci&oacute;n, as&iacute; como los documentos que deban ser aprobados por  los mismos para el normal funcionamiento y desarrollo de sus funciones,  objetivos, programas y procedimientos de la Entidad, de conformidad a la  constituci&oacute;n, la Ley y las normas vigentes que le son aplicables</li>
              <li class="parrafo">Representar&nbsp; judicial y extrajudicialmente a la Entidad en  los procesos que se adelanten en su contra o en los que se deban promover y la  direcci&oacute;n y establecimiento de los procesos de licitaci&oacute;n y contrataci&oacute;n para  su debida adjudicaci&oacute;n y ejecuci&oacute;n.&nbsp; </li>
            </ul>
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
