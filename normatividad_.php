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
        <td height="20" class="titulosN">Normatividad</td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <table width="600" border="1" cellpadding="3" bordercolor="#CCCCCC" bgcolor="#E5E5E5">
            <tbody>
              <tr>
                <td class="subtitulosN">Leyes</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo">LEY 181 DE 1995- Ley del deporte.pdf</td>
                <td><a href="normatividad/LEY%20181%20DE%201995%20-%20Ley%20del%20deporte.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 845 DE 2003 - Control Dopaje.pdf</td>
                <td><a href="normatividad/Ley%20845%20de%202003%20-%20Control%20Dopaje.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 18 DE 1991 - Control de sustacias y m&eacute;todos prohibidos.pdf</td>
                <td><a href="normatividad/ley%2018%20de%201991%20control%20de%20sustancias%20y%20metodos%20prohibidos%20en%20el%20deporte.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 49 DE 1993 Regimen Disciplinario del Deporte.pdf</td>
                <td><a href="normatividad/LEY%2049%20DE%201993%20Regimen%20Disciplinario%20del%20Deporte.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 582 DE 2000 - Deporte asociado de personas con limitaciones f&iacute;sicas, mentales y sensoriales.pdf</td>
                <td><a href="normatividad/LEY%20582%20DE%202000%20deporte%20asociado%20de%20personas%20con%20limitaciones%20fisica,%20mentales%20y%20sensoriales.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 729 Centros de Acondicionamiento y preparaci&oacute;n fisica en Colombia .pdf</td>
                <td><a href="normatividad/Ley%20729%20Centros%20de%20Acondicionamiento%20y%20Preparacion%20Fisica%20en%20Colombia.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 912 DE 2004 - Dia Nacional del Deporte.pdf</td>
                <td><a href="normatividad/LEY%20912%20DE%202004%20-%20Dia%20Nacional%20del%20Deporte.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 934 DE 2004 -Centros de iniciaci&oacute;n - Deporte, Educaci&oacute;n F&iacute;sica.pdf</td>
                <td><a href="normatividad/Ley 934 de 2004 Centros de Iniciacion - Deporte, Educacion Fisica.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">LEY 987 DE 2005 JUEGOS DEL CARIBE.pdf</td>
                <td><a href="normatividad/LEY%20978%20DE%202005%20JUEGOS%20DEL%20CARIBE.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Decretos</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 641 DE 2001 - Reglamenta la ley 582 de 2000.pdf</td>
                <td><a href="normatividad/decretos/Decreto%20641%20de%202001%20Reglamenta%20la%20ley%20582%20de%202000.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 763 DE 1993 - Corrige yerro en la ley 49 de 1993.pdf</td>
                <td><a href="normatividad/decretos/DECRETO%20763%20DE%201993%20-%20Corrige%20yerro%20en%20la%20ley%2049%20de%201993.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 875 DE 2005 - Procedimeintos Control al Dopaje.pdf</td>
                <td><a href="normatividad/decretos/DECRETO%20875%20DE%202005%20-%20Procedimientos%20Control%20al%20Dopaje.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 886 DE 1976 - reglamenta la actividad de los deportistas aficionados.pdf</td>
                <td><a href="normatividad/decretos/DECRETO%20886%20de%201976%20reglamenta%20la%20actividad%20de%20los%20deportistas%20aficionados.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1083 DE 1997 - Reglamenta las glorias del deporte.pdf</td>
                <td><a href="normatividad/decretos/Decreto%201083%20de%201997%20Reglamenta%20Glorias%20del%20Deporte.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1188 DE 2003 - Procedimiento para la coordinaci&oacute;n de actuaciones administrativas.pdf</td>
                <td><a href="normatividad/decretos/DECRETO%201188%20DE%202003%20-%20Procedimientos%20para%20la%20coordinacion%20de%20actuaciones%20administrativas.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1227 DE 1995- Facultades de inspecci&oacute;n, vigilancia y control.pdf</td>
                <td><a href="normatividad/decretos/Decreto%201227%20de%201995%20Facultades%20de%20inspeccion%20vigilancia%20y%20control.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1229 DE 1995 - Creaci&oacute;n de un cuerpo especial dentro de la policia.pdf</td>
                <td><a href="normatividad/decretos/Decreto%201229%20de%201995%20-%20Creacion%20de%20un%20Cuerpo%20Especial%20dentro%20de%20la%20Policia.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1231 DE 1995 - Subsidios para deportistas.pdf</td>
                <td><a href="normatividad/decretos/Decreto%201231%20de%201995%20-%20Subsidios%20para%20deportistas.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1621 DE 2002 - Dia de la ni&ntilde;ez.pdf</td>
                <td><a href="normatividad/decretos/Decreto%201621%20de%202002%20dia%20de%20la%20ninez.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1746 DE 2003 - Adscripci&oacute;n de Coldeprotes al Ministario de Cultura.pdf</td>
                <td><a href="normatividad/decretos/DECRETO%201746%20DE%202003%20Adscripcion%20de%20Coldeportes%20al%20Ministerio%20de%20Cultura.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 1822 DE 1996 - Incorporaci&oacute;n de las Juntas Seccionales de Deporte.pdf</td>
                <td><a href="normatividad/decretos/Decreto%201822%20de%201996%20Incorporacion%20de%20las%20Juntas%20Seccionales%20de%20Deporte.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 3093 DE 2003 - Reglamento impuesto telefon&iacute;a celular.pdf</td>
                <td><a href="normatividad/decretos/DECRETO%203093%20DE%202003%20-%20REGLAMENTO%20IMPUESTO%20TELEFONIA%20CELULAR.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO 3636 - Registros sanitarios (Control Dopaje).pdf</td>
                <td><a href="normatividad/decretos/Decreto%203636%20registros%20sanitarios%20(Control%20Dopaje).pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">DECRETO LEY 1228 DE 1995 - Estructura de los Organismos del Sector Asociado.pdf</td>
                <td><a href="normatividad/decretos/Decreto%20Ley%201228%20de%201995%20Estructura%20de%20los%20Organismos%20del%20Sector%20Asociado.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">Decreto Reglamentario 000407 de 1996.pdf</td>
                <td><a href="normatividad/decretos/Decreto%20Reglamentario%20000407%20de%201996.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">Decreto Reglamentario 0776 de 1996 - Funcionamiento de los Clubes con Deportistas Profesionales.pdf</td>
                <td><a href="normatividad/decretos/Decreto%20Reglamentario%200776%20de%201996%20Funcionamiento%20de%20los%20Clubes%20con%20Deportistas%20Profesionales.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Manuales</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo">C&Oacute;DIGO DE BUEN GOBIERNO.pdf</td>
                <td><a href="normatividad/manuales/CODIGO%20DE%20BUEN%20GOBIERNO.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">C&Oacute;DIGO DE &Eacute;TICA.pdf</td>
                <td><a href="normatividad/manuales/CODIGO%20DE%20ETICA.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">MANUAL DE CONTRATACI&Oacute;N INDERSANTANDER 2015 </td>
                <td><a href="normatividad/MANUAL-DE-CONTRATACION.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">CUANT&Iacute;AS INDERSANTANDER 2015 </td>
                <td><a href="normatividad/CIRCULAR-001-CUANTIAS-2015.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo"><span class="subtitulosN">Normograma</span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo">NORMOGRAMA INDERSANTANDER 2015 </td>
                <td><a href="normatividad/NORMOGRAMA-INDERSANTANDER-2015.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Resoluciones</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo">REGLAMENTACI&Oacute;N DERECHO DE PETICI&Oacute;N RESOLUCI&Oacute;N 158 DEL 14 OCTUBRE-2014</td>
                <td><a href="normatividad/REGLAMENTACION-DERECHO-DE-PETICION-RESOLUCION-158-DEL-14-OCTUBRE-2014.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">RESOLUCI&Oacute;N No 031 DE LA CREACI&Oacute;N DEL COMIT&Eacute; T&Eacute;CNICO DEL INDERSANTANDER A&Ntilde;O 2015 </td>
                <td><a href="normatividad/RESOLUCION-031-COMITE-TECNICO-INDERSANTANDER-2015.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">RESOLUCI&Oacute;N No 045 POR MEDIO DEL CUAL SE MODIFICA TEMPORALMENTE EL HORARIO DEL INDERSANTANDER </td>
                <td><a href="normatividad/RESOLUCION-MODIFICACION-TEMPORAL-HORARIO-11-ENE-2015.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">RESOLUCI&Oacute;N No 053 POR MEDIO DE LA CUAL SE ADICIONA A LA RESOLUCI&Oacute;N No 031, A LA CREACI&Oacute;N DEL COMIT&Eacute; T&Eacute;CNICO DEL INDERSANTANDER A&Ntilde;O 2015 </td>
                <td><a href="normatividad/RESOLUCION-053-COMITE-TECNICO-INDERSANTANDER-2015.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">APLICACI&Oacute;N PRINCIPIO DE PLANEACI&Oacute;N INDERSANTANDER </td>
                <td><a href="normatividad/APLICACION-PRINCIPIO-DE-PLANEACION.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Plan Anticorrupci&oacute;n </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo">PLAN ANTICORRUPCI&Oacute;N DEL INDERSANTANDER 2014 </td>
                <td><a href="normatividad/PLAN-ANTICORRUPCION.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">PLAN ANTICORRUPCI&Oacute;N DEL INDERSANTANDER 2015 </td>
                <td><a href="normatividad/PLAN-ACCION-ANTICORRUPCION-Y-ATENCION-AL-CIUDADANO-INDERSANTANDER-2015.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="subtitulosN">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
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
