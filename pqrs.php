<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="UTF-8">
<script>
function guardar()
{
var er_ema = /^\w[A-Za-z0-9\-\.\_]*@[A-Za-z0-9\-]+(\.[A-Za-z]+)+$/  
	if (document.frm.nombre.value.length==0)
	{
		alert ("Debe escribir su nombre y apellidos");
		document.frm.nombre.focus();
		return 0;
	}	
	if (document.frm.email.value.length==0)
	{
		alert ("Por Favor escriba un correo electronico");
		document.frm.email.focus();
		return 0;
	}
   if (!er_ema.test(document.frm.email.value))
      {  alert("El contenido del campo \"Email\" no es válido")
         document.frm.email.focus()
	     return 0;
      }	  
   if (document.frm.asunto.options[document.frm.asunto.selectedIndex].value=="")
      {  alert("Debe Seleccionar un Tipo de Solicitud");
         document.frm.asunto.focus()
         return 0;
      }	
   if (document.frm.nombreempresa.value.length==0)
	{
		alert ("Debe escribir su numero de cedula");
		document.frm.nombreempresa.focus();
		return 0;
	}	
	if (document.frm.correspondencia.value.length==0)
	{
		alert ("Debe escribir su ciudad de residencia");
		document.frm.correspondencia.focus();
		return 0;
	}	
		if (document.frm.telefonof.value.length==0)
	{
		alert ("Por favor escriba un telefono fijo");
		document.frm.telefonof.focus();
		return 0;
	}
	if (document.frm.telefono.value.length==0)
	{
		alert ("Por favor escriba un telefono celular");
		document.frm.telefono.focus();
		return 0;
	}
	if (document.frm.mensaje.value.length==0)
	{
		alert ("Por favor escriba su mensaje");
		document.frm.mensaje.focus();
		return 0;
	}
 document.forms['frm'].enviar.value = "G";	
 document.forms['frm'].submit();						
}
</script>
<?
function param($Name)
         {
         global $HTTP_GET_VARS;
         global $HTTP_POST_VARS;         

         if(isset($HTTP_POST_VARS[$Name]))
            return($HTTP_POST_VARS[$Name]);

         if(isset($HTTP_GET_VARS[$Name]))
            return($HTTP_GET_VARS[$Name]);
            
         return("");         
         }
