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
        <td height="20" class="titulosN">Funciones de la Entidad </td>
      </tr>
      
      <tr>
        <td height="20" align="left" valign="top"><div align="justify">
          <p class="subtitulosN">Junta directiva</p>
          <p class="parrafo">Formular y adoptar el Plan Sectorial de Desarrollo y el correspondiente plan de inversiones, determinar los instrumentos necesarios para la ejecuci&oacute;n y cumplimiento de acuerdo con lo preceptuado en la ley org&aacute;nica del Plan de Desarrollo y en los Planes de Inversi&oacute;n y Desarrollo Nacional y Departamental. En la elaboraci&oacute;n del plan se dar&aacute; amplia participaci&oacute;n a los entes deportivos municipales a las organizaciones deportivas, recreativas y de educaci&oacute;n f&iacute;sica que funcionen en el Departamento. Establecer las directrices para la prestaci&oacute;n de servicios y fijar los criterios y las tarifas para el precio de los mismos. Determinar la estructura administrativa, las funciones de las dependencias, categor&iacute;as de empleos, nomenclatura de los cargos, fijarles su remuneraci&oacute;n y r&eacute;gimen jur&iacute;dico del personal. Crear, fusionar y/o suprimir cargos. Fijar las asignaciones salariales del personal al servicio. Aprobar anualmente el presupuesto de rentas y gastos. Estudiar y decidir conforme a las normas financieras y contables lo relativo a los balances, estados e informes financieros. Autorizar al Director conforme a las Disposiciones legales para celebrar contratos, negociar empr&eacute;stitos y enajenar bienes inmuebles, construir garant&iacute;as sobre ellos grabarlos cuando fuere necesario. Aprobar las transacciones de las diferencia del instituto con terceros y efectuar los reconocimientos a que haya lugar por concepto de reclamaciones e indemnizaciones.</p>
          <p class="subtitulosN">Direcci&oacute;n general</p>
          <p class="parrafo"><strong>Objetivo</strong><br />
            Establecer el  direccionamiento estrat&eacute;gico y orientar la proyecci&oacute;n de crecimiento deportivo  de Santander.</p>
          <p class="parrafo"><strong>Funciones</strong></p>
          <ul>
            <li class="parrafo">Dirigir, administrar y coordinar las distintas  dependencias que conforman el Instituto Departamental de Recreaci&oacute;n y Deportes,  asegurando el cumplimiento de las orientaciones y decisiones de la Junta  Directiva de acuerdo con las funciones que se hayan se&ntilde;alado a las distintas  &aacute;reas administrativas y funcionales.</li>
            <li class="parrafo">&nbsp;Presentar para su aprobaci&oacute;n a la Junta  Directiva el presupuesto anual y los planes mensuales de gastos, los proyectos  de reglamento, estructura org&aacute;nica y planta de personal y el informe anual de  gesti&oacute;n para su evaluaci&oacute;n</li>
            <li class="parrafo">Expedir los actos administrativos de su  competencia,</li>
            <li class="parrafo">Realizar y celebrar contratos y convenios  necesarios para el cumplimiento de la misi&oacute;n institucional conforme a las  autorizaciones que para el efecto le sean otorgadas. </li>
            <li class="parrafo">Gestionar recursos para el buen desempe&ntilde;o  institucional.</li>
          </ul>
          <p class="parrafo">&nbsp;</p>
          <p class="subtitulosN">Coordinaci&oacute;n deporte asociado</p>
          <p class="parrafoN"><strong>Objetivo</strong></p>
          <p class="parrafo">Dise&ntilde;ar, crear, aplicar, evaluar,  controlar y coordinarlos diferentes planes, pol&iacute;ticas y programas  administrativos, as&iacute; como la formaci&oacute;n y capacitaci&oacute;n del talento humano de las  entidades que hacen parte del deporte asociado en el departamento, y con ello  garantizar el mejoramiento y/o optimizar del sector<br />
          </p>
          <p class="parrafoN"><strong>Funciones</strong></p>
          <ul>
            <li class="parrafo">Asesorar a la Direcci&oacute;n en  los planes, programas y estrategias para el desarrollo del deporte asociado y  competitivo del Departamento. </li>
            <li class="parrafo">Asesorar a las ligas y  clubes en su organizaci&oacute;n, funcionamiento y desarrollo deportivo. </li>
            <li class="parrafo">Elaborar y presentar a la  direcci&oacute;n planes, programas y estrategias para el desarrollo deportivo del  departamento </li>
            <li class="parrafo">Presentar a la direcci&oacute;n  planes y programas relacionados con el deporte competitivo. </li>
            <li class="parrafo">Programar y facilitar la  capacitaci&oacute;n en administraci&oacute;n y legislaci&oacute;n deportiva y tramitar los  reconocimientos deportivos que por competencia le corresponden. </li>
            <li class="parrafo">Sugerir a la Direcci&oacute;n del  Instituto de acuerdo con su competencia y en coordinaci&oacute;n con las dem&aacute;s  dependencias de la Entidad, las pol&iacute;ticas para que se cumplan las funciones de  inspecci&oacute;n, vigilancia y control sobre los organismos deportivos pertenecientes  al Sistema Nacional del Deporte, de conformidad con las disposiciones legales y  reglamentarias. </li>
            <li class="parrafo">Asesorar a la Direcci&oacute;n en el apoyo y participaci&oacute;n  de los organismos del deporte asociado en los eventos, a nivel nacional e  internacional. </li>
          </ul>
          <p class="parrafo">&nbsp;</p>
          <p class="subtitulosN">Coordinaci&oacute;n deporte estudiantil</p>
          <p class="parrafoN"><strong>Objetivo</strong></p>
          <p class="parrafo">Gestionar el desarrollo de  actividades para el fomento del deporte y la competencia a nivel estudiantil.<br />
              <strong><br />
              <span class="parrafoN">Funciones</span></strong></p>
          <ul>
            <li class="parrafo">Impulsar actividades  deportivas, formativas y pedag&oacute;gicas en las instituciones educativas, centros y  escuelas deportivas, tendientes a conocer los talentos en el &aacute;rea del deporte a  esos niveles y prestar apoyo para el desarrollo y formaci&oacute;n del deportista  santandereano. </li>
            <li class="parrafo">Facilitar asistencia t&eacute;cnica  a los Institutos Municipales de Deportes, para la ejecuci&oacute;n de sus planes,  programas y proyectos relacionados con el deporte formativo y estudiantil y  eventos deportivos especiales. </li>
            <li class="parrafo">Programar actividades del  deporte formativo y eventos deportivos en todos los niveles de la Educaci&oacute;n  formal y no formal primaria b&aacute;sica, media vocacional y superior. </li>
            <li class="parrafo">Participar en la planeaci&oacute;n,  programaci&oacute;n, organizaci&oacute;n y ejecuci&oacute;n de todas las actividades encaminadas a  desarrollar los programas de deporte, educaci&oacute;n f&iacute;sica y recreaci&oacute;n.</li>
            <li><span class="parrafo">Coordinar la creaci&oacute;n, regulaci&oacute;n, control t&eacute;cnico  y administrativo de las Escuelas de Formaci&oacute;n Deportiva. Participar en el  dise&ntilde;o del plan departamental de capacitaci&oacute;n, recreaci&oacute;n y educaci&oacute;n f&iacute;sica.</span></li>
          </ul>
          <p class="parrafo">&nbsp;</p>
          <p class="subtitulosN">Coordinaci&oacute;n deporte social comunitario</p>
          <p class="parrafoN"><strong>Objetivo</strong></p>
          <p class="parrafo">Generar espacios de  esparcimiento y recreaci&oacute;n que contribuyan al mejoramiento de la calidad de  vida de la comunidad santandereana.</p>
          <p class="parrafoN"><strong>Funciones</strong></p>
          <ul>
            <li class="parrafo">Dise&ntilde;ar programas especiales que fomenten y  estimulen la educaci&oacute;n f&iacute;sica, el deporte y la recreaci&oacute;n de las personas con  discapacidades f&iacute;sicas, ps&iacute;quicas y sensoriales y de la tercera edad. </li>
            <li class="parrafo">Dar asistencia t&eacute;cnica a los entes municipales  para la ejecuci&oacute;n de sus planes y proyectos relacionados con el deporte, la  recreaci&oacute;n y la educaci&oacute;n f&iacute;sica. </li>
            <li class="parrafo">Fomentar y estimular programas especiales  contemplados dentro del deporte social y comunitario, orientados a los  discapacitados, mujeres cabeza de familia, adulto mayor y senior master. </li>
            <li class="parrafo">Fomentar actividades recreativas orientadas a  los diferentes grupos poblacionales, tales como ni&ntilde;os j&oacute;venes y adultos. </li>
            <li class="parrafo">Supervisar el mantenimiento de los escenarios  deportivos y el pr&eacute;stamo de los mismos. </li>
            <li class="parrafo">Ejecutar planes y programas para el desarrollo  del deporte formativo, recreativo y social comunitario.</li>
            <li class="parrafo">Definir el plan anual de acci&oacute;n deportivo concatenado  al plan de desarrollo del departamento.</li>
          </ul>
          <p class="parrafoN"><strong><span class="subtitulosN">Coordinaci&oacute;n deporte de alto rendimiento </span></strong></p>
          <p class="parrafoN"><strong>Objetivo</strong></p>
          <p class="parrafo">Dise&ntilde;ar, aplicar, dirigir,  evaluar, controlar y coordinar junto con la entidad los planes, pol&iacute;ticas y  programas en materia de deporte competitivo y de alto rendimiento, formaci&oacute;n  del talento humano propio del sector, detecci&oacute;n de talentos reservas y  rendimientos deportivos, procesos de desarrollo, preparaci&oacute;n y participaci&oacute;n de  los deportistas en eventos nacionales, internacionales del Ciclo Ol&iacute;mpico y  Paral&iacute;mpico, dentro de las directrices de la Ley<br />
          </p>
          <p class="parrafoN"><strong>Funciones</strong></p>
          <ul>
            <li class="parrafo">Planear,  coordinar, evaluar y controlar los programas y procesos de calidad desde  el punto de vista administrativo, t&eacute;cnico y financiero, relacionados con el desarrollo, preparaci&oacute;n y  participaci&oacute;n de los deportistas de alto&nbsp;  rendimiento que se encuentran adscritos a las diferentes disciplinas  deportivas, de conformidad con las normas, directrices y objetivos de  competencia institucional que garanticen de manera integral en las &aacute;reas  biom&eacute;dica, metodol&oacute;gica, t&eacute;cnica aplicando est&aacute;ndares de rendimiento&nbsp; estad&iacute;stico que garanticen alcanzar  ciertamente las marcas m&iacute;nimas&nbsp;  requeridas para participar en juegos regionales, nacionales e  internacionales, garantizando la efectividad y eficiencia de los recursos, su  funcionalidad y fortalecimiento institucional</li>
            <li class="parrafo">Participar  en el dise&ntilde;o de planes y programas tendientes a la b&uacute;squeda y apoyo de los  talentos deportivos.</li>
            <li class="parrafo">Proponer  y coordinar con medicina deportiva el desarrollo de los planes de deporte  competitivo y talentos deportivos</li>
            <li class="parrafo">Controlar  y supervisar el trabajo de los entrenadores contratados por el Instituto para  preparar los deportistas de nuestro departamento.</li>
          </ul>
          <p class="parrafo">&nbsp;</p>
          <p class="subtitulosN">Oficina juridica</p>
          <p class="parrafo"><span class="parrafoN">Objetivo</span></p>
          <ul>
            <li class="parrafo">Brindar  la orientaci&oacute;n requerida para el fortalecimiento del criterio en el proceso  decisorio, asegurando el cumplimiento de la gesti&oacute;n en el marco de los esquemas  legales y normativos aplicables.</li>
          </ul>
          <p class="parrafoN">Funciones</p>
          <ul>
            <li class="parrafo">Su funci&oacute;n b&aacute;sica es prestar  asesor&iacute;a jur&iacute;dica en forma eficiente, eficaz y oportuna a la Direcci&oacute;n, al  equipo directivo y a las diferentes dependencias de la Entidad en el  conocimiento, capacitaci&oacute;n e interpretaci&oacute;n de las normas aplicables.</li>
            <li class="parrafo">Coordinar las actividades  relacionadas con la presentaci&oacute;n&nbsp; y/o  elaboraci&oacute;n de los informes establecidos o solicitados por la Junta Directiva y  por parte de la Direcci&oacute;n, as&iacute; como los documentos que deban ser aprobados por  los mismos para el normal funcionamiento y desarrollo de sus funciones,  objetivos, programas y procedimientos de la Entidad, de conformidad a la  constituci&oacute;n, la Ley y las normas vigentes que le son aplicables</li>
            <li class="parrafo">Representar&nbsp; judicial y extrajudicialmente a la Entidad en  los procesos que se adelanten en su contra o en los que se deban promover y la  direcci&oacute;n y establecimiento de los procesos de licitaci&oacute;n y contrataci&oacute;n para  su debida adjudicaci&oacute;n y ejecuci&oacute;n.&nbsp; </li>
          </ul>
          <p class="parrafo">&nbsp;</p>
          <p class="subtitulosN">Oficina de control interno</p>
          <p class="parrafo"><span class="parrafoN"><strong>Objetivo </strong></span><strong><br />
          </strong>Orientar la gesti&oacute;n del  mejoramiento a partir del an&aacute;lisis de la efectividad del ejercicio de control  interno y la evaluaci&oacute;n sistem&aacute;tica y transparente del desempe&ntilde;o institucional.<br />
          <strong><br />
          <span class="parrafoN">Funciones</span></strong></p>
          <ul>
            <li class="parrafo">Medir y evaluar la eficiencia, eficacia y econom&iacute;a de las pr&aacute;cticas y  metas institucionales. </li>
            <li class="parrafo">Establecer programas, formular y efectuar planes sobre los posibles  riesgos administrativos que puedan ocasionarse en el desarrollo de las  actividades. </li>
            <li class="parrafo">Planear dirigir y organizar la verificaci&oacute;n y evaluaci&oacute;n del sistema de  control interno. </li>
            <li class="parrafo">Evaluar permanentemente los m&eacute;todos y procedimientos del Instituto.</li>
            <li class="parrafo">Informar oportunamente a la Direcci&oacute;n sobre las debilidades del sistema  de control interno. Revisar y evaluar los manuales de funciones y  procedimientos y recomendar su actualizaci&oacute;n.</li>
            <li class="parrafo">Participar en el comit&eacute; del control interno, de saneamiento contable,  administrativo, t&eacute;cnico y dem&aacute;s a las que sea requerido. </li>
            <li class="parrafo">Planear, coordinar, controlar y evaluar el trabajo del personal de su  dependencia. </li>
            <li class="parrafo">Asesorar  en la implantaci&oacute;n de la cultura de autocontrol, sentido de pertenencia y  valores institucionales.</li>
          </ul>
          <p class="subtitulosN">Coordinaci&oacute;n administrativa y financiera</p>
          <p class="parrafoN"><strong>Objetivo</strong></p>
          <p class="parrafo">Orientar la administraci&oacute;n  eficiente de los recursos financieros y de infraestructura de Indersantander.<br />
              <strong><br />
              <span class="parrafoN">Funciones</span></strong></p>
          <ul>
            <li class="parrafo">Su funci&oacute;n b&aacute;sica es  programar, conducir y controlar los procesos administrativos de personal,  suministros, bienes, servicios de mantenimiento de la planta f&iacute;sica y servicios  generales necesarios para el normal funcionamiento de la Instituci&oacute;n.</li>
            <li class="parrafo">Atiende su funci&oacute;n b&aacute;sica a  trav&eacute;s de los grupos de gesti&oacute;n de Recursos Humanos, Recursos F&iacute;sicos,  servicios b&aacute;sicos y de mantenimiento, de Apoyo Tecnol&oacute;gico y de informaci&oacute;n.</li>
            <li class="parrafo">Financieramente, Planear, organizar, dirigir, coordinar y controlar las  funciones, procedimientos de manejo presupuestal, de recursos financieros y  registro de las transacciones financieras.</li>
            <li class="parrafo">Administrar el talento humano necesario para el correcto  funcionamiento de la Instituci&oacute;n, en cuanto a: planificaci&oacute;n, selecci&oacute;n,  vinculaci&oacute;n, inducci&oacute;n y entrenamiento, evaluaci&oacute;n y control del desempe&ntilde;o, as&iacute;  como el manejo de n&oacute;mina, prestaciones sociales y econ&oacute;micas.</li>
            <li class="parrafo">Ejecutar los procesos de  planeaci&oacute;n, adquisici&oacute;n, recepci&oacute;n, almacenamiento, distribuci&oacute;n, evaluaci&oacute;n y  control del suministro de los insumos.</li>
            <li class="parrafo">Garantizar al cliente  interno y externo unas condiciones &oacute;ptimas en el acondicionamiento y  mantenimiento de las instalaciones de la Instituci&oacute;n.</li>
            <li class="parrafo">El desarrollo,  mantenimiento, administraci&oacute;n, capacitaci&oacute;n y seguridad de los sistemas de  informaci&oacute;n y la administraci&oacute;n de los recursos inform&aacute;ticos de la Entidad,  para la efectividad y optimizaci&oacute;n&nbsp; los  procedimientos y recursos.</li>
            <li class="parrafo">Igualmente garantizar los procedimientos  relacionados con la organizaci&oacute;n y el fortalecimiento del archivo y  conservaci&oacute;n del patrimonio documental acorde a la normatividad vigente.</li>
          </ul>
          <p class="subtitulosN">Contabilidad</p>
          <p class="parrafo">Cumplir con la Constituci&oacute;n y la ley. Elaborar los Estados Financieros B&aacute;sicos. Validar los registros contables Conciliar las cuentas de Balance. Presentar los informes financieros y administrativos cuando se requieran por parte de la Direcci&oacute;n y los &oacute;rganos de control y de vigilancia. Actualizar el Plan de Cuentas Reportar al &aacute;rea financiera las modificaciones presupu&eacute;stales que se detecten en contabilidad. Imprimir clasificar y archivar comprobantes de contabilidad, notas de contables auxiliares y dem&aacute;s documentos contables que se requieran. Hacer las copias de seguridad de la informaci&oacute;n contable. Llevar los libros de contabilidad exigidos por la ley. Presentar t&eacute;cnicamente y firmados cada a&ntilde;o, los balances y estados financieros del periodo contable. Analizar los informes y estados financieros, para la toma de decisiones y medidas correctivas por parte de la administraci&oacute;n, ayudando as&iacute; a la definici&oacute;n de planes, programas y estrategias. Presentar informes peri&oacute;dicos al &aacute;rea administrativa y financiera en la consecuci&oacute;n de recursos financieros y pol&iacute;ticas de administraci&oacute;n financiera. Realizar los ajustes contables que se requieran como resultados de an&aacute;lisis de saldos de las cuentas. Presentar las declaraciones de Impuestos. Desempe&ntilde;ar las dem&aacute;s actividades propias del cargo y la que, de acuerdo con la naturaleza y el nivel del mismo, le sean asignadas por su superior jer&aacute;rquico.</p>
          <p class="subtitulosN">Tesorer&iacute;a</p>
          <p class="parrafo">Cumplir con la Constituci&oacute;n y la ley. Elaborar el bolet&iacute;n diario de Tesorer&iacute;a, de fondos comunes y fondos especiales, firm&aacute;ndolo en se&ntilde;al de aceptaci&oacute;n. Elaborar mensualmente conciliaciones bancarias y el listado de acreedores y cuentas por pagar. Revisar, controlar y seleccionar las &oacute;rdenes de pago para la ejecuci&oacute;n del acuerdo mensual de gastos y las cuentas diarias por cualquier otro concepto. Organizar y distribuir las cuentas canceladas, relaciones de caja y bancos, consignaciones con cada uno de los boletines, remitiendo todos estos soportes a la contabilizaci&oacute;n correspondiente, y a los organismos de control cuando sea necesario. Registrar los libros de avances, libros de bancos y en general libros de tesorer&iacute;a que permitan el control de movimientos financieros. Expedir paz y salvos y certificaciones que por disposici&oacute;n legal o reglamentaria sean de su competencia. Elaborar cheques para la ejecuci&oacute;n del acuerdo mensual de gastos, los traslados de fondos de banco a banco y la elaboraci&oacute;n de los comprobantes de ingresos para el recaudo de fondos, aportes y auxilios. Gestionar los tr&aacute;mites de cobro de aportes o cr&eacute;ditos obtenidos ante las entidades o personas correspondientes. Coordinar el tr&aacute;mite adecuado de las p&oacute;lizas de manejo de valores. Verificar y firmar los cheques para pagos por todo concepto, junto con su respectivo comprobante de pago. Atender los asuntos relacionados con el manejo de cuentas, servicios bancarios y distribuci&oacute;n f&iacute;sica del dinero, seg&uacute;n la estructura de esquema de cuentas bancarias. Suministrar la informaci&oacute;n requerida por las dem&aacute;s dependencias o secciones para la realizaci&oacute;n de sus actividades propias. Excelente atenci&oacute;n al usuario externo e interno. Participar en los comit&eacute;s que le asigne el superior jer&aacute;rquico Desempe&ntilde;ar las dem&aacute;s actividades propias del cargo y la que, de acuerdo con la naturaleza y el nivel del mismo, le sean asignadas por su superior jer&aacute;rquico.</p>
          <p class="subtitulosN">Almac&eacute;n</p>
          <p class="parrafo">Cumplir con la Constituci&oacute;n y la ley. Realizar la pr&aacute;ctica de inventarios peri&oacute;dicos y anuales, adelantando las acciones pertinentes en caso de diferencias. Llevar estad&iacute;sticas detalladas sobre movimiento de salidas y entradas de elementos. Determinar peri&oacute;dicamente los stocks m&aacute;ximos y m&iacute;nimos de las existencias de los elementos. Rendir las cuentas de almac&eacute;n de conformidad con las normas preestablecidas. Autorizar con su firma el certificado de paz y salvo de almac&eacute;n. Velar por el oportuno y correcto cumplimiento de todos los tr&aacute;mites relacionados con la recepci&oacute;n de elementos y la entrega o distribuci&oacute;n de los mismos dentro del Instituto. Rendir informes peri&oacute;dicos sobre la situaci&oacute;n de almac&eacute;n a su superior inmediato, proponiendo las medidas necesarias para la correcci&oacute;n de las irregularidades encontradas y velar porque estas se cumplan. Supervisar el movimiento de las operaciones con sus respectivos comprobantes de entradas y salidas de elementos debidamente diligenciados. Velar porque se cumplan las normas legales sobre el control de inventarios. Distribuir adecuadamente las instalaciones destinadas para el almacenamiento, tomando las medidas necesarias para protecci&oacute;n, conservaci&oacute;n y custodia. Revisar y dar tr&aacute;mite a las solicitudes de pedidos internos necesarios para el buen funcionamiento de las dependencias. Preparar y enviar la informaci&oacute;n que requieran las diferentes dependencias. Participar en los comit&eacute;s administrativos y junta de compras. Coordinar, controlar y dirigir las labores desarrolladas por los funcionarios a su cargo. Desempe&ntilde;ar las dem&aacute;s actividades propias del cargo y la que, de acuerdo con la naturaleza y el nivel del mismo, le sean asignadas por su superior jer&aacute;rquico.</p>
          <p class="parrafo"><span class="titulosN">Objetivos Institucionales&nbsp;</span><br />
  Los objetivos institucionales se encuentran consagrados en el articulo 3 del Decreto 054de 1997 y 4 del acuerdo 001 del 2006 as&iacute;:</p>
          <p class="parrafo">La coordinaci&oacute;n del Plan Nacional del Deporte, la Recreaci&oacute;n y la Educaci&oacute;n F&iacute;sica en los t&eacute;rminos de la ley 181 de 1995. La contribuci&oacute;n al desarrollo de la educaci&oacute;n familiar escolar y extraescolar de la ni&ntilde;ez y de la juventud para que utilicen el tiempo libre, el Deporte y la recreaci&oacute;n como elementos fundamentales en su proceso de formaci&oacute;n personal como comunitario. La estimulaci&oacute;n de la participaci&oacute;n ciudadana y la integraci&oacute;n funcional en los t&eacute;rminos de la Constituci&oacute;n Nacional, la Ley y adem&aacute;s normas que regulen la practica deportiva, la Educaci&oacute;n F&iacute;sica y el aprovechamiento del tiempo libre. En ese sentido orientara sus recursos buscando adem&aacute;s, su correcta destinaci&oacute;n, la eficiencia, econom&iacute;a y equidad.</p>
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
