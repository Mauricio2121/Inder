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
                <td class="parrafo">DECRETO 1082 DE 2015 - &Uacute;nico&nbsp;Reglamentario del Sector Administrativo de Planeacion Nacional.</td>
                <td><a href="normatividad/decretos/DECRETO1082-2015.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
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
                <td class="parrafo">Decreto Reglamentario 0776 de 1996 - Funcionamiento de los Clubes con Deportistas Profesionales</td>
                <td><a href="normatividad/decretos/Decreto%20Reglamentario%200776%20de%201996%20Funcionamiento%20de%20los%20Clubes%20con%20Deportistas%20Profesionales.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
              
              <td class="parrafo">Decreto  No. 1085 de 2015 &quot;Por medio del cual se expide el Decreto Unico Reglamentario del sector Administrativo del Deporte&quot;</td>
                <td><a href="normatividad/Decreto1085-2015.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              
               <tr>
              
              <td class="parrafo">Decreto  No. 092 de 2017 &quot;Por medio del cual se Reglamenta la Contrataci&oacute;n con Entidades sin &Aacute;nimo de Lucro a la que hace Referencia el Inciso Segundo del Art&iacute;culo 355 de la Constituci&oacute;n Pol&iacute;tica&quot;</td>
                <td><a href="normatividad/Decreto092-2017.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
              
                <td class="parrafo">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="subtitulosN">Circulares Externas</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="parrafo">CIRCULAR EXTERNA No. 011 de 2011. CONSEJO ASESOR GOBIERNO NACIONAL. Orientaciones para el seguimiento a la Atenci&oacute;n al Derecho de Petici&oacute;n</td>
                <td><a href="normatividad/CircularExterna011-2011.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">CIRCULAR EXTERNA No. 04 - 2015 COLDEPORTES. Lineamientos para la destinaci&oacute;n e inversi&oacute;n de recursos &nbsp;del Impuesto a los Cigarrillos Nacionales y Extranjeros y del Impuesto Nacional al Consumo de la Telefon&iacute;a M&oacute;vil</td>
                <td><a href="normatividad/CircularExterna04-2015.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
              
              <tr>
                <td class="parrafo">CIRCULAR EXTERNA No. 04 - 2018. Horarios para el Uso del coliseo de Judo</td>
                <td><a href="normatividad/CIRCULAR04Judo.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
				<tr>
                <td class="parrafo">COMUNICADO . Uso de la Unidad Deportiva Alfonso Lopez para actividades Proselitistas</td>
                <td><a href="normatividad/COMUNICADO-leyGarantias.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
              </tr>
               <tr>
              
                <td class="parrafo">&nbsp;</td>
                <td>&nbsp;</td>
                
              </tr>
               <tr>
                 <td class="subtitulosN">Ordenanzas</td>
                 <td>&nbsp;</td>
               </tr>
               <tr>
                 <td class="parrafo">ORDENANZA 18 - 2004. Por la cual se establece una Contribuci&oacute;n con destino al deporte, la Recreaci&oacute;n y el aprovechamiento del Tiempo Libre </td>
                 <td><a href="normatividad/Ordenanza18-2004.pdf"><img src="images/descargar.png" width="151" height="40" alt="img" /></a></td>
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
                <td class="parrafo">CUANT&Iacute;AS INDERSANTANDER 2016</td>
                <td><a href="normatividad/manuales/CUANTIASCONTRATACION-2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">CUANT&Iacute;AS INDERSANTANDER 2017</td>
                <td><a href="normatividad/manuales/CUANTIASCONTRATACION-2017.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
               <tr>
                <td class="parrafo">MODELOS ESTATUTOS PARA CONFORMACI&Oacute;N DE UN CLUB DEPORTIVO</td>
                <td><a href="normatividad/manuales/MODELOESTATUTOSCLUBDEPORTIVO.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
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
                <td class="parrafo">NORMOGRAMA INDERSANTANDER 2016 </td>
                <td><a href="normatividad/NORMOGRAMA-INDERSANTANDER-2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
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
                <td class="parrafo">RESOLUCI&Oacute;N 108 - 2016 POR&nbsp;MEDIO DE LA CUAL SE ADOPTA EL C&Oacute;DIGO DE PRINCIPIOS Y VALORES EN EL INDERSANTANDER</td>
                <td><a href="normatividad/Resolucion108-2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">RESOLUCI&Oacute;N 133 - 2016 POR MEDIO DE LA CUAL SE ADOPTA EL MANUAL DE&nbsp; PROCEDIMIENTOS PARA LA EJECUCION DE INTERVENTORIA Y/O SUPERVISION Y/O INTERVENTORIA DE LOS CONTRATOS Y/O CONVENIOS QUE CELEBRE EL INDERSANTANDER</td>
                <td><a href="normatividad/Resolucion133-2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                
              </tr>
              <tr>
                <td class="parrafo">RESOLUCI&Oacute;N 054 - 2016 POR MEDIO DEL CUAL SE AJUSTA EL MANUAL DE CONTRATACI&Oacute;N A LA NORMATIVIDAD LEGAL VIGENTE</td>
                <td><a href="normatividad/Resolucion054-2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
                <tr>
                <td class="parrafo">RESOLUCI&Oacute;N No. 228 de 15 Diciembre 2016 &quot;POR LA CUAL SE INTEGRA EL SISTEMA DE GESTI&Oacute;N DE CALIDAD CON QUE CUENTA EL INSTITUTO DEPARTAMENTAL DE RECREACI&Oacute;N Y DEPORTES DE SANTANDER CON EL MODELO EST&Aacute;NDAR DE CONTROL INTERNO- MECI, EL SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO, Y EL COMPONENTE AMBIENTAL-&quot;SISTEMA DE GESTI&Oacute;N INTEGRAL&quot; SGI&quot;</td>
                <td><a href="normatividad/Resolucion228-2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                
                
              </tr>
              
              <tr>
                <td class="parrafo">RESOLUCI&Oacute;N No.012 DE 12 ENERO 2017- COLDEPORTES &quot;POR LA CUAL SE DEJA SIN EFECTOS LA RESOLUCI&Oacute;N No.0547 DE 12 JULIO 2010</td>
                <td><a href="normatividad/Resolucion012-2017.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                
                
              </tr>
               
              
               
                <tr>
                  <td class="parrafo">RESOLUCI&Oacute;N No.149 DE 24 DE AGOSTO DE 2017- POR LA CUAL SE ADOPTA EL ESTATUTO DE AUDITOR&Iacute;A INTERNA QUE DEFINE EL PROP&Oacute;SITO, LA AUTORIDAD Y LA RESPONSABILIDAD DE  LA ACTIVIDAD DE AUDITOR&Iacute;A INTERNA DE INDERSANTANDER</td>
                  <td><a href="normatividad/RESOLUCION149-2017.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                  
                  
                </tr>
              <tr>
                 <td class="parrafo">RESOLUCI&Oacute;N No.150 DE 24 DE AGOSTO DE 2017- POR MEDIO DE LA CUAL SE ADOPTA EL C&Oacute;DIGO DE &Eacute;TICA DEL AUDITOR INTERNO DEL INDERSANTANDER</td>
                 <td><a href="normatividad/RESOLUCION150-2017.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
               </tr>
				<tr>
				  <td class="parrafo">RESOLUCI&Oacute;N No.012 DE 18 DE JUNIO DE 2018 - POR MEDIO DE LA CUAL SE CONVOCA A REUNI&Oacute;N EXTRAORDINARIA A CLUBES DEPORTIVOS</td>
				  <td><a href="normatividad/RESOLUCION0112-2018.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
				  </tr>
				<tr>
                 <td class="parrafo">RESOLUCI&Oacute;N No.134 DE 19 DE JULIO DE 2018 - POR MEDIO DE LA CUAL SE ADOPTA EL MODELO INTEGRADO DE PLANEACI&Oacute;N Y GESTI&Oacute;N, MIPG</td>
                 <td><a href="normatividad/Resolucion134-2018.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
               </tr>
				<tr>
                 <td class="parrafo">RESOLUCI&Oacute;N No.049 DE 19 DE MARZO DE 2019 - POR MEDIO DE LA CUAL SE HABILITA EL HORARIO DE TRABAJO LOS D&Iacute;AS SABADOS DE 2019</td>
                 <td><a href="normatividad/Resolucion-049-2019.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
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
                <td class="parrafo">PLAN ANTICORRUPCI&Oacute;N Y ATENCION AL CIUDADANO DEL INDERSANTANDER 2016 </td>
                <td><a href="controlin/plan_anticorrupcion_2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td class="parrafo">MAPA DE RIESGOS ANTICORRUPCI&Oacute;N - 2016</td>
                <td><a href="normatividad/MAPA_DE _RIESGOS_ANTICORRUPCION _2016.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                
                
                
              </tr>
               <tr>
                <td class="parrafo">PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2017</td>
                <td><a href="normatividad/PlanAnticorrupcion2017.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                
              </tr>
				
               <tr>
                <td class="parrafo">PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2018</td>
                <td><a href="http://indersantander.gov.co/controlin/PlanAnticorrupcion2018.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                
              </tr>
				<tr>
                <td class="parrafo">PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2019</td>
                <td><a href="http://indersantander.gov.co/controlin/PlanAnticorrupcion2019.pdf"><img src="images/descargar.png" alt="img" width="151" height="40" border="0" /></a></td>
                
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
