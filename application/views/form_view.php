﻿<html>
 <head>
  <title><?=$page_title?></title>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link href="/test/wijmo-open/development-bundle/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijsuperpanel.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijlist.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijtextbox.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijdropdown.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijradio.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijcheckbox.css" rel="stylesheet" type="text/css" />
    <script src="/test/wijmo-open/development-bundle/external/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/external/jquery-ui-1.9.1.custom.min.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/external/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/external/jquery.bgiframe-2.1.3-pre.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijutil.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijsuperpanel.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijlist.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijdropdown.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijradio.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijcheckbox.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijtextbox.js" type="text/javascript"></script>
        <script src="/test/wijmo-open/js/jquery.mask.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/js/jquery.money.js" type="text/javascript"></script>

    <script src="/test/wijmo-open/FixedColumns.js" type="text/javascript"></script>
	<script src="/test/wijmo-open/jquery.dataTables.js" type="text/javascript"></script>
	<script src="/test/wijmo-open/formlogic.js" type="text/javascript"></script>
	
	<style type="text/css" media="screen">
		@import "/test/wijmo-open/site.ccss";
	</style>
		
    <style type="text/css">
        .formdecorator label
        {
            display: block;
        }        
        .formdecorator
        {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .formdecorator li
        {
            clear: both;
            margin-bottom: 1em;
        }
    </style>

  <style type="text/css">
<!--
.style1 {
	color: #FF6600;
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style8 {color: #000066; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; }
.style10 {font-size: 18px}
.style13 {color: #000066}
.style15 {color: #000066; font-size: 16px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style18 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style20 {font-size: 14px}
.style21 {color: #000066; font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style22 {color: #000066; font-size: 14px; }
.style23 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000066;}
-->
  </style>
</head>

<body class="demo-single">
<table width="888" border="0">
   <tr>
     <td width="799"><p align="center" class="style1 style10">COTIZACI&Oacute;N CR&Eacute;DITO PERSONAL DESCUENTO POR N&Oacute;MINA</p>
     </td>
  </tr>
</table>
    <div class="container" id="container">
        <div class="main demo">
            <!-- Begin demo markup -->
            <form name="form1" action="overview.html" method="post">
			<div  id="tableMain">
            <ul class="formdecorator">
                                    <table width="859" border="0" bgcolor="#d1552f">
                    <tr>             
                      <td width="226" class="style13"><p class="style21"><span class="style13">Empresa</span>:                    </p></td>
                      <td width="198">   <input name="empresa" value="" id="empresa" type="text" size =30/>  </li></td>
					  <td width="199" class="style21">Solicitante/Empleado<span class="style18">:</span></td>
                      <td width="218"><input name="nombre" type="text" id="nombre" value="" size =30/> </td>
                    </tr>
	                <tr>
                       <td width="226" class="style21">Apellido Paterno: </td>
                      <td width="198"><input name="app" type="text" id="app" value="" size =30/> </td>
	                   <td width="199" class="style21">Apellido Materno:</td>
	                   <td width="218"><input name="apm" value="" type="text" id="apm" size =30/></td>
                    </tr>
  	                  <tr>
                        <td width="226" class="style22"><span class="style23">Antiguedad</span><span class="style18">:</span></td>
                        <td width="198"><input name="antiguedad" type="text" id="antiguedad" value="" size =5/> </td>
	                    <td width="199" class="style21">Tasa Fija Anual (IVA incluido)</td>
	                    <td width="218"><input name="tasafijaanual" readonly="true" type="text" id="tasafijaanual" value="27.6" size =30/></td>
                      </tr>
					  <tr>
                        <td width="226" class="style22"><span class="style23">Miembro de FAM?</span><span class="style18">:</span></td>
                        <td width="198" class="style9">
                          <select id="select2" onclick="cambiaPlazoCredito()">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>                        </td>
                        <td width="199" class="style21">CAT*</td>
	                    <td width="218" class="style15"><input name="cat" readonly="true" type="text" id="cat" size =10/>Sin IVA</td>
                      </tr>
   	                  <tr>
                        <td width="226" class="style22"><span class="style23">Sueldo Bruto Quincenal</span><span class="style18">:</span></td>
                        <td width="198"><input name="sueldobruto" type="text" id="sueldobruto" value="" size =30/> </td>
	                    <td width="199" class="style21">Gesti&oacute;n FAM:</td>
	                    <td width="218"><input name="gestionfam" type="text"  readonly=true id="gestionfam" size =10/></td>
                      </tr>
   	                  <tr>
                        <td width="226" class="style22"><span class="style23">Sueldo Neto Quincenal</span><span class="style18">:</span></td>
                        <td width="198"><input name="sueldoneto" type="text" id="sueldoneto" onChange="cambiaPlazoCredito()" value="" size =30/> </td>
	                    <td width="199" class="style21">Plazo Pagos  (12,24,36 y 48):</td>
	                    <td width="218"><select id="select1" onChange="cambiaPlazoCredito()">
					                            <option value="12">12</option>
					                            <option value="24">24</option>
					                            <option value="36">36</option>
					                            <option value="48">48</option>
						</select>
                        <span class="style15">meses</span></td>
                      </tr>
   	                  <tr>
                        <td width="226" class="style22"><span class="style23">Cr&eacute;dito M&aacute;ximo Alcanzado</span><span class="style18">:</span></td>
                        <td width="198"><input name="creditomaximo" type="text" id="creditomaximo" readonly="true" =30/> </td>
	                    <td width="199" class="style21">Plazo Cr&eacute;dito:</td>
	                    <td width="218"><input name="plazocredito" type="text" readonly=true id="plazocredito" size =20/>
                        <span class="style15">meses</span></td>
                      </tr>
   	                  <tr>
                        <td width="226" class="style22"><span class="style23">Cr&eacute;dito Solicitado</span><span class="style18">:</span></td>
                        <td width="198"><input name="creditosol" type="text" id="creditosol" onChange="cambiaPlazoCredito()" value="" size =30/> </td>
	                    <td width="199" class="style21">Forma de Pago:</td>
	                    <td width="218"><input name="formapago" type="text" value="QUINCENAL"  readonly="true" id="formapago" size =20/></td>
                      </tr>
   	                  <tr>
                        <td width="226" class="style22"><span class="style23">Quincenas de Gracia</span><span class="style18">:</span></td>
                        <td width="198"><input name="quincenasgracia" type="text" readonly="true" id="quincenasgracia"  value="4" size =10/></td>
	                    <td width="199" class="style21">N&uacute;mero de Pagos:</td>
	                    <td width="218"><input name="numpagos" type="text"  value=96 id="numpagos" readonly="true" size =20/></td>
                      </tr>
					  <tr>
                        <td width="226" class="style22"><span class="style23">Telefono Casa </span><span class="style18">:</span></td>
                        <td width="198" class="style10"><input name="telcasa" type="text" id="telcasa" value="" size =20/></td>
	                    <td width="199" class="style21">Descuento Gesti&oacute;n (12 o 24 quincenas):</td>
	                    <td width="218"><input name="descuentogestion" type="text" id="descuentogestion" readonly=true size =20/></td>
                      </tr>
<tr>
                        <td width="226" class="style22"><span class="style23">E-Mail</span><span class="style18">:</span></td>
                        <td width="198" class="style10"><input name="email" type="text" id="email" value="" size =20/></td>						
          <td width="199" class="style21">Descuento:</td>
          <td width="218"><input name="descuento" type="text" id="descuento" readonly="true" size =20/></td>

                      </tr>
					  <tr>
                        <td width="226" class="style22"><span class="style23">Nombre Escuela: </span><span class="style18"></span></td>
                        <td width="198"><input name="nomescuela" type="text" id="nomescuela" value="" size =30/></td>
	                    <td width="199" class="style21">Quincenas a Descontar por Gesti&oacute;n:</td>
	                    <td width="218"><input name="quincenasdescontar" type="text" readonly="true" id="quincenasdescontar" size =20/></td>
                      </tr>
<tr>
                        <td width="226" height="36" class="style22"><span class="style23">Tel&eacute;fono Escuela: </span><span class="style18"></span></td>
                        <td width="198"><input name="telescuela" type="text" id="telescuela" value="" size =20/></td>
          <td width="199" class="style21"></td>
          <td width="218">total:<input name="pagototal" type="text" id="pagototal" size =20/></td>					  					  			 
	            </tr>

              </table>			

			  </div>
			      <span class="style23">*Costo Anual Total para fines informativos y de comparaci&oacute;n exclusivamente<br>
		          <br>

				  </span>
			      <div id="mensajeGuardar"></div>				  	
				  <button id="wijmo-button" onClick="cotizar()">Cotizar</button>
  				  <button id="wijmo-button2" onClick="guardar()">Guardar</button>
				  <button id="wijmo-button3" onClick="imprimir()">Imprimir</button>
			</br>
			</br>
			</form>
			</div>
	</div>
	<div id="resultado"></div>	
	<div id="reportediv" >
	<form name="imprimirForm" action="generar" method="post" target="_blank">
			<input type="hidden" id="datos" name="datos" value=""/>
 		 	<input type="hidden" id="reporte" name="reporte" value=""/>
			<input type="submit" name="submitHid" id="submitHid" name="submitHid" />
	</form></div>
</body>
</html>