?>
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
<?php
$exito="yes";
if (param("enviar")=="G")
{	
$para="administrativayfinanciera@indersantander.gov.co";  

$nom=param("nombre");
$ema=param("email");
$con=param("asunto");
$nem=param("nombreempresa");
$cor=param("correspondencia");
$tef=param("telefonof");
$tel=param("telefono");
$asu=param("nombre");
$men=param("mensaje");
$mensaje='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo20 {color: #333333; font-size: 12px; font-family: Geneva, Arial, Helvetica, sans-serif;}
.Estilo22 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #333333; font-weight: bold; }
.Estilo23 {font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #000000; font-size: 14px;}
-->
</style>
</head>

<body>
<table width="500" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="40" colspan="2" bgcolor="#CCCCCC"><div align="center" class="Estilo23">PQRS Nueva</div></td>
  </tr>
  <tr>
    <td width="154" height="20">&nbsp;</td>
    <td width="346">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top" bgcolor="#DADADA"><table width="350" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="10"></td>
      </tr>
    </table>
        <table width="480" border="2" cellpadding="5" cellspacing="0" bordercolor="#FFFFFF">
          <!--DWLayoutTable-->
          <tr>
            <td width="129" height="20"><div align="left"><span class="Estilo20">Nombres y Apellidos</span></div></td>
            <td width="325" height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$nom.'</span></div></td>
          </tr>
          <tr>
            <td height="20"><div align="left"><span class="Estilo20">E-mail</span></div></td>
            <td height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$ema.'</span></div></td>
          </tr>
          <tr>
            <td height="20"><div align="left"><span class="Estilo20">Tipo de Solicitud</span></div></td>
            <td height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$con.'</span></div></td>
          </tr>
           <tr>
            <td height="20"><div align="left"><span class="Estilo20">Cedula de Ciudadania</span></div></td>
            <td height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$nem.'</span></div></td>
          </tr>         <tr>
            <td height="20"><div align="left"><span class="Estilo20">Ciudad</span></div></td>
            <td height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$cor.'</span></div></td>
          </tr>
          <tr>
            <td height="20"><div align="left"><span class="Estilo20">Tel&eacute;fono Fijo </span></div></td>
            <td height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$tef.'</span></div></td>
          </tr>
          <tr>
            <td height="20"><div align="left"><span class="Estilo20">Celular </span></div></td>
            <td height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$tel.'</span></div></td>
          </tr>
          <tr>
            <td height="20"><div align="left"><span class="Estilo20">Mensaje</span></div></td>
            <td height="20" bgcolor="#F9F9F9"><div align="left"><span class="Estilo22">'.$men.'</span></div></td>
          </tr>
      </table>
        <table width="350" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td height="10"></td>
          </tr>
    </table></td>
  </tr>
</table>
</body>
</html>';
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From:info@indersantander.gov.co\r\n";  
$exito="not";	
	mail($para,$asu,$mensaje,$headers); 
 }
?>
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
        <td height="20" class="titulosN">Peticiones, Quejas o Reclamos y Sugerencias </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="parrafo">Para enviar su solicitud, por favor diligencie el formulario. Lo contactaremos a su cuenta de correo electr&oacute;nico para dar soluci&oacute;n a su mensaje. </p>
          </div></td>
      </tr>
      <tr>
        <td height="20" align="left" valign="top">
		<table width="655" border="0" align="center" cellpadding="5" cellspacing="0">
                    <!--DWLayoutTable-->
                    
                    <tr>
                      <td height="10" align="center" valign="top"><span class="Estilo38">
                        <?php
	if($exito=="yes")
	{	
	?>
                        </span>
                          <table width="489" border="0" cellpadding="3" cellspacing="0">
                            <!--DWLayoutTable-->
                            <tr>
                              <td align="left" valign="top"><form method="post" name="frm" id="frm" >
                                  <input name="enviar" type="hidden" id="enviar" value="E" />
                                  <table width="479" border="0" align="center" cellpadding="4" cellspacing="0">
                                    <!--DWLayoutTable-->
                                    
                                    <tr>
                                      <td width="162" align="center" valign="middle" class="parrafo"><div align="right" class="Estilo40"><span class="Estilo35">Nombres y Apellidos </span></div></td>
                                      <td width="301" height="20" align="center" valign="middle"><div align="left">
                                          <input name="nombre" type="text" class="parrafoN" id="nombre" size="32" />
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="middle" class="parrafo"><div align="right" class="Estilo40"><span class="Estilo32"><span class="Estilo41">E-mail</span></span></div></td>
                                      <td height="20" align="left" valign="middle"><label>
                                          <div align="left">
                                            <input name="email" type="text" class="parrafoN" id="email" size="32" />
                                          </div>
                                        </label></td>
                                    </tr>
                                    <tr>
                                         <td height="30" align="center" valign="middle" class="parrafo"><div align="right" class="Estilo41 Estilo40 Estilo32">Tipo de Solicitud </div></td>
                                         <td height="30" align="left" valign="middle">
                                                                  <div align="left">
                                                                    <select name="asunto" class="parrafoN" id="asunto">
                                                                      <option value="Peticion">Petición</option>
                                                                      <option value="Queja">Queja o Reclamo</option>
                                                                      <option value="Sugerencia">Sugerencia</option>
																	  <option value="Felicitacion">Felicitación</option>
                                                                    </select>
                                         </div></td>
                                    </tr>
                                    <tr>
                                      <td align="center" valign="middle" class="parrafo"><div align="right" class="Estilo40"><span class="Estilo41">C&eacute;dula de Ciudadan&iacute;a </span></div></td>
                                      <td height="20" align="center" valign="middle" class="Estilo39"><div align="left">
                                          <input name="nombreempresa" type="text" class="parrafoN" id="nombreempresa" size="32" />
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td align="center" valign="middle" class="parrafo"><div align="right" class="Estilo40"><span class="Estilo41">Ciudad</span></div></td>
                                      <td height="20" align="center" valign="middle" class="Estilo39"><div align="left">
                                          <input name="correspondencia" type="text" class="parrafoN" id="correspondencia" size="32" />
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td align="center" valign="middle" class="parrafo"><div align="right" class="Estilo40"><span class="Estilo32"><span class="Estilo41">Tel&eacute;fono Fijo </span></span></div></td>
                                      <td height="20" align="center" valign="middle"><div align="left">
                                          <input name="telefonof" type="text" class="parrafoN" id="telefonof" size="32" />
                                      </div></td>
                                    </tr>
                                    
                                    <tr>
                                      <td align="center" valign="middle" class="parrafo"><div align="right" class="Estilo40"><span class="Estilo32"><span class="Estilo41">Celular </span></span></div></td>
                                      <td height="20" align="center" valign="middle"><div align="left">
                                          <input name="telefono" type="text" class="parrafoN" id="telefono" size="32" />
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td align="center" valign="top" class="parrafo"><div align="right" class="Estilo40"><span class="Estilo35">Describa el motivo de su solicitud </span></div></td>
                                      <td height="20" align="center" valign="middle"><div align="left">
                                          <textarea name="mensaje" cols="40" rows="10" class="parrafoN" id="mensaje"></textarea>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
                                      <td height="20" align="center" valign="middle"><input name="button" type="button" onclick="guardar()" value="Enviar" /></td>
                                    </tr>
                                </table>
                              </form>
                              <label></label></td>
                            </tr>
                        </table>
                        <?php
	}
	else
	{
	 echo'<img src="images/enviado.jpg" width="500" height="340" />';
	}
	?></td>
                    </tr>
                    <tr>
                      <td height="10" align="center" valign="top"><div align="left" class="parrafo">
                        <p align="justify"><span class="subtitulosN">Reglamentaci&oacute;n del tr&aacute;mite interno del Derecho de Petici&oacute;n del Instituto Departamental de Recreaci&oacute;n y Deporte de Santander (Indersantander) </span> (<a href="calidad/REGLAMENTACION-TRAMITE-DERECHO-PETICION-INDERSANTANDER.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
                        <p align="justify"><strong class="subtitulosN">CONCEPTOS</strong> </p>
                        <p align="justify"><strong>PETICION: </strong>Acci&oacute;n que tiene toda persona natural o jur&iacute;dica de  acudir ante las autoridades p&uacute;blicas para reclamar la resoluci&oacute;n de fondo de  una soluci&oacute;n presentada que afecta los intereses colectivos o individuales y  puede formularse verbalmente o por escrito, en ambos casos de forma respetuosa. <br />
                            <br />
                            <strong>QUEJA: </strong>Es el medio a trav&eacute;s del cualuna persona natural o  jur&iacute;dica pone de manifiesto su incomodidad con la CNSC o de un funcionario&nbsp; o con la forma y condiciones en que se preste  o no un servicio. <br />
                            <br />
                            <strong>RECLAMO: </strong>Es la solicitud presentada por una persona natural o  jur&iacute;dica con el fin de que se revise una actuaci&oacute;n administrativa con la cual  no esta conforme y tiene la finalidad de que esta sea mejorada o cambiada. <br />
                          No se atender&aacute; por este medio  reclamaciones con los procesos de selecci&oacute;n, los cuales deber&aacute;n tramitarse de  acuerdo con el cronograma de cada convocatoria<br />
                          <br />
                          <strong>PROCESO DE RECEPCION</strong>: Es el proceso que capta la  satisfacci&oacute;n de la comunidad en el momento en el que se provee un servicio o  despu&eacute;s de prestar el mismo. Esa manifestaci&oacute;n es: recibida, registrada y  clasificada seg&uacute;n los procesos afectados; para ser dimensionada a los  responsables de dichos procesos para ser solucionados y finalmente ofrecer una  respuesta y retroalimentaci&oacute;n a la comunidad <br />
                          <br />
                          <strong>TIEMPOS DE SOLUCION:</strong> Los tiempos de soluci&oacute;n se  realizar&aacute;n conforme a lo determinado en C&oacute;digo Contencioso Administrativo art.  5, 6 y 25 de acuerdo al tipo de manifestaci&oacute;n: <br />
                          <br />
&bull; 15 d&iacute;as para  dar respuesta a la queja&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />
&bull;&nbsp;15 d&iacute;as  para atender  reclamos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
&bull; 10 d&iacute;as para  peticiones de informaci&oacute;n <br />
&bull; 30 d&iacute;as para  contestar  consultas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />
&bull; 15 d&iacute;as para  contestar solicitudes </p>
                        <div align="justify">Si desea realizarlas en l&iacute;nea,  llene cada una de las casillas en el formulario de peticiones, quejas y  reclamos</div>
                      </div></td>
                    </tr>
                  </table>
		</td>
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
