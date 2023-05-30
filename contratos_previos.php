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
        <td height="30" bgcolor="#666666" class="Estilo1">&nbsp;&nbsp;<a href="index.php">Regresar al Inicio</a> | <a href="contratos.php">Contrataci&oacute;n Actual </a></td>
      </tr>
      <tr>
        <td height="20" class="titulosN">Contrataci&oacute;n Anterior a Enero de 2014 </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <table width="600" border="1" cellpadding="7" cellspacing="0" bordercolor="#C0C0C0" bgcolor="#D8D8D8" class="parrafo">
            <tbody>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE VOLEIBOL</p></td>
                <td width="159" valign="middle"><a href="contratos/236.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>TERCER INFORME CONTRALORIA 2012</p></td>
                <td width="159" valign="middle"><a href="contratos/235.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>SEGUNDO INFORME CONTRALORIA 2012</p></td>
                <td width="159" valign="middle"><a href="contratos/234.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>PRIMER INFORME CONTRALORIA 2012</p></td>
                <td width="159" valign="middle"><a href="contratos/233.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>PRIMER INFORME CONTRALORIA</p></td>
                <td width="159" valign="middle"><a href="contratos/232.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>CONVENIO COLDEPORTES</p></td>
                <td width="159" valign="middle"><a href="contratos/231.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE BOLO AMERICANO</p></td>
                <td width="159" valign="middle"><a href="contratos/230.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE LUCHA OLIMPICA</p></td>
                <td width="159" valign="middle"><a href="contratos/229.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE TAEKWONDO</p></td>
                <td width="159" valign="middle"><a href="contratos/228.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE FUTBOL</p></td>
                <td width="159" valign="middle"><a href="contratos/227.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE VOLEIBOL</p></td>
                <td width="159" valign="middle"><a href="contratos/226.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE NATACION</p></td>
                <td width="159" valign="middle"><a href="contratos/225.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE JUDO</p></td>
                <td width="159" valign="middle"><a href="contratos/224.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>LIGA SANTANDEREANA DE VOLEIBOL</p></td>
                <td width="159" valign="middle"><a href="contratos/222.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION 001 DE 2012</p></td>
                <td width="159" valign="middle"><a href="contratos/221.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>ANGEL SALCEDO GOMEZ</p></td>
                <td width="159" valign="middle"><a href="contratos/220.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>EDY SALAZAR QUINTERO</p></td>
                <td width="159" valign="middle"><a href="contratos/219.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>MONICA ALEJANRA CRUZ MOYONO</p></td>
                <td width="159" valign="middle"><a href="contratos/218.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INFORME CONTRATACION NOV. - DIC. 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/217.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 99 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/216.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 100 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/215.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>RESOLUCI&Oacute;N SUSPENSI&Oacute;N NO. 319 DE 2010 - INVITACI&Oacute;N NO. 100 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/214.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO.101DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/213.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 102 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/212.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 103 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/211.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 104 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/210.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 105 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/209.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 106 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/208.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 107 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/207.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>DECLARATORIA DE DESIERTA INVITACION PUBLICA 105</p></td>
                <td width="159" valign="middle"><a href="contratos/206.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 108 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/205.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 109 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/204.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 110 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/203.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 111 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/202.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 112 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/201.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 113 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/200.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 114 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/199.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 115 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/198.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 116 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/197.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 117 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/196.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 118 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/195.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 119 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/194.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 120 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/193.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 121 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/192.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 122 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/191.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 123 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/190.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 124 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/189.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 125 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/188.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 126 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/187.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 127 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/186.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 128 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/185.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 129 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/184.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 130 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/183.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 131 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/182.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 132 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/181.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 133 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/180.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 134 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/179.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 138 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/178.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 136 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/177.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 137 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/176.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 135 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/175.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 139 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/174.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 140 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/173.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 141 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/172.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 142 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/171.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 143 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/170.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 144 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/169.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 145 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/168.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 146 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/167.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 147 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/166.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO 148 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/165.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 149 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/164.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 150 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/163.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 151 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/162.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 152 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/161.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 153 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/160.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 154 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/159.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 155 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/158.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLIA NO. 156 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/157.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 157 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/156.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 158 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/155.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 159 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/154.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 160 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/153.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION&acute;P&Uacute;BLICA NO. 161 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/152.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 162 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/151.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 163 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/150.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 164 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/149.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 165 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/148.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 166 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/147.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 167 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/146.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 168 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/145.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 169 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/144.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 171 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/143.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 170 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/142.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 172 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/141.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 173 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/140.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 174 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/139.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA 175 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/137.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 176 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/136.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 177 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/135.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 178 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/134.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 179 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/133.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 180 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/132.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 181 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/131.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 182 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/130.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 183 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/129.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 184 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/128.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 185 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/127.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 186 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/126.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 188 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/125.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 187 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/124.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 189 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/123.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 190 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/122.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 191 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/121.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 193 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/120.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 194 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/119.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 195 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/118.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 196 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/117.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 197 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/116.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 198 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/115.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 199 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/114.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 200 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/113.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 192 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/112.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 201 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/111.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 203 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/109.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 204 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/107.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 205 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/106.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 206 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/105.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 207 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/104.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 208 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/103.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 209 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/102.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 210 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/101.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 211 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/100.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 212 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/99.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO.213 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/98.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 214 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/97.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 215 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/96.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>RESOLUCION DECLARATORIA DESIERTA INVITACION 207 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/95.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 216 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/94.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 217 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/93.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 218 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/92.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 219 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/91.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 220 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/90.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 221 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/89.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 222 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/88.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 223 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/87.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 224 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/86.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 225 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/85.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INIVITACION PUBLICA NO. 226 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/84.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 227 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/83.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 228 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/82.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 229 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/81.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 230 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/80.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 231 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/79.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 232 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/78.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 233 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/77.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 234 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/76.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 235 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/75.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 236 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/74.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 237 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/73.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>RESOLUCION DECLARATORIA DESIERTA INVITACION 224 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/72.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>RESOLUCION DECLARATORIA DESIERTA INVITACION 228 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/71.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 238 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/70.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 239 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/69.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 240 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/68.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 241 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/67.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 242 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/66.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 243 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/65.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 244 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/64.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 245 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/63.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 246 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/62.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>RESOLUCION DECLARATORIA DESIERTA INVITACION 242 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/61.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 247 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/60.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 248 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/59.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 249 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/58.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 250 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/57.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 252 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/56.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 251 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/55.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 255 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/54.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 253 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/53.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 254 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/52.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 256 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/51.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 257 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/50.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 258 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/49.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 259 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/48.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 260 DE 2010</p></td>
                <td width="159" valign="middle"><a href="contratos/47.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Ugrave;BLICA NO. 001 DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/46.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION PUBLICA NO. 002 DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/45.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>DECLARATORIA DE DESIERTA INVITACION PUBLICA NO. 002 DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/44.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N PUBLICA NO. 003 DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/43.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACI&Oacute;N P&Uacute;BLICA NO. 004 DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/42.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INVITACION P&Uacute;BLICA NO. 005 DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/41.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INFORME DE CONTRATACION ENERO A MAYO DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/40.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>RESOLUCION 2675/2011 CNSC</p></td>
                <td width="159" valign="middle"><a href="contratos/39.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INFORME DE CONTRATACI&Oacute;N DEL MES DE JUNIO DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/38.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INFORME DE CONTRATACI&Oacute;N JULIO DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/37.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INFORME DE CONTRATACI&Oacute;N AGOSTO DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/36.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>CIRCULARIZACION</p></td>
                <td width="159" valign="middle"><a href="contratos/35.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
              </tr>
              <tr>
                <td width="421" height="30" valign="middle"><p>INFORME DE CONTRATACION SEPT Y OCT DE 2011</p></td>
                <td width="159" valign="middle"><a href="contratos/34.pdf" target="_blank"><img src="images/descargar.png" width="151" height="40" border="0" /></a></td>
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
