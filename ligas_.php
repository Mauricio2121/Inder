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
a.diferent:active {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 17px;
	text-decoration: underline;
	color: #18B736;
}
a.diferent:hover {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 17px;
	text-decoration: underline;
	color: #18B736;
}
a.diferent:visited {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 17px;
	text-decoration: underline;
	color: #18B736;
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
        <td height="20" class="titulosN"><p>Ligas</p>
          <p><br />
            
            <a href="archivos/LIGASDESANTANDER2015.pdf" target="_blank" class="gris"><strong>Descarga el listado completo en pdf</strong></a>
            <a href="archivos/LIGASDESANTANDER2015.pdf" target="_blank" class="gris"><strong>aqui.</strong></a></p>
          <p>&nbsp;</p>
          </td>
      </tr>
      <tr>
        <td height="20" class="titulosN">Liga Santandereana de Atletismo</td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
          <p class="parrafo"><strong>Presidente</strong>&nbsp;William Rodolfo Ni&ntilde;o Mancipe&nbsp;<br />
              <strong>Direcci&oacute;n</strong>&nbsp;Indersantander of 407&nbsp;<br />
              <strong>Tel&eacute;fono</strong>&nbsp;6336016&nbsp;<br />
              <strong>e - mail</strong>&nbsp;willime52@hotmail.com</p>
          <p class="parrafo">&nbsp;</p>
        </div></td>
      </tr>
    </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Billar</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Leon Uribe&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Calle 42 # 8 - 34 Alfonso L&oacute;pez&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6422028 - 6523818&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>Ligasantandereanadebillar@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Bolo Americano</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Antonio Sarmiento R.&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Calle 28 # 12 - 26&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6305915&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>henflorez@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Boxeo</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente&nbsp;</strong>Rafael Luna&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Coliseo Edmundo Luna Santos&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6464927&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>lisabox@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Ciclismo</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Hern&aacute;n Buenahora Guti&eacute;rrez&nbsp;<br />
                  <strong>Direcci&oacute;n&nbsp;</strong>Calle 14 # 32 - 31 Vel&oacute;dromo A.F.O&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6832864 - 6497987&nbsp;<br />
              <strong>e - mail&nbsp;</strong>liciclismo@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de F&uacute;tbol</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente:&nbsp;</strong>Jaime Ord&oacute;&ntilde;ez Ord&oacute;&ntilde;ez<br />
                  <strong>Vicepresidente:</strong>&nbsp;Jairo Alberto Ni&ntilde;o C&aacute;rdenas<br />
                  <strong>Secretario:&nbsp;</strong>Orlando de Jes&uacute;s Russo D&iacute;az<br />
                  <strong>Vocal:&nbsp;</strong>Henry Restrepo Restre</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de F&uacute;tbol de Sal&oacute;n</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Dionisio Arias Solano&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Coliseo Edmundo Luna Santos&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6442646 - 6442094&nbsp;<br />
                  <strong>e - mail</strong>&nbsp;lisafutsal@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Judo</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente&nbsp;</strong>Rodrigo Hernandez Abril&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Indesantander of 405&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6389080&nbsp;<br />
                  <strong>e - mail</strong>&nbsp;senseiromero@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Karate-Do</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Elsa Almeida Patarroyo&nbsp;<br />
                  <strong>Direcci&oacute;n&nbsp;</strong>Calle 40 # 28 A 20 apto 601&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6412168&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>ligasantandereanakaratedo@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Lidesir</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Fredy Gonzalez&nbsp;<br />
                  <strong>Direcci&oacute;n&nbsp;</strong>Indersantander of 101&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6352772 ext 218&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>lidesir@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Lisorsan</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Jimmy Vega Pacheco&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Indersantander of 1 piso&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6340093&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>comisiontecnicalisorsan@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Pesas</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente&nbsp;</strong>Jaime Enrique Tarazona&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Carrera 46 # 55 - 21 Terrazas&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6430090 - 6476885&nbsp;<br />
                  <strong>e - mail</strong>&nbsp;Jeta011@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana De Softbol</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp; CARLOS ARTURO GARCIA&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp; Carrera 24 # 56 - 49 Barrio Gal&aacute;n&nbsp;<br />
                  <strong>Tel&eacute;fono&nbsp;</strong>&nbsp;6223954&nbsp;<br />
                  <strong>e - mail</strong>&nbsp; Manyoma87@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Squash</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Gabriel Manuel Vargas Grau&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Centro Medico Carlos Ardila Lule casa 308&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6393136&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>&nbsp;squashsantander@gmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Taekwondo</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente&nbsp;</strong>Juan Carlos Franco Mendoza&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Indesantander of 401&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6521818 ext 203&nbsp;<br />
                  <strong>e - mail&nbsp;</strong>ligasantandereanadetkd@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Tejo</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Salustiano Cardozo (Entrenador)&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Coliseo Capi Pardo<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6352772&nbsp;<br />
                  <strong>e - mail</strong>&nbsp;lisantejo@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td height="20" class="titulosN">Liga Santandereana de Tiro</td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top"><div align="justify">
              <p class="subtitulosN">Informaci&oacute;n de Cont&aacute;cto </p>
            <p class="parrafo"><strong>Presidente</strong>&nbsp;Claudia Yovana Contreras Vargas&nbsp;<br />
                  <strong>Direcci&oacute;n</strong>&nbsp;Tranv. 157 a # 154 - 89 APTO 103 Ca&ntilde;averal&nbsp;<br />
                  <strong>Tel&eacute;fono</strong>&nbsp;6383399 (Club de Tiro)<br />
                  <strong>e - mail&nbsp;</strong>cjovana@hotmail.com</p>
            <p class="parrafo">&nbsp;</p>
          </div></td>
        </tr>
      </table></td>
    <td align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="top"><?php include("lat.php"); ?></td>
  </tr>
  <tr>
    <td height="20"><p><a href="archivos/LIGASDESANTANDER2015.pdf" target="_blank" class="gris"><strong>Descarga el listado completo en pdf</strong></a> <a href="archivos/LIGASDESANTANDER2015.pdf" target="_blank" class="gris"><strong>aqui.</strong></a></p></td>
    <td align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
<?php include("footer.php"); ?>
</body>
</html>
