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
  dias_de_la_semana[3]  = "Mi�rcoles";
  dias_de_la_semana[4]  = "Jueves";
  dias_de_la_semana[5]  = "Viernes";
  dias_de_la_semana[6]  = "S�bado";

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
        <td height="30" bgcolor="#666666" class="Estilo1">&nbsp;&nbsp;<a href="index.php">Regresar al Inicio</a> | <a href="contratos.php">Contrataci&oacute;n Actual </a></td>
      </tr>
      <tr>
        <td height="20" class="titulosN"><p>Relaci&oacute;n de Contrataci&oacute;n</p></td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p><span class="parrafo"><strong>CONTRATACI&Oacute;N </strong></span></p>
          <table width="600" border="1" cellpadding="7" cellspacing="0" bordercolor="#C0C0C0" bgcolor="#D8D8D8" class="parrafo">
            <tbody>
              <tr>
                <td width="421" height="30" valign="middle"><p>CONTRATACI&Oacute;N 2016</p></td>
                <td width="159" valign="middle"><a href="contratos/CONTRATACION2016.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>CONTRATACI&Oacute;N 2017 </p></td>
                <td width="159" valign="middle"><a href="contratos/CONTRATACION2017.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
				<tr>
                <td width="421" height="30" valign="middle"><p>CONTRATACI&Oacute;N 2018 </p></td>
                <td width="159" valign="middle"><a href="contratos/CONTRATACION2018.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
          <p class="parrafo"><strong>PLAN ANUAL DE ADQUISICIONES</strong></p>
          <table width="600" border="1" cellpadding="7" cellspacing="0" bordercolor="#C0C0C0" bgcolor="#D8D8D8" class="parrafo">
            <tbody>
              <tr>
                <td width="421" height="30" valign="middle"><p>PAA 2016</p></td>
                <td width="159" valign="middle"><a href="financiera/PAA_INICIAL_2016.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>PAA 2017</p></td>
                <td width="159" valign="middle"><a href="financiera/PAAINICIAL_2017.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
				 <tr>
                <td width="421" height="30" valign="middle"><p>PAA 2018</p></td>
                <td width="159" valign="middle"><a href="financiera/PAA-2018.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
				
				<tr>
                <td width="421" height="30" valign="middle"><p>PAA 2019</p></td>
                <td width="159" valign="middle"><a href="financiera/PAA2019.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
            </tbody>
          </table>
          <p class="parrafo">&nbsp;</p>
          <p class="parrafo"><strong>PLAN ANUAL DE CAJA</strong></p>
          <table width="600" border="1" cellpadding="7" cellspacing="0" bordercolor="#C0C0C0" bgcolor="#D8D8D8" class="parrafo">
            <tbody>
              <tr>
                <td width="421" height="30" valign="middle"><p>PAC 2016</p></td>
                <td width="159" valign="middle"><a href="financiera/PAC2016-Proyectado.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>PAC 2017</p></td>
                <td width="159" valign="middle"><a href="financiera/PAC2017-Proyectado.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
				<tr>
                <td width="421" height="30" valign="middle"><p>PAC 2018</p></td>
                <td width="159" valign="middle"><a href="financiera/PAC-2018.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>PAC 2019</p></td>
                <td width="159" valign="middle"><a href="financiera/PAC-2019.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
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
