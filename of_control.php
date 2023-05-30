<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="UTF-8">
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
.titulosNx {
	font-family: Calibri, Arial, Helvetica, sans-serif;
	font-size: 20px;
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
  dias_de_la_semana[3]  = "Mi?rcoles";
  dias_de_la_semana[4]  = "Jueves";
  dias_de_la_semana[5]  = "Viernes";
  dias_de_la_semana[6]  = "S?bado";

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
        <td height="20" class="titulosN">Oficina Asesora Control Interno </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify"><br />
          <p class="subtitulosN">LUZ MYRIAM LOZANO CARRE&Ntilde;O</p>
          <p class="parrafoN"><strong>Ingeniera En Mercados y Negocios Internacionales</strong></p>
          <p class="parrafoN">Especialista en Gerencia de Empresas y Gerencia de Mercados</p>
          <p class="parrafoN"><br />
            <span class="subtitulosN">Jefe Control Interno</span><br />
            <a href="mailto:smov78@hotmail.com" target="_blank" class="gris">controlinterno@indersantander.gov.co</a></p>
          
          <p class="parrafo"><span class="subtitulosN"><strong>Objetivo </strong></span><strong><br />
          </strong>Orientar la gesti&oacute;n del  mejoramiento a partir del an&aacute;lisis de la efectividad del ejercicio de control  interno y la evaluaci&oacute;n sistem&aacute;tica y transparente del desempe&ntilde;o institucional.<br />
              <strong><br />
              <span class="subtitulosN">Funciones</span></strong></p>
          <ul>
            <li class="parrafo">Medir y evaluar la eficiencia, eficacia y econom&iacute;a de las pr&aacute;cticas y  metas institucionales. </li>
            <li class="parrafo">Establecer programas, formular y efectuar planes sobre los posibles  riesgos administrativos que puedan ocasionarse en el desarrollo de las  actividades. </li>
            <li class="parrafo">Planear dirigir y organizar la verificaci&oacute;n y evaluaci&oacute;n del sistema de  control interno. </li>
            <li class="parrafo">Evaluar permanentemente los m&eacute;todos y procedimientos del Instituto.</li>
            <li class="parrafo">Informar oportunamente a la Direcci&oacute;n sobre las debilidades del sistema  de control interno. Revisar y evaluar los manuales de funciones y  procedimientos y recomendar su actualizaci&oacute;n.</li>
            <li class="parrafo">Participar en el comit&eacute; del control interno, de saneamiento contable,  administrativo, t&eacute;cnico y dem&aacute;s a las que sea requerido. </li>
            <li class="parrafo">Planear, coordinar, controlar y evaluar el trabajo del personal de su  dependencia. </li>
            <li class="parrafo"><span class="parrafo">Asesorar  en la implantaci&oacute;n de la cultura de autocontrol, sentido de pertenencia y  valores institucionales. </span></li>
          </ul>
          <p class="subtitulosN">Descripci&oacute;n</p>
          <p class="parrafo"><span class="parrafoN">Rol de la oficina de control interno</span><br />
  El Sistema de Control interno es un instrumento que busca facilitar que la gesti&oacute;n administrativa de las entidades y organismos del Estado logren el cumplimiento de la misi&oacute;n y los objetivos propuestos de acuerdo con la normatividad y pol&iacute;ticas del Estado, En este orden de ideas a la oficina de Control interno como elemento asesor, evaluador y dinamizador del sistema de control interno le corresponde desarrollar los siguientes roles:</p>
          <p class="parrafo"><span class="parrafoN">1. Asesoria en identificaci&oacute;n y valoraci&oacute;n del riesgo&nbsp;</span><br />
  La administraci&oacute;n del riesgo debe ser un proceso permanente e interactivo entre la Alta Direcci&oacute;n y las Oficinas de Control Interno o quien haga sus veces, evaluando los aspectos tanto internos como externos que puedan llegar a representar amenaza para la consecuci&oacute;n de los objetivos organizacionales con miras a establecer acciones efectivas, representadas en actividades de control, acordadas entre los responsables de las &aacute;reas o procesos y las oficinas de Control Interno.</p>
          <p class="parrafo"><span class="parrafoN">2. Acompa&ntilde;amiento y asesoria&nbsp;</span><br />
  Para el &eacute;xito en la funci&oacute;n de acompa&ntilde;amiento y asesor&iacute;a es indispensable una buena relaci&oacute;n y comunicaci&oacute;n con la alta direcci&oacute;n, la cual depende en gran medida del perfil de la persona que esta ejerciendo dicho cargo. Dicha labor requiere un trabajo conjunto entre la administraci&oacute;n y las oficinas de control interno para facilitar la identificaci&oacute;n de necesidades y el planteamiento de soluciones.</p>
          <p class="parrafo"><span class="parrafoN">3. Evaluaci&oacute;n y seguimiento</span><br />
  La evaluaci&oacute;n es un proceso permanente, mediante le cual a partir de la informaci&oacute;n que se obtiene de diversas fuentes, se emite un juicio de valor acerca del rendimiento o desempe&ntilde;o de un &aacute;rea, un proceso una actividad, cualquiera que sea el objeto de estudio.</p>
          <p class="parrafo"><span class="parrafoN">4. Fomento de la cultura del autocontrol&nbsp;</span><br />
  Es la capacidad de cada servidor p&uacute;blico , independientemente de su nivel , jer&aacute;rquico, dentro la entidad para evaluar su trabajo, detectar desviaciones, efectuar correctivos, mejorar y solicitar ayuda cuando lo considere necesario de tal manera que la ejecuci&oacute;n de los procesos, actividades y tareas bajo su responsabilidad garanticen el ejercicio de una funci&oacute;n administrativa transparente y eficaz. Para logra la cultura del autocontrol, es necesario que se implemente un proceso de sensibilizaci&oacute;n, capacitaci&oacute;n y divulgaci&oacute;n en pro de la interiorizaci&oacute;n y compromiso de la misma.</p>
          <p class="parrafo"><span class="parrafoN">5. Relacion con entes externos</span><br />
  Teniendo en cuneta que la oficina de control interno, es un componente dinamizador del sistema de control interno, debe ser quien facilite los requerimientos de los organismos de Control Externo y la coordinaci&oacute;n en los informes de la Entidad, es as&iacute; como se convierte en conducto transmisor del hacer, materializado en documentos, informes y reportes que contienen una presunci&oacute;n legal de la veracidad.          </p>
          <ul>
            <li class="parrafo"><strong>TALENTO HUMANO</strong>&nbsp;<br />
              La Oficina de Control lnterno cuenta con personal calificado en la materia conformado por una Jefe de Control Interno y una auxiliar administrativa.&nbsp;</li>
        </ul>
          <ul>
            <li class="parrafo"><strong>HORARIO DE ATENCI&Oacute;N.</strong>&nbsp;<br />
              Para atenci&oacute;n al p&uacute;blico se fij&oacute; un horario de 7:30 a.m. a 12M y de 1:30 p.m. a 5:00 p.m.</li>
          </ul>
          <p class="titulosNx"><strong>PUBLICACIONES RELACIONADAS CON LA OFICINA DE CONTROL INTERNO</strong>&nbsp;<br /p>          
          <p class="parrafo"><strong class="subtitulos">INFORME EJECUTIVO ANUAL DEL MECI 2016</strong><br />
(<a href="controlin/INFORME-EJECUTIVO-MECI-2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"> <span class="subtitulosN">INFORME PORMENORIZADO DEL ESTADO DE CONTROL INTERNO ENERO A ABRIL DE 2016</span><br />
            Sostenibilidad del MECI (<a href="controlin/InformeCuatrimestralEnero-Abril.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)           </p>
           <p class="parrafo"><strong class="subtitulos">INFORME PORMENORIZADO DEL ESTADO DE CONTROL INTERNO DE MAYO A AGOSTO DE 2016</strong><br />
             (<a href="controlin/InformeCuatrimestralMayo-Agosto2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><strong class="subtitulos">INFORME PORMENORIZADO DEL ESTADO DE CONTROL INTERNO DE SEPTIEMBRE A DICIEMBRE DE 2016</strong><br />
(<a href="controlin/INFORMEPORMENORIZADSEP-DIC-2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"> <span class="subtitulosN">INFORME DE SEGUIMIENTO CUATRIMESTRAL #1 PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2016</span><br />
              (<a href="controlin/InformeCuatrimestralPlanAnticorrupcionNo1.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO CUATRIMESTRAL #2 PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2016</span><br />
(<a href="controlin/InformeAnticorrupcion2-2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO CUATRIMESTRAL #3 PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2016</span><br />
(<a href="controlin/INFORMECUATRIMESTRAL3-2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">PLAN DE TRABAJO - SOSTENIBILIDAD DEL MECI 2016</span><br />
(<a href="controlin/MECI2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)           </p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO PQR - Primer Semestre</span><br />
(<a href="controlin/InformePQRprimersemestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO PQR -  Segundo Semestre</span><br />
(<a href="controlin/INFORMEPQRS-2-2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)           </p>
           <p class="parrafo"><span class="subtitulosN">MAPA DE RIESGOS 2016</span><br />
(<a href="controlin/MAPA_DE_RIESGOS_2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)           </p>
           <p class="parrafo"><span class="subtitulosN">SEGUIMIENTO MAPA DE RIESGOS 2016</span><br />
(<a href="controlin/SEGUIMIENTO-MAPARIESGOS-2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">PLAN DE AUDITOR&Iacute;A 2016</span><br />
(<a href="controlin/PLANDEAUDITORIA2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE GESTI&Oacute;N OF. CONTROL INTERNO VIGENCIA 2016</span><br />
(<a href="controlin/InformeGestionControlInterno-2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">SEGUIMIENTO Y CONTROL DERECHOS DE PETICI&Oacute;N - VIGENCIA 2016.</span><br />
(<a href="controlin/Derechos_de_peticion2016.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><strong>---</strong></p>
           <p class="parrafo"><span class="subtitulosN">MAPA DE RIESGOS 2017</span><br />
(<a href="controlin/MAPARIESGOS-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">CONTROL Y SEGUIMIENTO DERECHOS DE PETICI&Oacute;N PRIMER TRIMESTRE 2017</span><br />
(<a href="controlin/Derechos-de-Peticion-Ene-Mar-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO DEL ESTADO DE CONTROL INTERNO: ENERO-ABRIL 2017</span><br />
(<a href="controlin/InformePormenorizadoEne-Abril2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO CUATRIMESTRAL No. 1 DEL PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO -2017</span><br />
(<a href="controlin/PLANANTICORRUPCIONseguimientoNo1-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO MAPA DE RIESGOS No. 1  CUATRIMESTRAL</span></span><span class="subtitulosN"> - 2017</span><span class="parrafo"><br />
(<a href="controlin/SEGUIMIENTOMAPADERIESGOSNo1-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2017</span></span><span class="parrafo"><span class="subtitulosN">- Gasto Combustible</span><br />
(<a href="controlin/InformeDeAusteridadDelGasto-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2017 </span></span><span class="subtitulosN">- Primer Trimestre</span><span class="parrafo"><br />
(<a href="controlin/InformeDeAusteridadCombustible1-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2017 </span></span><span class="subtitulosN">- Segundo Trimestre</span><span class="parrafo"><br />
(<a href="controlin/InformeDeAusteridadCombustible2-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO PQRS - 2017 </span></span><span class="subtitulosN">- Primer Semestre</span><span class="parrafo"><br />
(<a href="controlin/InformeDeSegumientoPQRS-PrimerSemestre-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO   DE CONTROL INTERNO 2017 </span></span><span class="subtitulosN">- Mayo a Agosto</span><span class="parrafo"><br />
(<a href="controlin/InformePormenMayo-Agosto2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO MAPA DE RIESGOS No. 02 2017 </span></span><span class="subtitulosN">- Mayo a Agosto</span><span class="parrafo"><br />
(<a href="controlin/SeguimientoMapaRiesgosNo-2-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO CUATRIMESTRAL No. 02 PLAN ANTICORRUPCI&Oacute;N Y DE ATENCI&Oacute;N AL CIUDADANO - </span></span><span class="subtitulosN">2017</span><span class="parrafo"><br />
(<a href="controlin/SeguimientoPlanAnticorrupcion2-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span>           </p>
           <p><span class="parrafo"><span class="subtitulosN">PLAN DE AUDITORIAS 2017</span></span>
             <span class="parrafo">(<a href="controlin/PlanDeAuditorias2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2017</span></span><span class="subtitulosN"> - Tercer Trimestre</span><span class="parrafo"><br />
(<a href="controlin/IINFORME-AUSTERIDADGASTO-Octubre2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME Y SEGUIMIENTO A DERECHOS DE PETICI&Oacute;N 2017 -  Tercer Trimestre</span></span><span class="parrafo"><br />
             (<a href="controlin/InformePQRS-Oct2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">ACTA No. 1 - 2017 COMIT&Eacute; COORDINADOR DE CONTROL INTERNO</span></span><span class="parrafo"><br />
(<a href="controlin/ACTA1-COMITECOORDINADOR-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO   DE CONTROL INTERNO 2017</span></span><span class="subtitulosN"> - Septiembre a Diciembre</span><span class="parrafo"><br />
(<a href="controlin/InformePormenSEPT-DIC2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="subtitulosN">INFORMES Nos. 1,2,3,4. SEGUIMIENTO GESTI&Oacute;N DEL RIESGO-MAPA DE RIESGOS, RACIONALIZACI&Oacute;N DE TRAMITES, RENDICI&Oacute;N DE CUENTAS, MECANISMOS PARA MEJORAR LA ATENCI&Oacute;N AL CIUDADANO 2.017</span><span class="parrafo"><br />
(<a href="controlin/SeguimientoGestionRiesgo2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span>           </p>
           <p><span class="parrafo"><span class="subtitulosN">AVANCE PLAN DE ACCI&Oacute;N INDERSANTANDER - 2017</span></span><span class="parrafo"><br />
(<a href="controlin/PlanAccion2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME EJECUTIVO ANUAL DE CONTROL INTERNO - 2017</span></span><span class="parrafo"><br />
(<a href="controlin/InformeEjecutivoAnual2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">AVANCE No. 04 DEL PLAN ANTICORRUPCI&Oacute;N - 2017</span></span><span class="parrafo"><br />
(<a href="controlin/PlanAnticorrupcionNO04-2017.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><strong>---</strong></p>
           <p><span class="parrafo"><span class="subtitulosN">PLAN DE ACCI&Oacute;N ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2018</span><br />
(<a href="controlin/PlanAnticorrupcion2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">PLAN DE AUDITORIAS 2018</span></span> <span class="parrafo">(<a href="controlin/Resolucion021-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO   DE CONTROL INTERNO</span></span><span class="subtitulosN"> - Noviembre 2017 a Febrero 2018</span><span class="parrafo"><br />
(<a href="controlin/INFORMEPORMENORIZADO-Nov17-Feb-18.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2018</span></span><span class="subtitulosN"> - Primer Trimestre</span><span class="parrafo"><br />
(<a href="controlin/AusteridadGastoENE-MAR-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO PLAN ANTICORRUPCI&Oacute;N No. 01 - 2018 </span></span><span class="parrafo"><br />
(<a href="controlin/SeguimientoPlanAnticorrupcion1-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME CONTROL DERECHOS DE PETICI&Oacute;N 2018 - Primer Trimestre </span></span><span class="parrafo"><br />
(<a href="controlin/DerechosPeticion2018-Ene-Mar.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">MAPA DE RIESGOS 2018 </span></span><span class="parrafo"><br />
(<a href="controlin/MapaDeRiesgos-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO   DE CONTROL INTERNO</span></span><span class="subtitulosN"> - Marzo  a Junio 2018</span><span class="parrafo"><br />
(<a href="controlin/INFORME-PORMENORIZADO-MARZO-JUNIO2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO DE PQRS 2018 - Primer Semestre </span><br />
(<a href="controlin/InformeDeSegumientoPQRS-PrimerSemestre-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </span></p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2018</span><span class="subtitulosN"> - Segundo Trimestre</span><br />
(<a href="controlin/Austeridad-Gasto-SegundoTrimestre2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO PLAN ANTICORRUPCI&Oacute;N No. 02 - 2018 </span><br />
(<a href="controlin/SegundoInformePlanAnticorrupcion-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO MAPA DE RIESGOS No. 02 - 2018 </span><br />
(<a href="controlin/MapaDeRiesgos2018-Informe2.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME CONTROL DERECHOS DE PETICI&Oacute;N 2018 - Segundo Trimestre </span><br />
(<a href="controlin/DerechosDePeticion2018-2Trimestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO PLAN ANTICORRUPCI&Oacute;N No. 03 - 2018 </span><br />
(<a href="controlin/TercerInformePlanAnticorrupcion-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO MAPA DE RIESGOS No. 03 - 2018 </span><br />
             (<a href="controlin/MapaDeRiesgos2018-Informe3.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2018</span><span class="subtitulosN"> - Tercer Trimestre</span><br />
(<a href="controlin/Austeridad-Gasto-TercerTrimestre2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO   DE CONTROL INTERNO</span><span class="subtitulosN"> - Julio  a Octubre 2018</span><br />
(<a href="controlin/INFORME-PORMENORIZADO-JULIO-OCTUBRE2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO DE PQRS 2018 - Segundo Semestre </span><br />
(<a href="controlin/InformeDeSegumientoPQRS-SegundoSemestre-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p><span class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2018</span><span class="subtitulosN"> - Cuarto Trimestre</span><br />
(<a href="controlin/Austeridad-Gasto-CuartoTrimestre2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</span></p>
           <p class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO PLAN ANTICORRUPCI&Oacute;N No. 04 - 2018 </span><br />
(<a href="controlin/CuartoInformePlanAnticorrupcion-2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">INFORME SEGUIMIENTO MAPA DE RIESGOS No. 04 - 2018 </span><br />
             (<a href="controlin/MapaDeRiesgos2018-Informe4.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME EJECUTIVO ANUAL DE CONTROL INTERNO - 2018 </span><br />
(<a href="controlin/InformeEjecutivoControlInt2018.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">PLAN DE AUDITORIAS 2019</span> (<a href="controlin/PlanAuditorias2019.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">PLAN DE ACCI&Oacute;N ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO - 2019</span><br />
(<a href="controlin/PlanAnticorrupcion2019.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO AL PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO 2019 - Primer Trimestre</span><br />
(<a href="controlin/SeguimientoPlanAnticorrupcion2019-PrimerTrimestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">MAPA DE RIESGOS 2019 </span><br />
(<a href="controlin/MatrizMapadeRiesgo2019.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
           <p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO A MAPA DE RIESGOS 2019 </span><span class="subtitulosN"> - Primer Trimestre</span><br />
(<a href="controlin/MapaDeRiesgos2019-PrimerTrimestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
           <p class="parrafo"><span class="subtitulosN">EVALUACI&Oacute;N DE CONTROL INTERNO CONTABLE 2019 </span><br />
(<a href="controlin/EvaluacionControlIntContable2019.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
<p class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO   DE CONTROL INTERNO</span><span class="subtitulosN"> - Noviembre 2018  a Febrero 2019</span><br />
(<a href="controlin/INFORME-PORMENORIZADO-Nov2018-Feb2019.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
<p class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2019</span><span class="subtitulosN"> - Primer Trimestre</span><br />
(<a href="controlin/AusteridadGasto2019-PrimerTrimestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
<p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO AL PLAN ANTICORRUPCI&Oacute;N Y ATENCI&Oacute;N AL CIUDADANO 2019 - Segundo Trimestre</span><br />
(<a href="controlin/SeguimientoPlanAnticorrupcion2019-SegundoTrimestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
<p class="parrafo"><span class="subtitulosN">INFORME DE SEGUIMIENTO A MAPA DE RIESGOS 2019 </span><span class="subtitulosN"> - Segundo Trimestre</span><br />
(<a href="controlin/MapaDeRiesgos2019-SegundoTrimestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
<p class="parrafo"><span class="subtitulosN">INFORME CONTROL DERECHOS DE PETICI&Oacute;N 2019 - Primer Semestre </span><br />
(<a href="controlin/DerechosDePeticion2018-1Semestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>
<p class="parrafo"><span class="subtitulosN">INFORME DE AUSTERIDAD DEL GASTO 2019</span><span class="subtitulosN"> - Segundo Trimestre</span><br />
(<a href="controlin/AusteridadGasto2019-SegundoTrimestre.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>)</p>
<p class="parrafo"><span class="subtitulosN">INFORME PORMENORIZADO   DE CONTROL INTERNO 2019 </span><span class="subtitulosN">- Marzo a Junio</span><br />
(<a href="controlin/InformePormenMar-Junio2019.pdf" target="_blank" class="gris"><strong>Descargar Archivo</strong></a>) </p>

          
           
        </div></td>
          
          
      </tr>
      <tr>
        <td height="20" align="left" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
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
